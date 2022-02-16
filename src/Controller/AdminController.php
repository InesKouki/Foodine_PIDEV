<?php

namespace App\Controller;

use App\Form\EditEmployeType;
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
        return $this->render('/back/homeBack.html.twig', [
            'controller_name' => 'AdminController',
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
     * @Route("/deleteUser/{id}", name="deleteUser")
     */
    public function deleteUser($id) {

        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('admin_showUsers');
    }


}
