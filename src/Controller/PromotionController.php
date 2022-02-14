<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PromotionController extends AbstractController
{
    /**
     * @Route("/promotions", name="deal")
     */
    public function indexFront(): Response
    {
        return $this->render('front/promotion/index.html.twig', [
            'controller_name' => 'PromotionController',
        ]);
    }

    /**
     * @Route("/admin-promotions", name="promotion")
     */
    public function indexBack(): Response
    {
        return $this->render('admin/promotion/index.html.twig', [
            'controller_name' => 'PromotionController',
        ]);
    }

    /**
     * @Route("/admin-addPromotion", name="addPromotion")
     */
    public function addPromotion(): Response
    {
        return $this->render('admin/promotion/addPromotion.html.twig', [
            'controller_name' => 'PromotionController',
        ]);
    }
}
