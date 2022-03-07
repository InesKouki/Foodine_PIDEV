<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditClientType;
use App\Form\EditPasswordType;
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
    public function modifier(Request  $request ,UserRepository $repository,$id){

        $user=$repository->find($id);
        $form= $this->createForm(EditClientType::class,$user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $image = $form->get('file')->getData();
            if($image){
                $filename = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move($this->getParameter('upload_directory'),$filename);
                $user->setFile($filename);
                $em =$this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                return $this->redirectToRoute('client_profil');
            }else {
                $em =$this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                return $this->redirectToRoute('client_profil');
            }

        }
        return $this->render('/front/Client/modifierprofile.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @param Request $request
     * @param UserRepository $repository
     * @param $id
     * @param UserPasswordEncoderInterface $encoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/editPass/{id}",name="editPass")
     */
    public function modifierMotdepasse(Request  $request ,UserRepository $repository,$id,UserPasswordEncoderInterface $encoder){

        $user=$repository->find($id);
        $form= $this->createForm(EditPasswordType::class,$user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em =$this->getDoctrine()->getManager();
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            //$em->persist($user);
            $em->flush();
            return $this->redirectToRoute('client_profil');
        }
        return $this->render('/front/Client/editpass.html.twig',[
            'form'=>$form->createView()
        ]);
    }



}
