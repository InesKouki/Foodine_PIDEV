<?php

namespace App\Controller;

use App\Repository\RecetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecetteController extends AbstractController
{
    /**
     * @Route("/admin-Afficherrecette", name="recette")
     */
    public function index(RecetteRepository  $rep): Response
    {   $Recette=$rep->findAll();

        return $this->render('back/recette/AfficheRecette.html.twig', ['recette'=>$Recette]);
    }
    /**
     * @Route("/admin-Ajoutrecette", name="ajoutrecette")
     */
    public function afficherecette(): Response
    {
        return $this->render('back/recette/AjoutRecette.html.twig', [
            'controller_name' => 'RecetteController',
        ]);
    }

}
