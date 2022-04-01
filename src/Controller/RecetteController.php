<?php

namespace App\Controller;

use App\Entity\Planning;
use App\Entity\Recette;
use App\Form\RecetteType;
use App\Repository\PlanningRepository;
use App\Repository\RecetteRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

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
        $dompdf->setPaper('A3', 'portrait');
        $dompdf->render();
        $dompdf->stream("BR.pdf", [
            "Attachment" => true ,'isRemoteEnabled' => true
        ]);
    }

    //-----------------------------

    /**
     * @Route("/rec", name="displayRecette")
     */
    public function displayEvents(RecetteRepository $repo,SerializerInterface $serializer)
    {
        $events = $repo->findAll();
        $formatted = $serializer->normalize($events,'json',['groups' => 'event']);
        return new JsonResponse($formatted);
    }

    /**
     * @Route ("/AjouterRecetteMobile", name="adddRec")
     * @Method ("POST")
     */
    public function ajouterrecmobile(Request $request, PlanningRepository $repo){

        $planning = new Recette();

        $pl = $repo->find(1);
        $em=$this->getDoctrine()->getManager();

        $nom=$request->query->get("nom");
        $planning->setNom($nom);

        $desc=$request->query->get("description");
        $planning->setDescription($desc);

        $ing=$request->query->get("ingredient");
        $planning->setIngredient($ing);

        $planning->setPlanningid($pl);
        $planning->setImagerecette("bfc1a06111253f8306373bbb03d46595.png");

        $em->persist($planning);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $aj = $serializer->normalize("recette ajoutee" );
        return new JsonResponse($aj);

    }

    /**
     * @Route("/updateRec", name="updateRec")
     * @Method("PUT")
     */
    public function modifierRecAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $event = $this->getDoctrine()->getManager()
            ->getRepository(Recette::class)
            ->find($request->get("id"));

        $event->setNom($request->get("nom"));
        $event->setDescription($request->get("description"));
        $event->setIngredient($request->get("ingredient"));
        $em->persist($event);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("Recette a ete modifiee avec success.");
        return new JsonResponse($formatted);

    }


    /**
     * @Route ("/DeleteRecette", name="delRecc")
     * @Method("DELETE")
     */
    function SupRecettemobile(Request $request , RecetteRepository $repository){
        $id=$request->get("id");
        $em=$this->getDoctrine()->getManager();

        $planning =$em->getRepository(Recette::class)->find($id);
        $em->remove($planning);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $aj = $serializer->normalize("recette supprimee");
        return new JsonResponse($aj);
    }

}
