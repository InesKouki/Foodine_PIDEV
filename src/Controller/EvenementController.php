<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class EvenementController extends AbstractController
{
    /**
     * @Route("/evenements", name="event")
     */
    public function afficheFront(EvenementRepository $repo)
    {
        $event=$repo->getActiveEvents();
        return $this->render('front/evenement/index.html.twig', ['frontEvents' => $event]);
    }

    /**
     * @Route("/admin-evenements", name="evenement")
     */
    public function afficheBack(EvenementRepository $repo, PaginatorInterface $paginator, Request $request)
    {
        $donnes=$repo->orderByNameAscQB();
        $event=$paginator->paginate(
            $donnes,
            $request->query->getInt('page',1),3
        );
        return $this->render('back/evenement/index.html.twig', ['backEvents' => $event]);
    }

    /**
     * @Route("/admin-evenements/searchResajax ", name="searchEventResajax")
     */
    public function searchEventAjax(EvenementRepository $repo,Request $request)
    {
        $requestString=$request->get('searchValue');
        $events = $repo->findEventByName($requestString);

        return $this->render('back/evenement/ajax.html.twig', [
            "backEvents"=>$events
        ]);
    }

    /**
     * @Route("/admin-addEvenement", name="addEvenement")
     */
    public function addEvenement(Request $request,\Swift_Mailer $mailer,UserRepository $repo)
    {
        $event = new Evenement();
        $form = $this->createForm(EvenementType::class,$event);
        $form->handleRequest($request);
        $file = $form['image']->getData();

        $users = $repo->findOnlyUsers();

        if ($form->isSubmitted() && $form->isValid()) {
                $upload_dir = $this->getParameter('uploads_directory');
                $filename = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move($upload_dir, $filename);

                $event->setImage($filename);

                $em = $this->getDoctrine()->getManager();
                $em->persist($event);
                $em->flush();
                foreach ($users as $user) {
                    $message = (new \Swift_Message('Foodine - ' . $event->getName()))
                        ->setFrom('foodine01@gmail.com')
                        ->setTo($user->getEmail())
//                        ->setBody('Un nouvel événement plein de promotions vous attend!');
                        ->setBody($this->renderView(
                            'back/evenement/email.html.twig', compact('event')
                        ),
                            'text/html'
                        );

                    $mailer->send($message);
                }
            return $this->redirectToRoute('evenement');
        }

        return $this->render('back/evenement/addEvenement.html.twig', [
            'eventForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin-updateEvenement-{id}", name="updateEvenement")
     */
    public function updateEvenement(Request $request, EvenementRepository $repo, $id)
    {
        $event = $repo->find($id);
        $form = $this->createForm(EvenementType::class,$event);
        $form->handleRequest($request);
        $file = $form['image']->getData();

        if ($form->isSubmitted() && $form->isValid()){
            if ($file) {
                $upload_dir = $this->getParameter('uploads_directory');
                $filename = md5(uniqid())   . '.' .   $file->guessExtension();
                $file->move($upload_dir,$filename);

                $event->setImage($filename);
            }

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('evenement');
        }

        return $this->render('back/evenement/updateEvenement.html.twig', [
            'eventForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin-deleteEvenement-{id}", name="deleteEvenement")
     */
    public function deleteEvenement(EvenementRepository $repo, $id)
    {
            $em=$this->getDoctrine()->getManager();

            $event=$repo->find($id);
            $em->remove($event);
            $em->flush();
            return $this->redirectToRoute('evenement');
    }

    /**
     * @Route("/admin-evenements-sortbynameasc", name="evenementSortByNameAsc")
     */
    public function sortBackByNameAsc(EvenementRepository $repo,PaginatorInterface $paginator, Request $request)
    {
        $donnes=$repo->orderByNameAscQB();
        $event=$paginator->paginate(
            $donnes,
            $request->query->getInt('page',1),3
        );
        return $this->render('back/evenement/index.html.twig', ['backEvents' => $event]);
    }

    /**
     * @Route("/admin-evenements-sortbynamedesc", name="evenementSortByNameDesc")
     */
    public function sortBackByNameDesc(EvenementRepository $repo,PaginatorInterface $paginator, Request $request)
    {
        $donnes=$repo->orderByNameDescQB();
        $event=$paginator->paginate(
            $donnes,
            $request->query->getInt('page',1),3
        );
        return $this->render('back/evenement/index.html.twig', ['backEvents' => $event]);
    }

    /**
     * @Route("/admin-evenements-sortbydateasc", name="evenementSortByDateAsc")
     */
    public function sortBackByDateAsc(EvenementRepository $repo,PaginatorInterface $paginator, Request $request)
    {
        $donnes=$repo->orderByDateAscQB();
        $event=$paginator->paginate(
            $donnes,
            $request->query->getInt('page',1),3
        );
        return $this->render('back/evenement/index.html.twig', ['backEvents' => $event]);
    }

//  --------- ROUTES MOBILE ----------

    /**
     * @Route("/events", name="displayEvents")
     */
    public function displayEvents(EvenementRepository $repo,SerializerInterface $serializer)
    {
        $events = $repo->findAll();
        $formatted = $serializer->normalize($events,'json',['groups' => 'events']);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/addEvent", name="addEvent")
     * @Method ("POST")
     */
    public function addEvent(Request $request)
    {
        $reclamation = new Evenement();
        $name = $request->query->get("name");
        $date_deb = $request->query->get("dateDeb");
        $date_fin = $request->query->get("dateFin");
//        $date_deb = new \DateTime('yesterday');
//        $date_fin = new \DateTime('now');
        $description = $request->query->get("description");
        $image = $request->query->get("image");
        $em = $this->getDoctrine()->getManager();
        $reclamation->setName($name);
        $reclamation->setDescription($description);
        $reclamation->setDateDeb($date_deb);
        $reclamation->setDateFin($date_fin);
        $reclamation->setImage($image);

        $em->persist($reclamation);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reclamation);
        return new JsonResponse($formatted);


    }

    /**
     * @Route("/deleteEvent", name="delete_reclamation")
     * @Method("DELETE")
     */

    public function deleteReclamationAction(Request $request) {
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Evenement::class)->find($id);
        if($reclamation!=null ) {
            $em->remove($reclamation);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Evenement a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id evenement invalide.");


    }

    /**
     * @Route("/updateEvent", name="update_reclamation")
     * @Method("PUT")
     */
    public function modifierReclamationAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $this->getDoctrine()->getManager()
            ->getRepository(Evenement::class)
            ->find($request->get("id"));

        $reclamation->setName($request->get("name"));
        $reclamation->setDescription($request->get("description"));

        $em->persist($reclamation);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("Evenement a ete modifiee avec success.");
        return new JsonResponse($formatted);

    }


}
