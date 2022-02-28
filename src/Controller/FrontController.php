<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\AddReclamationType;
use App\Repository\NotificationRepository;
use App\Repository\ReclamationRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
class FrontController extends AbstractController
{
    /**
     * @Route("/", name="front")
     */
    public function index(): Response
    {
        return $this->render('front/homeFront.html.twig', [
            'controller_name' => 'FrontController',

        ]);
    }

    /**
     * @return Response
     * @Route("/team",name="team")
     */
    public function afficherChefs(UserRepository $repository){
        $chef=$repository->findChef();
        return $this->render('/front/employes/team.html.twig',[
            'chef'=>$chef
        ]);
    }

    /**
     * @Route("/show_chef/{id}", name="show_chef")
     */
    public function afficherDetailsChef($id,UserRepository $repository){
        $chef=$repository->find($id);
        return $this->render('/front/employes/chefDetail.html.twig',[
            'chef'=>$chef
        ]);
    }

    /**
     * @param Request $request
     * @param UserRepository $repository
     * @Route("/search" , name="search")
     */
    public function search(Request $request,UserRepository $repository){
        $em = $this->getDoctrine()->getManager();

        $requestString = $request->get('q');

        $entities =$repository->findChefByValue($requestString);

        if(!$entities) {
            $result['entities']['error'] = "Aucun chef trouvé";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }

        return new Response(json_encode($result));
    }
    public function getRealEntities($entities){

        foreach ($entities as $entity){
            $realEntities[$entity->getId()] =[ $entity->getFile(),$entity->getPrenom()];

        }
        return $realEntities;

    }






}
