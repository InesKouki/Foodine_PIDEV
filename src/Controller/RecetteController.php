<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecetteController extends AbstractController
{
    /**
     * @Route("/admin-recette", name="recette")
     */
    public function index(): Response
    {
        return $this->render('admin/recette/ajoutRecette.html.twig', [
            'controller_name' => 'RecetteController',
        ]);
    }
}
