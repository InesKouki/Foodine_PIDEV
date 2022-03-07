<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/chef", name="chef_")
 */
class ChefController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */

    public function index(): Response
    {
        return $this->render('back/chef/index.html.twig', [
            'controller_name' => 'ChefController',
        ]);
    }
}
