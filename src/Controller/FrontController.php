<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{

    /**
     * @Route("/", name="getCateeeg")
     */
    public function getCategs()
    {
        $cat1=$this->getDoctrine()->getRepository(Category::class)->findAll();

        return $this->render('baseFront.html.twig', [
            'categ'=>$cat1 ,
        ]);
    }

}
