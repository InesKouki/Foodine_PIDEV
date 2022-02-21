<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Form\PromotionType;
use App\Repository\PromotionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PromotionController extends AbstractController
{
    /**
     * @Route("/promotions", name="deal")
     */
    public function afficheFront()
    {
        return $this->render('front/promotion/index.html.twig', [
            'controller_name' => 'PromotionController',
        ]);
    }

    /**
     * @Route("/admin-promotions", name="promotion")
     */
    public function afficheBack(PromotionRepository $rep)
    {
        $promotion = $rep->orderByNameAscQB();
        return $this->render('back/promotion/index.html.twig', ['backPromotions' => $promotion]);
    }

    /**
     * @Route("/admin-addPromotion", name="addPromotion")
     */
    public function addPromotion(Request $request)
    {
        $promotion = new Promotion();
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($promotion);
            $em->flush();
            return $this->redirectToRoute('promotion');
        }

        return $this->render('back/promotion/addPromotion.html.twig', [
            'promotionForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin-updatePromotion-{id}", name="updatePromotion")
     */
    public function updatePromotion(Request $request, PromotionRepository $repo, $id)
    {
        $promotion = $repo->find($id);
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('promotion');
        }

        return $this->render('back/promotion/updatePromotion.html.twig', [
            'promotionForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin-deletePromotion-{id}", name="deletePromotion")
     */
    public function deletePromotion(Request $request, PromotionRepository $repo, $id)
    {
        $promotion = $repo->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($promotion);
        $em->flush();
        return $this->redirectToRoute('promotion');
    }

    /**
     * @Route("/admin-promotions-sortbynameasc", name="promotionSortByNameAsc")
     */
    public function sortBackByNameAsc(PromotionRepository $repo)
    {
        $promotion=$repo->orderByNameAscQB();
        return $this->render('back/promotion/index.html.twig', ['backPromotions' => $promotion]);
    }

    /**
     * @Route("/admin-promotions-sortbynamedesc", name="promotionSortByNameeDesc")
     */
    public function sortBackByNameDesc(PromotionRepository $repo)
    {
        $promotion=$repo->orderByNameDescQB();
        return $this->render('back/promotion/index.html.twig', ['backPromotions' => $promotion]);
    }

    /**
     * @Route("/admin-promotions-sortbyprcasc", name="promotionSortByPrceAsc")
     */
    public function sortBackByPrcAsc(PromotionRepository $repo)
    {
        $promotion=$repo->orderByPourcentageAscQB();
        return $this->render('back/promotion/index.html.twig', ['backPromotions' => $promotion]);
    }

    /**
     * @Route("/admin-promotions-sortbyprcdesc", name="promotionSortByPrceDesc")
     */
    public function sortBackByPrcDesc(PromotionRepository $repo)
    {
        $promotion=$repo->orderByPourcentageDescQB();
        return $this->render('back/promotion/index.html.twig', ['backPromotions' => $promotion]);
    }




//    /**
//     * @Route ("evenement/{id}");
//     */
//
//    public function searchC($id,PromotionRepository $rep, Request $req) {
////        $n = $req->get('searchText');
//        $promotion = $rep->searchByEvent($id);
//        return $this->render('back/promotion/index.html.twig', ['backPromotions' => $promotion]);
//    }

}
