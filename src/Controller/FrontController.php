<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Entity\Review;
use App\Form\AddReclamationType;
use App\Repository\NotificationRepository;
use App\Repository\ReclamationRepository;
use App\Repository\ReviewRepository;
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
    public function index(ReviewRepository $repository): Response
    {
        $rev=$repository->findRevMax();
        return $this->render('front/homeFront.html.twig',[
            'rev'=>$rev
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

    public function showR(ReviewRepository $repository){
        $rev=$repository->findRevMax();
        return $this->render('front/homeFront.html.twig',[
            'rev'=>$rev
        ]);
    }

    /**
     * @return Response
     * @Route("showReview", name="showReview")
     */
    public function showReviews(){

        return $this->render('front/Review/show.html.twig');
    }

    /**
     * @Route("addReview" , name="addReview")
     */
    public function ajouterReview(){
        if(isset($_POST["rating_data"])){
            $Review = new Review();
            $Review->setDescription($_POST["user_review"]);
            $Review->setPublishedAt(new \DateTime('now'));
            $Review->setStars($_POST["rating_data"]);
            $Review->setUserName($_POST["user_name"]);
            $em=$this->getDoctrine()->getManager();
            $em->persist($Review);
            $em->flush();

        }
        return $this->redirectToRoute('showReview');
    }

    /**
     * @param ReviewRepository $repository
     * @return false|string
     * @Route("/calculer", name="calculer")
     */
    public function calculer(ReviewRepository $repository){
        if(isset($_POST["action"])){
            $average_rating = 0;
            $total_review = 0;
            $five_star_review = 0;
            $four_star_review = 0;
            $three_star_review = 0;
            $two_star_review = 0;
            $one_star_review = 0;
            $total_user_rating = 0;
            $review_content = array();
            $result=$repository->findDESC();

            foreach($result as $row)
            {
                $review_content[] = array(
                    'user_name'		=>	$row->getUserName(),
                    'user_review'	=>	$row->getDescription(),
                    'rating'		=>	$row->getStars(),
                    'datetime'		=>	$row->getPublishedAt()
                );

                if($row->getStars() == '5')
                {
                    $five_star_review++;
                }

                if($row->getStars() == '4')
                {
                    $four_star_review++;
                }

                if($row->getStars() == '3')
                {
                    $three_star_review++;
                }

                if($row->getStars() == '2')
                {
                    $two_star_review++;
                }

                if($row->getStars() == '1')
                {
                    $one_star_review++;
                }

                $total_review++;

                $total_user_rating = $total_user_rating + $row->getStars();

            }

            $average_rating = $total_user_rating / $total_review;

            $output = array(
                'average_rating'	=>	number_format($average_rating, 1),
                'total_review'		=>	$total_review,
                'five_star_review'	=>	$five_star_review,
                'four_star_review'	=>	$four_star_review,
                'three_star_review'	=>	$three_star_review,
                'two_star_review'	=>	$two_star_review,
                'one_star_review'	=>	$one_star_review,
                'review_data'		=>	$review_content
            );


        }
        return New Response(json_encode($output));
    }






}
