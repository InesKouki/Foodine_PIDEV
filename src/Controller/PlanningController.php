<?php

namespace App\Controller;

use App\Entity\Planning;
use App\Form\PlanningType;
use App\Repository\PlanningRepository;
use App\Repository\RecetteRepository;
use ContainerGFAkVy4\PaginatorInterface_82dac15;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
class PlanningController extends AbstractController
{


    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return Response
     * @Route ("/ajouterplanning", name="ajouterplanning")
     */
    public function ajout(Request $request){
        $planning=new Planning();
        $form=$this->createForm(PlanningType::class,$planning);
        //$form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ){
            $em=$this->getDoctrine()->getManager();
            $em->persist($planning);
            $em->flush();
            return $this->redirectToRoute('AffichePlanning');
        }
        return $this->render('back/planning/AjouterPlanning.html.twig',['f'=>$form->createView()]);
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return Response
     * @Route ("/modifierplanning/{id}", name="modifierplanning")
     */
    public function modifierplanning(Request $request,PlanningRepository $repos,$id){
        $planning=$repos->find($id);
        $form=$this->createForm(PlanningType::class,$planning);
        //$form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AffichePlanning');
        }
        return $this->render('back/planning/ModifierPlanning.html.twig',['f1'=>$form->createView()]);
    }
    /**
     * @param PlanningRepository $rep
     * @return Response
     * @Route ("/AffichePlanning",name="AffichePlanning")
     */
    public function AffichePlanning(PlanningRepository $rep,PaginatorInterface $paginator,Request $request){

        $x=$rep->findAll();
        $n=$paginator->paginate(
            $x,$request->query->getInt('page',1),5
        );
        return $this->render('back/planning/AfficherPlanning.html.twig',['n'=>$n]);
    }
    /**
     * @param PlanningRepository $rep
     * @return Response
     * @Route ("/Calendrier",name="Calendrier")
     */
    public function Calendrier(){
        return $this->render('back/planning/Calendrier.html.twig');
    }

    /**
     * @param PlanningRepository $rep
     * @param $az
     * @Route ("/supprimerplanning/{id}", name="supprimerplanning")
     */
    public function supprimerplanning(PlanningRepository $rep,$id){
        $fin=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($fin);
        $em->flush();
        return $this->redirectToRoute('AffichePlanning');
    }

    /**
     * @Route("/admin-planning/searchResajax ", name="searchResajax")
     */
    public function searchEventAjax(PlanningRepository $repo,Request $request)
    {
        $requestString=$request->get('searchValue');
        $events = $repo->findPlanningByName($requestString);

        return $this->render('back/planning/ajax.html.twig', [
            "n"=>$events
        ]);
    }
    /**
     * @param PlanningRepository $rep
     * @return Response
     * @Route ("/AffichePlanning-trienomAsc",name="trienom")
     */
    public function trienomAsc(PlanningRepository $rep,PaginatorInterface $paginator,Request $request){
        $x=$rep->orderByNameAscQB();
        $n=$paginator->paginate(
            $x,$request->query->getInt('page',1),5
        );
        return $this->render('back/planning/AfficherPlanning.html.twig',['n'=>$n]);
    }
    /**
     * @param PlanningRepository $rep
     * @return Response
     * @Route ("/AffichePlanning-trienomDsc",name="trienomDsc")
     */
    public function trienomDsc(PlanningRepository $rep,PaginatorInterface $paginator,Request $request){
        $x=$rep->orderByNameDescQB();
        $n=$paginator->paginate(
            $x,$request->query->getInt('page',1),5
        );
        return $this->render('back/planning/AfficherPlanning.html.twig',['n'=>$n]);
    }
    /**
     * @param PlanningRepository $rep
     * @return Response
     * @Route ("/AffichePlanning-trieDateAsc",name="triedateAsc")
     */
    public function trieDateAsc(PlanningRepository $rep,PaginatorInterface $paginator,Request $request){
        $x=$rep->orderByDateAscQB();
        $n=$paginator->paginate(
            $x,$request->query->getInt('page',1),5
        );
        return $this->render('back/planning/AfficherPlanning.html.twig',['n'=>$n]);
    }

    /**
     * @param PlanningRepository $rep
     * @return Response
     * @Route ("/AffichePlanning-trieDateDsc",name="triedateDsc")
     */
    public function trieDateDsc(PlanningRepository $rep,PaginatorInterface $paginator,Request $request){
        $x=$rep->orderByDateDescQB();
        $n=$paginator->paginate(
            $x,$request->query->getInt('page',1),5
        );
        return $this->render('back/planning/AfficherPlanning.html.twig',['n'=>$n]);
    }

    //-----------------------------

    /**
     * @Route("/plan", name="displayPlan")
     */
    public function displayEvents(PlanningRepository $repo,SerializerInterface $serializer)
    {
        $events = $repo->findAll();
        $formatted = $serializer->normalize($events,'json',['groups' => 'event']);
        return new JsonResponse($formatted);
    }

    /**
     * @Route ("/AjouterPlanningMobile")
     * @Method ("POST")
     */
    public function ajoutermobile(Request $request){

        $planning = new Planning();

        $em=$this->getDoctrine()->getManager();

        $nom=$request->query->get("nom");
        $planning->setNom($nom);

        $date=$request->query->get("date");
        $planning->setDate(new \DateTime($date));

        $em->persist($planning);
        $em->flush();


        $serializer = new Serializer([new ObjectNormalizer()]);
        $aj = $serializer->normalize("planning ajoutee");
        return new JsonResponse($aj);

    }

    /**
     * @Route("/updatePlan", name="updateplan")
     * @Method("PUT")
     */
    public function modifierPlanAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $event = $this->getDoctrine()->getManager()
            ->getRepository(Planning::class)
            ->find($request->get("id"));

        $event->setNom($request->get("nom"));
        $event->setDate(new \DateTime($request->get("date")));

        $em->persist($event);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("Planning a ete modifiee avec success.");
        return new JsonResponse($formatted);

    }


    /**
     * @Route ("/DeletePlanning")
     * @Method("DELETE")
     */
    function Supplanningmobile(Request $request , PlanningRepository $repository){
        $id=$request->get("id");
        $em=$this->getDoctrine()->getManager();

        $planning =$em->getRepository(Planning::class)->find($id);
        $em->remove($planning);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $aj = $serializer->normalize("planning supprime");
        return new JsonResponse($aj);
    }




}
