<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categorie")
     *@param Request $request ;
     */
    public function addCategory(Request $request)
    {

        $cat= new Category() ;
        $form2=$this->createForm(CategoryType::class,$cat);
        $form2->handleRequest($request);
        $file=$form2['image']->getData();

        if ($form2->isSubmitted() && $form2->isValid()) {
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $cat->setImage($filename);


            $this->addFlash('success', '');

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cat);
            $entityManager->flush();
            return $this->redirectToRoute('categorylist');

        }

        return $this->render('back/categorie/index.html.twig', [
            'form' => $form2->createView()

        ]);
    }


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

        if ($form->isSubmitted()&& $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('categorylist');
        }

        return $this->render('back/categorie/index.html.twig', [
            'cat' => $produits,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/recherche", name="recherche")
     */
    public function recherche(ProductRepository $repository , Request $request)
    {

        $cat1=$this->getDoctrine()->getRepository(Category::class)->findAll();

        $data=$request->get('search');

        $product=$repository->findBy(['name'=>$data]);


        return $this->render('front/categorie/index.html.twig', [
            'prodprod' => $product ,
            'categ'=>$cat1 ,

        ]);
    }

    /**
     * @Route("/products", name="products")
     */
    public function categories(): Response
    {
        $cat1=$this->getDoctrine()->getRepository(Category::class)->findAll();
        $products=$this->getDoctrine()->getRepository(Product::class)->findAll();



        return $this->render('front/categorie/index.html.twig', [
            'categ'=>$cat1 ,
            'prodprod'=>$products

        ]);
    }

    /**
     * @Route("/{id}", name="categoryprod")

     */
    public function categoy(CategoryRepository $categoryRepository, ProductRepository $productRepository, $id): Response
    {

     $cat=$categoryRepository->find($id);
     $products=$productRepository->findByCategorie($cat->getId());


        return $this->render('front/categorie/index1.html.twig', [

            'categ'=>$cat ,
            'prods11'=>$products

        ]);
    }

}
