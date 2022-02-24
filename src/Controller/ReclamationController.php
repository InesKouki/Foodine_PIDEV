<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\AddReclamationType;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
    public function add(ReclamationRepository $repository,Request $request){
        $reclamation = new Reclamation();
        $form=$this->createForm(AddReclamationType::class,$reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $reclamation->setUser($this->getUser());
            $reclamation->setCreatedAt(new \DateTime('now'));
            $reclamation->setEtat(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('front');
        }
        return $this->render("front/reclamation/add.html.twig", array('form' => $form->createView()));
    }
}
