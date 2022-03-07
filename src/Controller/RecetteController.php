<?php

namespace App\Controller;

use App\Entity\Recette;
use App\Form\RecetteType;
use App\Repository\PlanningRepository;
use App\Repository\RecetteRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class RecetteController extends AbstractController
{
    /**
     * @Route ("/recette",name="affrecette")
     */
    public function afficher(RecetteRepository  $rep): Response
    {   $recette=$rep->findAll();
       $todayRecette=$rep->findrecette();

        return $this->render('front/recette/AfficherRecette.html.twig', ['recette'=>$recette,'t'=>$todayRecette]);
    }
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
            return $this->redirectToRoute('AfficherRecette');
        }
        return $this->render('back/recette/AjoutRecette.html.twig',
            [
                'f1' => $form2->createView()

            ]);
    }
    /**
     * @Route("/admin-Modifierrecette-{id}", name="modifierrecette")
     * @param Request $request ;
     */
    public function Modierrecette($id, Request $request,RecetteRepository $rep): Response
    {   $recette=$rep->find($id);
        $form2=$this->createForm(RecetteType::class,$recette);
        $form2->handleRequest($request);

        $file=$form2['imagerecette']->getData();

        if ($form2->isSubmitted() && $form2->isValid()) {
            $upload_dir = $this->getParameter('uploads_directory');
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($upload_dir, $filename);

            $recette->setImagerecette($filename);

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AfficherRecette');
        }
        return $this->render('back/recette/AjoutRecette.html.twig',
            [
                'f1' => $form2->createView()

            ]);
    }
    /**
     * @param RecetteRepository $rep
     * @Route ("/admin-SupprimerRecette-{id}", name="supprimerrecette")
     */
    public function supprimerrecette(RecetteRepository $rep,$id){
        $recette=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($recette);
        $em->flush();
        return $this->redirectToRoute('AfficherRecette');
    }

    /**
     * @Route("/admin-Afficherrecette/searchAjax ", name="ajax_search")
     */

    public function searchAction(Request $request,RecetteRepository $em)
    {
        $requestString = $request->get('q');
        $posts =  $em->findEntitiesByString($requestString);
        if(!$posts) {
            $result['posts']['error'] = "Recette n'existe pas";
        } else {
            $result['posts'] = $this->getRealEntities($posts);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($posts){
        foreach ($posts as $posts){
            $realEntities[$posts->getId()] = [$posts->getNom(),$posts->getImagerecette()];

        }
        return $realEntities;
    }






    /**
     * @Route("/imprimer", name="imprimer")
     */
    public function imprimer(RecetteRepository  $repo,Request $request)
    {
        $Recettes = $repo->findAll();
//    dd($Recettes);
        $baseurl = $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath();

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('back/recette/ImprimerRecette.html.twig', [
            "recettes" => $Recettes,
            'base_url'=>$baseurl
        ]);
//dd($html);
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("BR.pdf", [
            "Attachment" => true ,'isRemoteEnabled' => true
        ]);
    }

}
