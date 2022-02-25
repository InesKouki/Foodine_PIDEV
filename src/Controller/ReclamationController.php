<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\AddReclamationType;
use App\Form\ReponseType;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="reclamation")
     */
    public function index(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }


    /**
     * @return Response
     * @Route("/add_rec", name="add_rec")
     */
    public function add(Request $request){
        $reclamation = new Reclamation();
        $form=$this->createForm(AddReclamationType::class,$reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $reclamation->setUser($this->getUser());
            $reclamation->setCreatedAt(new \DateTime('now'));
            $reclamation->setEtat(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('front');
        }
        return $this->render("/front/reclamation/add.html.twig", array('form' => $form->createView()));
    }

    /**
     * @return Response
     * @Route ("/show_rec" , name="show_rec")
     */
    public function showReclamation (){

        $repository=$this->getDoctrine()->getRepository(Reclamation::class);
        $rec=$repository->findAll();
        return $this->render("/back/reclamations/show.html.twig",[
            'rec' => $rec
        ]);
    }

    /**
     * @param ReclamationRepository $repository
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/delete_rec{id}", name="delete_rec")
     */
    public function deleteRec(ReclamationRepository $repository,$id){
        $reclamation = $repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute('show_rec');
    }

    /**
     * @param Request $request
     * @param $id
     * @param ReclamationRepository $repository
     * @param \Swift_Mailer $mailer
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/rec_res/{id}" , name="rec_res")
     */
    public function reponse(Request $request,$id,ReclamationRepository $repository,\Swift_Mailer $mailer){
        $reponse = new Reponse();
        $reclamation =$repository->find($id);
        $user =$reclamation->getUser();
        $form=$this->createForm(ReponseType::class,$reponse);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $reclamation->setEtat(1);
            $reponse->setRecla($reclamation);
            $msg =$form->get('Message')->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($reponse);
            $em->flush();
            $message = (new \Swift_Message('Réponse à votre reclamation'))
                ->setFrom('foodine01@gmail.com')
                ->setTo($user->getEmail())
                ->setBody($this->renderView(
                    '/back/reclamations/reponseEmail.html.twig', ['msg' => $msg]
                ),
                    'text/html');
            $mailer->send($message);
            return $this->redirectToRoute('show_rec');

        }
        return $this->render("/back/reclamations/reponse.html.twig", array('form' => $form->createView()));
    }


}
