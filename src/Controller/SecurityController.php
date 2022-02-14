<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;



class SecurityController extends AbstractController
{
    /**
     * @Route("/registration", name="registration")
     */
    public function registration(Request $request,UserPasswordEncoderInterface $encoder) {
            $user=new User();
            $form=$this->createForm(RegistrationType::class,$user);
            $form->handleRequest($request); 
            if($form->isSubmitted() && $form->isValid()) {
                $em =$this->getDoctrine()->getManager();

                $image = $form->get('file')->getData();
                 
                $filename = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move($this->getParameter('upload_directory'),$filename);
                $user->setFile($filename);

                $hash = $encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($hash);
                //$user->setRoles(['ROLE_USER']);
                $user->setCreatedAt(new \DateTime('now'));
                $em->persist($user);
                $em->flush();
                return $this->redirectToRoute('login');
            }
            return $this->render('/front/security/registration.html.twig',[
                'f'=>$form->createView()
            ]);
    }

    /**
     * 
     *@Route("/login",name="login")
     * 
     */
    public function login(AuthenticationUtils $authenticationUtils){

       // get the login error if there is one
            $error = $authenticationUtils->getLastAuthenticationError();
            // last username entered by the user
            $lastUsername = $authenticationUtils->getLastUsername();



         return $this->render('/front/security/login.html.twig',
            ['lastUsername'=>$lastUsername,'error' => $error]);

    }
     /**
     * @Route("/logout",name="logout")
     */
    public function logout()
    {
        return $this->redirectToRoute('login');
    }

}
