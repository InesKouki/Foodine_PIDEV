<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Form\PromotionType;
use App\Repository\EvenementRepository;
use App\Repository\ProductRepository;
use App\Repository\PromotionRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class PromotionController extends AbstractController
{
//    /**
//     * @Route("/promotions", name="deal")
//     */
//    public function afficheFront()
//    {
//        return $this->render('front/promotion/index.html.twig', [
//            'controller_name' => 'PromotionController',
//        ]);
//    }

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

    /**
     * @Route ("evenement-{id}", name="eventDeals");
     */

    public function searchC($id,PromotionRepository $rep, Request $req) {
//        $n = $req->get('searchText');
        $promotion = $rep->getPromotionsByEventId($id);
        return $this->render('front/promotion/index.html.twig', ['frontPromotions' => $promotion]);
    }

    //  --------- ROUTES MOBILE ----------

    /**
     * @Route("/promotions", name="displayPromotions")
     */
    public function displayPromotions(PromotionRepository $repo,SerializerInterface $serializer)
    {
        $promotions = $repo->orderByIDAsc();
        $formatted = $serializer->normalize($promotions,'json',['groups' => 'events']);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/addPromotion", name="ajoutPromotion")
     * @Method ("POST")
     */
    public function ajouterPromotion(Request $request, EvenementRepository $repo, ProductRepository $repoo)
    {
        $event = new Promotion();
        $evenement=$repo->find(1);
        $produit=$repoo->find(2);

        $prc = $request->query->get("pourcentage")/100;

        $em = $this->getDoctrine()->getManager();
        $event->setEvenement($evenement);
        $event->setProduit($produit);
        $event->setPourcentage($prc);

        $em->persist($event);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("Promotion ajoutee");
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/updatePromotion", name="majPromotion")
     * @Method("PUT")
     */
    public function modifierPromotionAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $event = $this->getDoctrine()->getManager()
            ->getRepository(Promotion::class)
            ->find($request->get("id"));

        $event->setPourcentage($request->get("pourcentage")/100);

        $em->persist($event);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("Promotion a ete modifiee avec success.");
        return new JsonResponse($formatted);

    }

    /**
     * @Route("/deletePromotion", name="suppPromotion")
     * @Method("DELETE")
     */

    public function deletePromotionAction(Request $request) {
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Promotion::class)->find($id);
        if($event!=null ) {
            $em->remove($event);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Promotion a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id Promotion invalide.");


    }

}
