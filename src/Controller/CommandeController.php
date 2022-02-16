<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommandeController extends AbstractController
{
    /**
     * @Route("/commande", name="commande")
     */
    public function index(): Response
    {
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }

    /**
     * @param CommandeRepository $repository
     * @return Response
     * @Route ("/listecommande", name="listecommande")
     */
    function AfficheFront(CommandeRepository $repository){
        $Commande = $repository->findAll();
        return $this->render('front/commande/ListeCommande.html.twig',
            ['commande'=>$Commande]);
    }


    /**
     * @param CommandeRepository $repository
     * @return Response
     * @Route ("/affichercommande", name="affichercommande")
     */
    function AfficheC(CommandeRepository $repository){
        $Commande =$repository->findAll();
        return $this->render('back/commande/AfficherCommande.html.twig',
            ['commande'=>$Commande]);
    }

    /**
     * @param $id
     * @param CommandeRepository $repository
     * @return Response
     * @Route ("/supprimercommande/{id}", name="supprimercommande")
     */
    function Supprimer ($id, CommandeRepository $repository) :Response{
        $commande =$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($commande);
        $em->flush();
        return $this->redirectToRoute('affichercommande');
    }

    /**
     * @param $id
     * @param CommandeRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimercommandefront/{id}", name="supprimercommandefront")
     */
    function SupprimerFront($id, CommandeRepository $repository){
        $commande =$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($commande);
        $em->flush();
        return $this->redirectToRoute('listecommande');
    }

    /**
     * @param CommandeRepository $repository
     * @param $id
     * @param \App\Controller\Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/modifiercommande/{id}", name="modifiercommande")
     */
    function Update(CommandeRepository $repository,$id,Request $request)
    {
        $commande = $repository->find($id);
        $form = $this->createForm(CommandeType::class, $commande);
        //$form->add('Modifer', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("affichercommande");
        }
        return $this->render('/back/commande/ModifierCommande.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Modifier"
            ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/ajoutercommande", name="ajoutercommande")
     */
    public function ajout(Request $request){

        $commande=new Commande();
        $form=$this->createForm(CommandeType::class,$commande);
        $form->handleRequest($request);
        dump($commande);
        if (
           $form->isSubmitted()
            ){

            $em=$this->getDoctrine()->getManager();
            $em->persist($commande);
            $em->flush();
            return $this->redirectToRoute('listecommande');
        }
        return $this->render('front/commande/AjouterCommande.html.twig',['form'=>$form->createView()]);
    }
}
