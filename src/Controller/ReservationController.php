<?php

namespace App\Controller;
use App\Entity\Reservation;
use App\Entity\Table;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use App\Repository\TableRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservationn", name="reservation")
     */
    public function index(): Response
    {
        return $this->render('front/reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }
    /**
     * @Route("/admin-reservation", name="reservationback")
     */
    public function afficherreservation(ReservationRepository $r)
    {
        $reservation=$r->findAll();
        return $this->render('back/reservation/index.html.twig',['r'=>$reservation]);
    }

    /**
     * @param Request $request
     * @return Response
     * @route("/reservation" ,name="ajouter")
     */
    public function ajouterreservation(Request $request,TableRepository $r)
    {
        $reservation1=$r->findAll();
        $reservation=new Reservation();
        $form=$this->createForm(ReservationType::class,$reservation);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid())
        {$em=$this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('ajouter');
        }

     return $this->render('front/reservation/index.html.twig',['r'=>$reservation1,'form'=>$form->createView()]);
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


}
