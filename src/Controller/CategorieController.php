<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Form\CategoryType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
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

        return $this->render('categorie/index.html.twig', [
            'form' => $form2->createView()

        ]);
    }




    /**
     * @Route("/products", name="products")
     */
    public function categories(SessionInterface $session, ProductRepository $repository): Response
    {

        $panier = $session->get('panier',[]);

        $panierWithData = [];

        foreach ($panier as $id=>$quantite){
            $panierWithData [] = [
                'product' => $repository->find($id),
                'quantite' => $quantite
            ];

        }

        $total = 0;
        $totals=0;
        foreach ($panierWithData as $item){
            $totalitem = $item['product']->getPrice() * $item['quantite'];
            $total += $totalitem;
            $fees = 10;
            $totals=+$total;
            $totals=+$fees;

        }

        $cat1=$this->getDoctrine()->getRepository(Category::class)->findAll();
        $products=$this->getDoctrine()->getRepository(Product::class)->findAll();

        return $this->render('front/categorie/index.html.twig', [
            'cat'=>$cat1 ,
            'prod'=>$products,
'liste1' => $panierWithData,
            'total' => $total,
        ]);
    }







}
