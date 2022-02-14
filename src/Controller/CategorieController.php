<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categorie")
     *@param Request $request ;
     */
    public function addCategory(Request $request)
    {

        $cat= new Category() ;
        $form2=$this->createForm(CategoryType::class,$cat);
        $form2->handleRequest($request);
        $file=$form2['image']->getData();

        if ($form2->isSubmitted()) {
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $cat->setImage($filename);


            $this->addFlash('success', '');

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cat);
            $entityManager->flush();
            return $this->redirectToRoute('categorie');

        }

        return $this->render('back/categorie/index.html.twig', [
            'form' => $form2->createView()

        ]);
    }




    /**
     * @Route("/products", name="products")
     */
    public function categories(  $id): Response
    {
        $cat1=$this->getDoctrine()->getRepository(Category::class)->findAll();
        $products=$this->getDoctrine()->getRepository(Product::class)->find($id);

        return $this->render('front/categorie/index.html.twig', [
            'cat'=>$cat1 ,
            'prod'=>$products

        ]);
    }






}
