<?php

namespace App\Controller;

use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="front")
     */
    public function index(EvenementRepository $repo): Response
    {
        $event=$repo->getActiveEvents();
        return $this->render('front/homeFront.html.twig', ['activeEvents' => $event]);
    }
}
