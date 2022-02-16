<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditClientType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/client", name="client_")
 */
class ClientController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function profile(): Response
    {
        return $this->render('/front/Client/profile.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }


    /**
     * @param UserRepository $repository
     * @param Request $request
     * @Route("/profilup/{id}",name="profilup")
     */
    public function modifier(Request  $request ,UserRepository $repository,$id,UserPasswordEncoderInterface $encoder){

        $user=$repository->find($id);
        $form= $this->createForm(EditClientType::class,$user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em =$this->getDoctrine()->getManager();
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('client_profil');
        }
        return $this->render('/front/Client/modifierprofile.html.twig',[
            'form'=>$form->createView()
        ]);
    }



}
