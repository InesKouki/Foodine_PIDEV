<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\EditEmployeType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;
/**
 * @Route("/admin", name="admin_")
 */

class AdminController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        //$users=$this->getDoctrine()->getRepository(User::class)->findClients();
        $nbclient=$this->getDoctrine()->getRepository(User::class)->nbsClient();
        $nbchef=$this->getDoctrine()->getRepository(User::class)->nbsChef();
        $nblivreur=$this->getDoctrine()->getRepository(User::class)->nbsLivreur();
        $repository=$this->getDoctrine()->getRepository(Reclamation::class);
        $rec=$repository->findAll();
        $ntot=$nbchef+$nblivreur;
        return $this->render('/back/homeBack.html.twig', [
            'controller_name' => 'AdminController',
            'n'=>$nbclient,
            'ntot'=>$ntot,
            'rec'=>$rec
            //'users'=>$users
        ]);
    }
    /**
     * @Route("/chef", name="chef")
     */
    public function show(): Response
    {
        return $this->render('/back/homeBack.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/showUsers", name="showUsers")
     */
    public function showUsers(){

        $repository=$this->getDoctrine()->getRepository(User::class);
        $user=$repository->findUsers();
        return $this->render("/back/Users/employe.html.twig",[
            'user' => $user
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @Route("/ModifierUser/{id}", name="ModifierUser")
     */

    public function ModifierUser(Request $request,$id){
        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $form = $this->createForm(EditEmployeType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addFlash('message','Role attribué avec succès');
            return $this->redirectToRoute('admin_showUsers');
        }
        return $this->render('/back/Users/ModifierEmploye.html.Twig',[
            'f'=>$form->createView()
        ]);
    }


    /**
     * @Route("/blockUser/{id}", name="blockUser")
     */
    public function blockUser($id) {

        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $user->setEtat(0);
        $em->flush();
        $this->addFlash('message','Utilisateur désactivé avec succès');
        return $this->redirectToRoute('admin_showUsers');
    }

    /**
     * @Route("/unblockUser/{id}", name="unblockUser")
     */
    public function unblockUser($id) {

        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $user->setEtat(1);
        $em->flush();

        return $this->redirectToRoute('admin_showUsers');
        $this->addFlash('message','Utilisateur activé avec succès');
    }

    /**
     * @return Response
     * @Route("/trierNomASC" , name="trierNomASC")
     */
    public function trierNomASC(){
        $user=$this->getDoctrine()->getRepository(User::class)->trierNomASC();
        return $this->render("/back/Users/employe.html.twig",[
            'user' => $user
        ]);
    }

    /*public function searchUser(Request $request){
        $em=$this->getDoctrine()->getManager();
        $requestString= $request->get('u');
        $user=$em->getRepository(UserRepository::class)->findUserByValue($requestString);
        if(!$user){
            $result['user']['error']= "User not found";
        }else {
            $result['user']=$this->getRealEntities($user);
        }
        return new Response(json_encode($request));

    }
    public function getRealEntities($user){
        foreach ($user as $user)
            $realEntities[$user->getId()]=[$user->getFile(),$user->getNom()];
        return $realEntities;

    }*/




}
