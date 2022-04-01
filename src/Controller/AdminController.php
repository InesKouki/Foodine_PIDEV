<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Commande;
use App\Entity\Product;
use App\Entity\Recette;
use App\Entity\Reclamation;
use App\Entity\Notification;
use App\Entity\Review;
use App\Form\EditEmployeType;
use App\Repository\EvenementRepository;
use App\Repository\NotificationRepository;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\UX\Chartjs\Model\Chart;

/**
 * @Route("/admin", name="admin_")
 */

class AdminController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(NotificationRepository $repository,EvenementRepository $repo, ChartBuilderInterface $chartBuilder): Response
    {
        $notif = $repository->findAll();
        $events = $repo->findAll();
        $eventName = [];
        $eventCount = [];

        $rev = $this->getDoctrine()->getRepository(Review::class)->findRevMax();
        $revCount = $this->getDoctrine()->getRepository(Review::class)->findRevCount();
        $count=$repository->countNotifUnseen();
        //$users=$this->getDoctrine()->getRepository(User::class)->findClients();
        $nbclient=$this->getDoctrine()->getRepository(User::class)->nbsClient();
        $nbchef=$this->getDoctrine()->getRepository(User::class)->nbsChef();
        $nblivreur=$this->getDoctrine()->getRepository(User::class)->nbsLivreur();
        $repository=$this->getDoctrine()->getRepository(Reclamation::class);
        $rec=$repository->findAll();
        $ntot=$nbchef+$nblivreur;
        $categs = $this->getDoctrine()->getRepository(Category::class)->findAll();
        $nbcategs = count($categs);
        $prods = $this->getDoctrine()->getRepository(Product::class)->findAll();
        $nbprods = count($prods);
        $comms = $this->getDoctrine()->getRepository(Commande::class)->findAll();
        $nbcomms = count($prods);
        $recs = $this->getDoctrine()->getRepository(Recette::class)->findAll();
        $nbrecs = count($prods);


        foreach ($events as $e){
            $eventName[] = $e->getName();
            $eventCount[] = count($e->getPromotions());
        }

        $chart = $chartBuilder->createChart(Chart::TYPE_BAR);

        $chart->setData([
            'labels' => $eventName,
            'datasets' => [
                [
                    'backgroundColor' => 'rgba(225, 225, 225, 0.9)',
                    'data' => $eventCount
                ],
            ],
        ]);

        $chart->setOptions([
            'plugins' => [
                'legend' => ['display' => false],
                'title' => [
                    'display' => 'true',
                    'color' => '#c3c3c3',
                    'font' => [
                        'size' => '30px',
                        'family' => 'Roboto, sans-serif'
                    ],
                    'text' => 'LES PLUS ACTIFS EVENEMENTS'
                ]
            ],
            'scales' => [
                'y' => [
                    'ticks' => [
                        'font' => [
                            'size' => '14px',
                        ],
                        'color' => 'white',
                    ],
                    'min' => 0,
                    'max' => 10,
                ],
                'x' => [
                    'ticks' => [
                        'font' => [
                            'size' => '14px',
                        ],
                        'color' => 'white',
                    ]
                ]
            ],
        ]);



        return $this->render('/back/homeBack.html.twig', [
            'chart' => $chart,
            'controller_name' => 'AdminController',
            'n'=>$nbclient,
            'ntot'=>$ntot,
            'rec'=>$rec,
            'notif'=>$notif,
            'nbNotif'=>$count,
            'rev'=>$rev,
            'revCount'=>$revCount,
            'nbCategs' => $nbcategs,
            'nbProds' => $nbprods,
            'nbComms' => $nbcomms,
            'nbRec' => $nbrecs
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
