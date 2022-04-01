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
        $events = $repo->orderByNameAscQB();
        $formatted = $serializer->normalize($events,'json',['groups' => 'events']);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/addEvent", name="addEvent")
     * @Method ("POST")
     */
    public function addEvent(Request $request, UserRepository $repo, \Swift_Mailer $mailer)
    {
        $event = new Evenement();
        $name = $request->query->get("name");
        $date_deb = $request->query->get("date_deb");
        $date_fin = $request->query->get("date_fin");
//      $date_deb = new \DateTime('yesterday');
//      $date_fin = new \DateTime('now');
        $description = $request->query->get("description");

        $em = $this->getDoctrine()->getManager();
        $event->setName($name);
        $event->setDescription($description);
        $event->setDateDeb(new \DateTime($date_deb));
        $event->setDateFin(new \DateTime($date_fin));
        $event->setImage("1c269da8883f356cca4d56392cd69d25.png");

        $em->persist($event);
        $em->flush();

        $users = $repo->findOnlyUsers();

        foreach ($users as $user) {
            $message = (new \Swift_Message('Foodine - ' . $name))
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

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("event a ete ajoute");
        return new JsonResponse($formatted);


    }

    /**
     * @Route("/updateEvent", name="updateEvent")
     * @Method("PUT")
     */
    public function modifierEventAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $event = $this->getDoctrine()->getManager()
            ->getRepository(Evenement::class)
            ->find($request->get("id"));

        $event->setName($request->get("name"));
        $event->setDescription($request->get("description"));
        $event->setDateDeb(new \DateTime($request->get("date_deb")));
        $event->setDateFin(new \DateTime($request->get("date_fin")));

        $em->persist($event);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("Evenement a ete modifiee avec success.");
        return new JsonResponse($formatted);

    }

    /**
     * @Route("/deleteEvent", name="deleteEvent")
     * @Method("DELETE")
     */

    public function deleteEventAction(Request $request) {
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Evenement::class)->find($id);
        if($event!=null ) {
            $em->remove($event);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Evenement a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id evenement invalide.");


    }



}
