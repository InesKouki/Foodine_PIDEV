<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

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

        return $this->render('back/categorylist/index.html.twig', [
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
            'prods' => $product ,
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
            'prods'=>$products

        ]);
    }

    /**
     * @Route("/products/{id}", name="categoryprod")

     */
    public function categoyyy(CategoryRepository $categoryRepository, ProductRepository $productRepository, $id)
    {
     $cat=$categoryRepository->find($id);
     $products=$productRepository->findByCategorie($cat->getId());
        return $this->render('front/categorie/index.html.twig', [

            'categ'=>$cat ,
            'prods'=>$products

        ]);
    }

    /**
     * @Route ("/Ajoutercategorie")
     * @Method ("POST")
     */
    public function ajoutermobile(Request $request){

        $categorie = new Category();

        $em=$this->getDoctrine()->getManager();

        $image=$request->query->get("image");
        $categorie->setImage($image);

        $name=$request->query->get("name");
        $categorie->setName($name);

        $products=$request->query->get("products");
        $categorie->set($products);

        $em->persist($categorie);
        $em->flush();


        $serializer = new Serializer([new ObjectNormalizer()]);
        $aj = $serializer->normalize($categorie);
        return new JsonResponse($aj);

    }



    /**
     * @param CategoryRepository $repository
     * @return Response
     * @Route("/categoriess")
     */
    public function indexmobile()
    {
        $categorie =$this->getDoctrine()->getManager()->getRepository(Category::class)->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $aj = $serializer->normalize($categorie);
        return new JsonResponse($aj);

    }


    /**
     * @Route ("/Deletecategorie")
     * @Method("DELETE")
     */
    function SupprimerFrontmoibile(Request $request , CategoryRepository $repository){
        $id=$request->get("id");
        $em=$this->getDoctrine()->getManager();

        $categorie =$em->getRepository(Category::class)->find($id);
        $em->remove($categorie);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $aj = $serializer->normalize($categorie);
        return new JsonResponse($aj);
    }




}
