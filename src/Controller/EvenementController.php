<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementController extends AbstractController
{
    /**
     * @Route("/evenements", name="event")
     */
    public function indexFront(): Response
    {
        return $this->render('front/evenement/AfficherRecette.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    /**
     * @Route("/admin-evenements", name="evenement")
     */
    public function indexBack(): Response
    {
        return $this->render('back/evenement/AfficherRecette.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }

    /**
     * @Route("/admin-addEvenement", name="addEvenement")
     */
    public function addEvenement(): Response
    {
        return $this->render('back/evenement/addEvenement.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }
}
