<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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
                $image->move(
                $this->getParameter('upload_directory'),$filename);
                $user->setFile($filename);

                $hash = $encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($hash);

                $em->persist($user);
                $em->flush();
            }
            return $this->render('/front/security/registration.html.twig',[
                'f'=>$form->createView()
            ]);
    }
}
