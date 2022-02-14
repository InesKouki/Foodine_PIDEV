<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditClientType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function prfile(): Response
    {
        return $this->render('front/client/profil.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
    /**
     * @Route("/profilup",name="profilup")
     */
    public function update(Request $request){
        $user=$this->getUser()->getId();
        $form= $this->createForm(EditClientType::class,$user);
        $form->handleRequest();
        if ($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
             $em->flush();
             return $this->redirectToRoute('profil');
        }
        return $this->render('front/client/profil.html.twig',[
            'f'=>$form->createView()
        ]);
    }
    /**
     * @Route("/showClients", name="showClients")
     */
    public function show(){
        $repository=$this->getDoctrine()->getRepository(User::class);
        $user=$repository->findAll();
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
