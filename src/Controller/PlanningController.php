<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlanningController extends AbstractController
{
    /**
     * @Route("/planning", name="planning")
     */
    public function index(): Response
    {
        return $this->render('back/planning/planning.html.twig', [
            'controller_name' => 'PlanningController',
        ]);
    }
    /**
     * @Route("/ajouterplanning", name="ajouterplanning")
     */
    public function ajouterplanning(): Response
    {
        return $this->render('back/planning/AjouterPlanning.html.twig', [
            'controller_name' => 'PlanningController',
        ]);
    }
}
