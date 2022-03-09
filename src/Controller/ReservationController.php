<?php

namespace App\Controller;
use App\Entity\Reservation;
use App\Entity\Table;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use App\Repository\TableRepository;
use App\service\QrcodeService;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use function MongoDB\BSON\toJSON;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
//use Symfony\Component\Serializer\Serializer;



class ReservationController extends AbstractController
{
    private $logger;

    /**
     * @Route("/reservationn", name="reservation")
     */
    public function index(): Response
    {
        //$form = $this->createForm(ReservationType::class, Reservation::class);
        return $this->render('front/reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
            //'form'=> $form->createView()
        ]);
    }
    /**
     * @Route("/admin-reservation", name="reservationback")
     */
    public function afficherreservation(Request $request,ReservationRepository $r , PaginatorInterface $paginator)
    {
        $donnes=$r->findAll();
        $reservation=$paginator->paginate(
            $donnes,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('back/reservation/index.html.twig',['r'=>$reservation]);
    }

    /**
     * @param Request $request
     * @return Response
     * @route("/reservation" ,name="ajouter")
     */
    public function ajouterreservation(Request $request,TableRepository $r ,\Swift_Mailer $mailer ,QrcodeService $qrcodeService)
    {   $qrcode = null;

        $reservation1=$r->findAll();
        $reservation=new Reservation();
        $form=$this->createForm(ReservationType::class,$reservation);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid())
        {


            $qrcode = $qrcodeService->qrcode($form['nom']->getData());
            $em=$this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
            $message = (new \Swift_Message('Food IN'))
                ->setFrom('foodine01@gmail.com')
                ->setTo($reservation->getEmail())
                ->setBody($this->renderView('front/reservation/qrcode.html.twig',['qrcode'=>$qrcode]),'text/html/image');
                //->setBody($this->renderView('front/reservation/qrcode.html.twig',['qrcode'=>$qrcode]),'image','utf-8');

            $mailer->send($message);
          // return $this->redirectToRoute("reservation");




        }

     return $this->render('front/reservation/index.html.twig',['r'=>$reservation1,'form'=>$form->createView(),
         'qrcode'=>$qrcode

         ]);
    }

    /**
     * @route("/deletereservation/{id}",name="ddd")
     */
    public function supprimerreservation($id,ReservationRepository $r)
    {   $rev=$r->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($rev);
        $em->flush();
        return $this->redirectToRoute('reservationback');

    }

    /**
     * @param ReservationRepository $repository
     * @param $id
     * @param Request $request
     * @route("/modifierreservation/{id}",name="dddd")
     */
    public function modifierreservation(ReservationRepository $repository,$id,Request $request)
    {$reservation=$repository->find($id);
        $form=$this->createForm(ReservationType::class,$reservation);
        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('reservationback');
        }
        return $this->render('back/reservation/modifierreservation.html.twig',['form'=>$form->createView()]);
    }

    /**
     * @Route("/admin-reservation/searchResajax ", name="searchResajax")
     */
    public function searchOffreajax(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Reservation::class);
        $requestString=$request->get('searchValue');
        $reservations = $repository->findReservationByName($requestString);

       return $this->render('back/reservation/ajax.html.twig', [
            "r"=>$reservations
       ]);
    }






////////////////////////////////////////////////* mobile */////////////////////////////////////////////////////
    /**
     * @param ReservationRepository $rep
     * @param SerializerInterface $serializerinterface
     * @Route("/rr",name="rr")
     */
    public function getreservation(ReservationRepository $rep,SerializerInterface $serializerinterface )
    {
        $reservation=$rep->findAll();
        $json=$serializerinterface->normalize($reservation,'json',['groups'=>'reservation']);
        return new JsonResponse($json);
    }

}
