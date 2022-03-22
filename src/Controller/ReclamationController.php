<?php

namespace App\Controller;

use App\Entity\Notification;
use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Entity\User;
use App\Form\AddReclamationType;
use App\Form\ReponseType;
use App\Repository\ReclamationRepository;
use Knp\Component\Pager\PaginatorInterface;
use phpDocumentor\Reflection\DocBlock\Serializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="reclamation")
     */
    public function index(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }


    /**
     * @return Response
     * @Route("/add_rec", name="add_rec")
     */
    public function add(Request $request)
    {
        $reclamation = new Reclamation();
        $notif = new Notification();

        $form = $this->createForm(AddReclamationType::class, $reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $reclamation->setUser($this->getUser());
            $reclamation->setCreatedAt(new \DateTime('now'));
            $reclamation->setEtat(0);
            $msg = $form->get('Description')->getData();
            $notif->setTitre("Reclamation");
            $notif->setMessage($msg);
            $notif->setStatus(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($notif);
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('front');
        }
        return $this->render("/front/reclamation/add.html.twig", array('form' => $form->createView()));
    }

    /**
     * @return Response
     * @Route ("/show_rec" , name="show_rec")
     */
    public function showReclamation(Request $request,PaginatorInterface $paginator)
    {

        $repository = $this->getDoctrine()->getRepository(Reclamation::class);
        $data = $repository->findAll();
        $rec = $paginator->paginate(
            $data, // on passe les données
            $request->query->getInt('page',1), //numero de la page en cours, 1par defaut
            5 // le nombre d'element par page


        );
        return $this->render("/back/reclamations/show.html.twig", [
            'rec' => $rec
        ]);
    }

    /**
     * @param ReclamationRepository $repository
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/delete_rec{id}", name="delete_rec")
     */
    public function deleteRec(ReclamationRepository $repository, $id)
    {
        $reclamation = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute('show_rec');
    }

    /**
     * @param Request $request
     * @param $id
     * @param ReclamationRepository $repository
     * @param \Swift_Mailer $mailer
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/rec_res/{id}" , name="rec_res")
     */
    public function reponse(Request $request, $id, ReclamationRepository $repository, \Swift_Mailer $mailer)
    {
        $reponse = new Reponse();
        $reclamation = $repository->find($id);
        $user = $reclamation->getUser();
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setEtat(1);
            $reponse->setRecla($reclamation);
            $msg = $form->get('Message')->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($reponse);
            $em->flush();
            $message = (new \Swift_Message('Réponse à votre reclamation'))
                ->setFrom('foodine01@gmail.com')
                ->setTo($user->getEmail())
                ->setBody($this->renderView(
                    '/back/reclamations/reponseEmail.html.twig', ['msg' => $msg]
                ),
                    'text/html');
            $mailer->send($message);
            return $this->redirectToRoute('show_rec');

        }
        return $this->render("/back/reclamations/reponse.html.twig", array('form' => $form->createView()));
    }





    ///////////////////////////MOBILE/////////////////////////
    /**
     * @Route("/addRecJson" ,name="addRecJson")
     * @Method ("POST")
     */
    public function addRecJson(Request $request, NormalizerInterface $Normalizer){
        $reclamation =new Reclamation();
        $description = $request->get("description");
        $type=$request->get("type");

        $id=$request->get("user_id");
        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $reclamation->setEtat(0);
        $reclamation->setType($type);
        $reclamation->setDescription($description);
        $reclamation->setCreatedAt(new \DateTime('now'));
        $reclamation->setUser($user);

        $em=$this->getDoctrine()->getManager();
        $em->persist($reclamation);
        $em->flush();

        $jsonContent=$Normalizer->normalize($reclamation,'json',['groups'=>'post:read']);
        return new Response('Ajout effectué avec success'.json_encode($jsonContent));
    }

    /**
     * @Route("/deleteRecJson/{id}", name="deleteRecJson")
     * @Method ("POST")
     */
    public function deleteReclamationJson(Request $request,NormalizerInterface $Normalizer,$id){


        $em=$this->getDoctrine()->getManager();

        $reclamation = $em->getRepository(Reclamation::class)->find($id);
        if($reclamation != null){
            $em->remove($reclamation);
            $em->flush();


            $jsonContent=$Normalizer->normalize($reclamation,'json',['groups'=>'post:read']);
            return new Response('Suppression effectué avec success'.json_encode($jsonContent));
        }
        return new Response('Error');
    }

    /**
     * @Route("/showRecJson" , name="showRecJson")
     */
    public function allReclamationJson(NormalizerInterface $Normalizer){
        $reclamation =$this->getDoctrine()->getManager()->getRepository(Reclamation::class)->findAll();
        $jsonContent=$Normalizer->normalize($reclamation,'json',['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/updateRecJson/{id}", name="updateRecJson")
     * @Method ("POST")
     */
    public function modifierReclamationJson(Request $request,NormalizerInterface $Normalizer,$id){


        $em=$this->getDoctrine()->getManager();

        $reclamation = $em->getRepository(Reclamation::class)->find($id);
        if($reclamation != null){
            $reclamation->setEtat(1);
            $em->flush();


            $jsonContent=$Normalizer->normalize($reclamation,'json',['groups'=>'post:read']);
            return new Response('Modification effectué avec success'.json_encode($jsonContent));
        }
        return new Response('Error');
    }

    /**
     * @Route("/reponseJson", name="reponseJson")
     */
    public function reponseJson(Request $request, ReclamationRepository $repository, \Swift_Mailer $mailer)
    {
        $reponse = new Reponse();
        $id= $request->get("id_rec");
        $reclamation = $repository->find($id);


        $user = $reclamation->getUser();
        $msg = $request->get("message");
            $reclamation->setEtat(1);
            $reponse->setRecla($reclamation);
            $reponse->setMessage($msg);
            $em = $this->getDoctrine()->getManager();
            $em->persist($reponse);
            $em->flush();
            $message = (new \Swift_Message('Réponse à votre reclamation'))
                ->setFrom('foodine01@gmail.com')
                ->setTo($user->getEmail())
                ->setBody($msg,'text/html');
            $mailer->send($message);
        return new Response("Un email vous a été envoyé");

        }







}
