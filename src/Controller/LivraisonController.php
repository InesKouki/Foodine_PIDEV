<?php

namespace App\Controller;

use App\Entity\Livraison;
use App\Form\CommandeType;
use App\Form\LivraisonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use App\Repository\LivraisonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class LivraisonController extends AbstractController
{
    /**
     * @param LivraisonRepository $repository
     * @Route("/livraison", name="livraison")
     */
    public function index(LivraisonRepository $repository): Response
    {
        $Livraison = $repository->findAll();
        return $this->render('/front/livraison/livraison.html.twig',
            ['livraison'=>$Livraison]
        );
    }
    /**
     * @param LivraisonRepository $repository
     * @return Response
     * @Route ("/afficherlivraison", name="afficherlivraison")
     */
    function AfficheC(LivraisonRepository $repository){
        $Livraison =$repository->findAll();
        return $this->render('back/livraison/livraison.html.twig',
            ['livraison'=>$Livraison]);
    }
    /**
     * @param $id
     * @param LivraisonRepository $repository
     * @return Response
     * @Route ("/supprimerlivraison/{id}", name="supprimerlivraison")
     */
    function Supprimer ($id, LivraisonRepository $repository) :Response{
        $livraison =$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($livraison);
        $em->flush();
        return $this->redirectToRoute('afficherlivraison');
    }
    /**
     * @param $id
     * @param LivraisonRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerlivraisonfront/{id}", name="supprimerlivraisonfront")
     */
    function SupprimerFront($id, LivraisonRepository $repository){
        $livraison =$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($livraison);
        $em->flush();
        return $this->redirectToRoute('livraison');
    }

    /**
     * @param Request $request
     * @return Response
     * @Route ("/ajouterlivraison", name="ajouterlivraison")
     */
    public function ajouter(Request $request){


        $livraison = new Livraison();
        $form=$this->createForm(LivraisonType::class,$livraison);

        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid()){

            $em=$this->getDoctrine()->getManager();



            $em->persist($livraison);
            $em->flush();
            return $this->redirectToRoute('livraison');
        }
        return $this->render('front/livraison/AjouterLivraison.html.twig',['form'=>$form->createView(

        ), 'livraison' => $livraison]);
    }

    /**
     * @param LivraisonRepository $repository
     * @param $id
     * @param \App\Controller\Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/modifierlivraison/{id}", name="modifierlivraison")
     */
    function Update(LivraisonRepository $repository,$id,Request $request)
    {
        $livraison = $repository->find($id);
        $form = $this->createForm(LivraisonType::class,$livraison);
        //$form->add('Modifer', SubmitType::class);
        $form->add('etat',
            ChoiceType::class, [
                'choices'  => [
                    'Non Traité' => 1,
                    'Traité' => 0
                ],
            ] );
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("afficherlivraison");
        }
        return $this->render('/back/livraison/ModifierLivraison.html.twig',
            [
                'form' => $form->createView(),
                "form_title" => "Modifier"
            ]);
    }
}
