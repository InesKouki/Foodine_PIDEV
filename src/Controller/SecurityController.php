<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditPasswordType;
use App\Form\InscriptionType;
use App\Form\ResetPassType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\SerializerInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/registration", name="registration")
     */
    public function registration(Request $request,UserPasswordEncoderInterface $encoder,\Swift_Mailer $mailer) {
            $user=new User();
            $form=$this->createForm(InscriptionType::class,$user);
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
                'f'=>$form->createView(),
                'errors'=>$form->getErrors()
            ]);
    }

    /**
     * 
     *@Route("/login",name="login")
     * 
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
       $error = $authenticationUtils->getLastAuthenticationError();
            $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('/front/security/login.html.twig',
            ['lastUsername' => $lastUsername, 'error' => $error
                ]);
    }

    /**
     * @Route("/login_success", name="login_success")
     */
    public function loginSuccess(){

        $etat=$this->getUser()->getEtat();
        if ( $this->isGranted('ROLE_ADMIN')  )
            $redirection = $this->redirectToRoute('admin_index');
       else if ( $this->isGranted('ROLE_CHEF')&& $etat==1)
            $redirection = $this->redirectToRoute('chef_index');
        else if ( $this->isGranted('ROLE_LIVREUR')&& $etat==1)
            $redirection = $this->redirectToRoute('livreur_index');
        else if  ( $this->isGranted('ROLE_USER')&& $etat==1)
            $redirection = $this->redirectToRoute('front');
        else
            $redirection=$this->redirectToRoute('logout');
        return $redirection;
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
        $user->setEtat(1);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        // On génère un message
        $this->addFlash('message', 'Utilisateur activé avec succès');

        // On retourne à l'accueil
        return $this->redirectToRoute('front');
    }

    /**
     * @Route("/oubliPass", name="oubliPass")
     */
    public function forgottenPass(Request $request, UserRepository $userRepository,\Swift_Mailer $mailer,
    TokenGeneratorInterface $tokenGenerator){
        $form=$this->createForm(ResetPassType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $data=$form->getData();

            $user=$userRepository->findOneByEmail($data['email']);
             if(!$user){
                 $this->addFlash('danger','Adresse Email non existante');
                 return $this->redirectToRoute('oubliPass');
             }
             $token =$tokenGenerator->generateToken();
             try {
                 $user->setResetToken($token);
                 $em =$this->getDoctrine()->getManager();
                 $em->persist($user);
                 $em->flush();
             }catch(\Exception $e) {
                 $this->addFlash('Warning', 'Une erreur est survenue:'.$e->getMessage());
                 //return $this->redirectToRoute('login');
            }
            $url = $this->generateUrl('resetPassword',['token'=>$token]);
            $message = (new \Swift_Message('Mot de passe oublié'))
                ->setFrom('foodine01@gmail.com')
                ->setTo($user->getEmail())
                ->setBody($this->renderView(
                    '/front/security/ForgottenPassEmail.html.twig', ['token' => $token]
                ),
                    'text/html');
            $mailer->send($message);
            $this->addFlash('message','Un email de reinitialisation de mot de passe vous a été envoyé ');
            return $this->redirectToRoute('login');
        }
        return $this->render('/front/security/ForgottenPass.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/resetPassword{token}" , name="resetPassword")
     */
    public function resetPass($token ,Request $request,UserPasswordEncoderInterface $encoder,UserRepository $userRepository){
        $user=$userRepository->findOneBy(['reset_token'=>$token]);

         if(!$user){
            $this->addFlash('danger','Token inconnu');
            return $this->redirectToRoute('login');

        }
        $form=$this->createForm(EditPasswordType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()) {
            $user->setResetToken(null);
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // On génère un message
             $this->addFlash('message', 'Mot de passe modifié avec succès');
             return $this->redirectToRoute('login');
        }
            return $this->render('front/security/resetPass.html.twig', ['token'=>$token,
                'form'=>$form->createView()]);

    }

    ///////////////////////////////MOBILE/////////////////////////

    /**
     * @Route("/signUpJson" , name="signUpJson")
     */
    public function signUpAction(Request $request,UserPasswordEncoderInterface $encoder,NormalizerInterface $Normalizer){

        $email = $request->get("email");
        $username = $request->get("username");
        $nom = $request->get("nom");
        $prenom = $request->get("prenom");
        $password = $request->get("password");



        $user = new User();
        $hash = $encoder->encodePassword($user, $password);
        $user->setPassword($hash);
        $user->setNom($nom);
        $user->setUsername($username);
        $user->setPrenom($prenom);
        $user->setEmail($email);
        $user->setEtat(1);
        $user->setCreatedAt(new \DateTime('now'));


            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

        $jsonContent=$Normalizer->normalize($user,'json',['groups'=>'post:read']);
        return new Response('Compte créer avec success'.json_encode($jsonContent));

    }

    /**
     * @Route("signInJson", name="signInJson")
     */
    public function signInAction(Request $request,NormalizerInterface $Normalizer,SerializerInterface $serializer){
        $username = $request->get('username');
        $password = $request->get('password');
        $em=$this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneBy(['Username'=>$username]);
        if($user){
            if(password_verify($password,$user->getPassword())){
                $serializer = new Serializer([new ObjectNormalizer()]);
                $jsonContent=$Normalizer->normalize($user,'json',['groups'=>'post:read']);
                //$formatted =$serializer->serialize($user,'json',['groups'=>'post:read']);
                return new Response(json_encode($jsonContent));
            }else {
                return new Response("Mot de passe invalide");
            }
        }else {
            return new Response("Utilisteur invalide");
        }
    }

    /**
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @Route("/editUserJson", name="editUserJson")
     */
    public function editUser(Request $request,UserPasswordEncoderInterface $encoder){
        $id=$request->get('id');
        //$username=$request->get("username");
        //$password=$request->get("password");
        $email=$request->get("email");
        $nom = $request->get("nom");
        $prenom = $request->get("prenom");
        $adresse = $request->get("adresse");
        $telephone = $request->get("telephone");

        $em=$this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);

        if($request->files->get("file")!=null){
            $file=$request->files->get("file");
            $fileName=$file->getClientOriginalName();
            $file->move($fileName);
            $user->setPhoto($fileName);
        }
        //$user->setUsername($username);
        //$hash = $encoder->encodePassword($user, $user->getPassword());
        //$user->setPassword($hash);
        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setEmail($email);
        $user->setAddress($adresse);
        $user->setPhone($telephone);
        $user->setEtat(1);
        $user->setCreatedAt(new \DateTime('now'));
        try {
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return new Response("Compte modifié avec success",200);
        }catch(\Exception $ex){
            return new Response("Fail".$ex->getMessage());
        }

    }



    /**
     * @Route("/oubliPassJSON", name="oubliPassJSON")
     */
    public function forgottenPassJSON(Request $request, UserRepository $userRepository,\Swift_Mailer $mailer,TokenGeneratorInterface $tokenGenerator){


            $email=$request->get('email');
            $user = $userRepository->findOneBy(['email'=>$email]);
            if(!$user){
                return new Response("Erreur");
            }

            $token =$tokenGenerator->generateToken();
            try {
                $user->setResetToken($token);
                $em =$this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                $message = (new \Swift_Message('Mot de passe oublié'))
                    ->setFrom('foodine01@gmail.com')
                    ->setTo($user->getEmail())
                    ->setBody(
                        "Bonjour,<br><br> Une demande de réinitialisation de mot de passe a été effectué,Veuillez entrer le code ci-joint: ".$token,'text/html');
                $mailer->send($message);
                return new Response("Un email vous a été envoyé");
            }catch(\Exception $e) {
                return new Response("ERROR");
            }


        }

    /**
     * @Route("/resetPasswordJSON/{code}/{password}" , name="resetPasswordJSON")
     */
    public function resetPassJSON(Request $request,UserPasswordEncoderInterface $encoder,UserRepository $userRepository,NormalizerInterface $Normalizer,$code,$password){

        //$reset_token=$request->get('code');
        //$password=$request->get('password');
        $user=$userRepository->findOneBy(['reset_token'=>$code]);

        if(!$user){
            return new Response("Code incorrecte");
        }
            $user->setResetToken(null);
            $hash = $encoder->encodePassword($user,$password);
            $user->setPassword($hash);
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $jsonContent=$Normalizer->normalize($user,'json',['groups'=>'post:read']);
            return new Response('Mot de passe modifié avec succes'.json_encode($jsonContent));

        }

    /**
     * @Route("/showUserJson" , name="showUserJson")
     */
    public function allUsersJson(NormalizerInterface $Normalizer){
        $user =$this->getDoctrine()->getManager()->getRepository(User::class)->findUsers();
        $jsonContent=$Normalizer->normalize($user,'json',['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/showUserTriNomJson" , name="showUserTriNomJson")
     */
    public function allUsersTriNomJson(NormalizerInterface $Normalizer){
        $user =$this->getDoctrine()->getManager()->getRepository(User::class)->findByNomASC();
        $jsonContent=$Normalizer->normalize($user,'json',['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/showUserTriEmailJson" , name="showUserTriEmailJson")
     */
    public function allUsersTriEmailJson(NormalizerInterface $Normalizer){
        $user =$this->getDoctrine()->getManager()->getRepository(User::class)->findByEmailASC();
        $jsonContent=$Normalizer->normalize($user,'json',['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/blockUserJson/{id}", name="blockUserJson")
     */
    public function blockUser($id,NormalizerInterface $Normalizer) {

        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $user->setEtat(0);
        $em->flush();
        $jsonContent=$Normalizer->normalize($user,'json',['groups'=>'post:read']);
        return new Response('Utilisateur bloqué'.json_encode($jsonContent));
    }

    /**
     * @Route("/unblockUserJson/{id}", name="unblockUserJson")
     */
    public function unblockUser($id,NormalizerInterface $Normalizer) {

        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $user->setEtat(1);
        $em->flush();

        $jsonContent=$Normalizer->normalize($user,'json',['groups'=>'post:read']);
        return new Response('Utilisateur debloqué'.json_encode($jsonContent));

    }

    /**
     * @Route("/deleteUserJson", name="deleteUserJson")
     * @Method ("POST")
     */
    public function deleteUserJson(Request $request,NormalizerInterface $Normalizer){


        $em=$this->getDoctrine()->getManager();
        $id=$request->get("id");
        $user = $em->getRepository(User::class)->find($id);
        if($user != null){
            $em->remove($user);
            $em->flush();


            $jsonContent=$Normalizer->normalize($user,'json',['groups'=>'post:read']);
            return new Response('Suppression effectué avec success'.json_encode($jsonContent));
        }
        return new Response('Error');
    }



    /**
     * @param Request $request
     * @param $id
     * @Route("/roleJson", name="roleJson")
     */

    public function ModifierUser(Request $request,NormalizerInterface $Normalizer)
    {
        $id=$request->get("id");
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $role = $request->get("Role");
            if($role=="Chef"){
                $user->setRoles(["ROLE_CHEF"]);
            }else if($role=="Livreur")
                $user->setRoles(["ROLE_LIVREUR"]);
             else
                 $user->setRoles([""]);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $jsonContent = $Normalizer->normalize($user, 'json', ['groups' => 'post:read']);
            return new Response('Role Attribué  avec success' . json_encode($jsonContent));


    }

    /**
     * @Route("/updatePassJson", name="updatePassJson")
     */

    public function updatePass(Request $request,NormalizerInterface $Normalizer,UserPasswordEncoderInterface $encoder)
    {
        $id=$request->get("id");
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $password = $request->get("password");
        $hash = $encoder->encodePassword($user, $password);
        $user->setPassword($hash);

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups' => 'post:read']);
        return new Response('Mot de passe modifié' . json_encode($jsonContent));


    }






}
