<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categorie")
     */
    public function indexFront(): Response
    {
        return $this->render('front/categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }
}