<?php

namespace App\Controller;

use App\Entity\Planning;
use App\Form\PlanningType;
use App\Repository\PlanningRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlanningController extends AbstractController
{


    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return Response
     * @Route ("/ajouterplanning", name="ajouterplanning")
     */
    public function ajout(Request $request){
        $planning=new Planning();
        $form=$this->createForm(PlanningType::class,$planning);
        //$form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ){
            $em=$this->getDoctrine()->getManager();
            $em->persist($planning);
            $em->flush();
            return $this->redirectToRoute('AffichePlanning');
        }
        return $this->render('back/planning/AjouterPlanning.html.twig',['f'=>$form->createView()]);
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return Response
     * @Route ("/modifierplanning/{id}", name="modifierplanning")
     */
    public function modifierplanning(Request $request,PlanningRepository $repos,$id){
        $planning=$repos->find($id);
        $form=$this->createForm(PlanningType::class,$planning);
        //$form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AffichePlanning');
        }
        return $this->render('back/planning/ModifierPlanning.html.twig',['f1'=>$form->createView()]);
    }
    /**
     * @param PlanningRepository $rep
     * @return Response
     * @Route ("/AffichePlanning",name="AffichePlanning")
     */
    public function AffichePlanning(PlanningRepository $rep){
        $n=$rep->findAll();
        return $this->render('back/planning/AfficherPlanning.html.twig',['n'=>$n]);
    }
    /**
     * @param PlanningRepository $rep
     * @return Response
     * @Route ("/Calendrier",name="Calendrier")
     */
    public function Calendrier(){
        return $this->render('back/planning/Calendrier.html.twig');
    }

    /**
     * @param PlanningRepository $rep
     * @param $az
     * @Route ("/supprimerplanning/{id}", name="supprimerplanning")
     */
    public function supprimerplanning(PlanningRepository $rep,$id){
        $fin=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($fin);
        $em->flush();
        return $this->redirectToRoute('AffichePlanning');
    }
}
