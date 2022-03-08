<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Notification;
use App\Entity\Review;
use App\Form\EditEmployeType;
use App\Repository\NotificationRepository;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;
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
    public function index(NotificationRepository $repository): Response
    {
        $notif = $repository->findAll();
        $rev = $this->getDoctrine()->getRepository(Review::class)->findRevMax();
        $revCount = $this->getDoctrine()->getRepository(Review::class)->count();
        $count=$repository->countNotifUnseen();
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
            'rec'=>$rec,
            'notif'=>$notif,
            'nbNotif'=>$count,
            'rev'=>$rev,
            'revCount'=>$revCount

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
    public function showUsers(Request $request,PaginatorInterface $paginator){

        $repository=$this->getDoctrine()->getRepository(User::class);
        $data=$repository->findUsers();

        $user = $paginator->paginate(
            $data, // on passe les données
            $request->query->getInt('page',1), //numero de la page en cours, 1par defaut
            4 // le nombre d'element par page


        );
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
     * @param NotificationRepository $repository
     * @return Response
     * @Route("/showNotif", name="showNotif")
     */
        public function showNotification(NotificationRepository $repository){

             $notif = $repository->findAll();
            return $this->render("/back/Notifications/show.html.twig",[
                'notif' => $notif
            ]);

        }

    /**
     * @Route("readNotif", name="readNotif")
     */
    public function readNotifications(NotificationRepository $repository){


        $notifs=$repository->findNotifUnseen();
        foreach ($notifs as $notif){
            $notif->setStatus(1);
            $em=$this->getDoctrine()->getManager();
            $em->flush($notif);
        }


        return $this->redirectToRoute('admin');
    }
    /**
     * @param Request $request
     * @param UserRepository $repository
     * @Route("/searchBack" , name="searchBack")
     */
    public function search(Request $request,UserRepository $repository){
        $em = $this->getDoctrine()->getManager();

        $requestString = $request->get('q');

        $entities =$repository->findUserByValue($requestString);

        if(!$entities) {
            $result['entities']['error'] = "Aucun chef trouvé";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }

        return new Response(json_encode($result));
    }
    public function getRealEntities($entities){

        foreach ($entities as $entity){
            $realEntities[$entity->getId()] =[ $entity->getFile(),$entity->getPrenom(),$entity->getNom(),$entity->getRoles()];

        }
        return $realEntities;

    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("deleteReview/{id}", name="deleteReview")
     */
    public function deleteReview($id){
        $review = $this->getDoctrine()->getRepository(Review::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($review);
        $em->flush();
        return $this->redirectToRoute('admin_index');
    }



}
