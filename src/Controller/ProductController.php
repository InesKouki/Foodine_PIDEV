<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     *@param Request $request ;
     */
    public function addProd(Request $request)
    {
        $prod=$this->getDoctrine()->getRepository(Product::class)->findAll();

        $product= new Product() ;
        $form2=$this->createForm(ProductType::class,$product);
        $form2->handleRequest($request);
        $file=$form2['image']->getData();

        if ($form2->isSubmitted()) {
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $product->setImage($filename);


            $this->addFlash('success', '');

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            return $this->redirectToRoute('product');

        }

        return $this->render('product/index.html.twig', [
            'product' => $prod,

            'form1' => $form2->createView()

        ]);
    }



}
