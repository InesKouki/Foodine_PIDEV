<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\AddReclamationType;
use App\Repository\ReclamationRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="front")
     */
    public function index(): Response
    {
        return $this->render('front/homeFront.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @return Response
     * @Route("/team",name="team")
     */
    public function afficherChefs(UserRepository $repository){
        $chef=$repository->findChef();
        return $this->render('/front/employes/team.html.twig',[
            'chef'=>$chef
        ]);
    }

    /**
     * @Route("/show_chef/{id}", name="show_chef")
     */
    public function afficherDetailsChef($id,UserRepository $repository){
        $chef=$repository->find($id);
        return $this->render('/front/employes/chefDetail.html.twig',[
            'chef'=>$chef
        ]);
    }



}
