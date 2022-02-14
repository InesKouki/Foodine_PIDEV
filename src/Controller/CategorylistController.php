<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CategorylistController extends AbstractController
{
    /**
     * @Route("/categorylist", name="categorylist")
     */
    public function index(): Response
    {
        $cat1=$this->getDoctrine()->getRepository(Category::class)->findAll();

        return $this->render('categorylist/index.html.twig', [
          'cat'=>$cat1 ,
        ]);
    }


    /**
     * @param $id
     * @param CategoryRepository $repository
     * @return RedirectResponse
     * @Route("/categorylist/delete/{id}", name="deletecategory")
     */
    function Delete($id,CategoryRepository $repository) :Response {
        $list=$repository ->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($list);
        $em->flush();
        return $this->redirectToRoute('categorylist');

    }

    /**
     * @param CategoryRepository $repository
     * @param $id
     * @param Request $request
     * @return RedirectResponse|Response
     * @Route("categorylist/edit/{id}", name="editcategory" )
     */


    public function edit( CategoryRepository $repository , $id ,Request $request)
    {
        $produits=$repository->find($id);
        $form = $this->createForm(CategoryType::class, $produits);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('categorylist');
        }

        return $this->render('back/categorie/index.html.twig', [
            'cat' => $produits,
            'form' => $form->createView(),
        ]);
    }
}
