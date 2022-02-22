<?php

namespace App\Controller;

use App\Entity\Recette;
use App\Form\RecetteType;
use App\Repository\RecetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class RecetteController extends AbstractController
{
    /**
     * @Route("/admin-Afficherrecette", name="AfficherRecette")
     */
    public function index(RecetteRepository  $rep): Response
    {   $Recette=$rep->findAll();

        return $this->render('back/recette/AfficheRecette.html.twig', ['recette'=>$Recette]);
    }
    /**
     * @Route("/admin-Ajoutrecette", name="ajoutrecette")
     * @param Request $request ;
     */
    public function AjouterRecette( Request $request): Response
    {   $recette= new Recette() ;
        $form2=$this->createForm(RecetteType::class,$recette);
        $form2->handleRequest($request);
        $file=$form2['imagerecette']->getData();

        if ($form2->isSubmitted() && $form2->isValid()) {
            $upload_dir = $this->getParameter('uploads_directory');
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($upload_dir, $filename);

            $recette->setImagerecette($filename);

            $em=$this->getDoctrine()->getManager();
            $em->persist($recette);
            $em->flush();

        }
        return $this->render('back/recette/AjoutRecette.html.twig',
            [
                'f1' => $form2->createView()

            ]);
    }



}
