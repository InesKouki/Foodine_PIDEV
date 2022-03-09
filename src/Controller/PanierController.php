<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Product;
use App\Form\PanierType;
use App\Repository\PanierRepository;
use App\Repository\ProductRepository;
use MongoDB\Driver\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(SessionInterface $session, ProductRepository $repository): Response
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

        return $this->render('front/panier/panier.html.twig', [
            /*'panier'=>$panier*/
            'liste1' => $panierWithData,
            'total' => $total,

        ]);
    }


    /**
     * @param $id
     * @param Request $request
     * @Route ("/panier/{id}", name="AjouterPanier")
     */
    public function add($id, SessionInterface $session){


        $panier = $session->get('panier',[]);

        if(!empty($panier[$id])) {
            $panier[$id]++;
        }else{
        $panier[$id]=1;
        }
        $session->set('panier',$panier);


        return $this->redirectToRoute("panier");
    }
    /**
     * @Route ("/supprimerpanier/{id}", name="SupprimerPanier")
     */
    public function remove($id, SessionInterface $session){

        $panier = $session->get('panier', []);
        if (!empty($panier[$id])){
            unset($panier[$id]);
        }
        $session ->set('panier', $panier);
        return $this->redirectToRoute("panier");
    }

    public function plus ($quantite){

        $quantite;
    }

   /* /**
     * * @Route("/panier/{id}" , name="AjouterPanier"  )
     */
   /* public function add(ProductRepository $repository, $id, Request $request)
    {
        $panier=$this->getDoctrine()->getRepository(Panier::class)->findAll();

        $product1 = $repository->findById($id);
        $product1->getName();
        $product1->getPrice();
        $product1->getImage();
        $panier = new Panier();

        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);
        $panier->setName($product1->getName());

        $panier->setPrice($product1->getPrice());
        $panier->setImage($product1->getImage());
        if ($form->isSubmitted()) {


            $em = $this->getDoctrine()->getManager();
            $em->persist($panier);
            $em->flush();

            return $this->redirectToRoute('panier');
        }

        return $this->render('front/panier/panier.html.twig', [
            'f' => $form->createView(),
            'panier'=>$panier

        ]);
    }
    */
  /*  /**
     * @param $id
     * @param PanierRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/supprimerpanier/{id}" , name="SupprimerPanier"  )
     */
   /* function SupprimerFront($id, PanierRepository $repository){
        $panier =$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($panier);
        $em->flush();
        return $this->redirectToRoute('panier');
    } */



















}
