<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;


class SecurityController extends AbstractController
{
    /**
     * @Route("/registration", name="registration")
     */
    public function registration(Request $request,UserPasswordEncoderInterface $encoder,\Swift_Mailer $mailer) {
            $user=new User();
            $form=$this->createForm(RegistrationType::class,$user);
            $form->handleRequest($request); 
            if($form->isSubmitted() && $form->isValid()) {
                $em =$this->getDoctrine()->getManager();
            // on recupère l'image et on le met dans le dossier public/uploads
                $image = $form->get('file')->getData();
                $filename = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move($this->getParameter('upload_directory'),$filename);
                $user->setFile($filename);
            // encoder le mot de passe
                $hash = $encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($hash);
             // on genere le token d'activation
                $user->setActivationToken(md5(uniqid()));
                $message = (new \Swift_Message('Activation de votre compte'))
                    ->setFrom('foodine01@gmail.com')
                    ->setTo($user->getEmail())
                    ->setBody($this->renderView(
                        '/front/security/activation.html.twig', ['token' => $user->getActivationToken()]
                    ),
                        'text/html');
                $mailer->send($message);

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
    public function login(AuthenticationUtils $authenticationUtils)
    {

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('/front/security/login.html.twig',
            ['lastUsername' => $lastUsername, 'error' => $error]);
    }
        /**
         * @param AuthenticationUtils $authenticationUtils
         * @param UserRepository $userRepository
         * @param Request $request
         * @return Response
         * @Route("access_denied", name="access_denied")
         */
        public function accessDenied(AuthenticationUtils $authenticationUtils,UserRepository $userRepository,Request  $request
       )
        {
            $lastUsername = $authenticationUtils->getLastUsername();
            $user = $userRepository->findOneBy(['Username' => $lastUsername]);
            dump($user);
            if($user){
                if($user->getActivationToken() != null ){

                    return $this->render('/front/security/login.html.twig');

                }

            }
            return $this->render('/front/security/homeFront.html.twig');


        }





     /**
     * @Route("/logout",name="logout")
     */
    public function logout()
    {
        return $this->redirectToRoute('login');
    }

    /**
     * @Route("/activation/{token}", name="activation")
     */
    public function activation($token,UserRepository $userRepository)
    {
        // On recherche si un utilisateur avec ce token existe dans la base de données
        $user = $userRepository->findOneBy(['activation_token' => $token]);

        // Si aucun utilisateur n'est associé à ce token
        if(!$user){
            // On renvoie une erreur 404
            throw $this->createNotFoundException('Cet utilisateur n\'existe pas');
        }

        // On supprime le token
        $user->setActivationToken(null);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        // On génère un message
        $this->addFlash('message', 'Utilisateur activé avec succès');

        // On retourne à l'accueil
        return $this->redirectToRoute('front');
    }
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {

            // Get list of roles for current user
            $roles = $token->getRoles();
            // Tranform this list in array
            // Tranform this list in array
            $rolesTab = array_map(function($role){
                return $role->getRole();
            }, $roles);
            // If is a admin or super admin we redirect to the backoffice area
            if (in_array('ROLE_ADMIN', $rolesTab, true))
                $redirection = new RedirectResponse($this->urlGenerator->generate('admin'));
            else
                $redirection = new RedirectResponse($this->router->generate('client'));

            return $redirection;

    }


}
