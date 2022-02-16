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
     * @Route("/showEmployes", name="showEmployes")
     */
    public function showEmployes(){
        $repository=$this->getDoctrine()->getRepository(User::class);
        $user=$repository->findEmploye();
        return $this->render("/back/employes/employe.html.twig",[
            'user' => $user
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @Route("/ModifierEmploye/{id}", name="ModifierEmploye")
     */

    public function ModifierEmploye(Request $request,$id){
        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $form = $this->createForm(EditEmployeType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addFlash('message','Role attribué avec succès');
            return $this->redirectToRoute('admin_showEmployes');
        }
        return $this->render('/back/employes/ModifierEmploye.html.Twig',[
            'f'=>$form->createView()
        ]);
    }

    /**
     * @Route("/showClients", name="showClients")
     */
    public function showClient(){
        $repository=$this->getDoctrine()->getRepository(User::class);
        $user=$repository->findClient();
        return $this->render("/back/client.html.twig",[
            'user' => $user
        ]);
    }

    /**
     * @Route("/deleteClient/{id}", name="deleteClient")
     */
    public function deleteUser($id) {

        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('showClients');
    }


}
