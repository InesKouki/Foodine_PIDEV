<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Evenement;
use App\Entity\Product;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Repository\EvenementRepository;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\SerializerInterface;

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

    //  --------- ROUTES MOBILE ----------

    /**
     * @Route("/category", name="displayCategories")
     */
    public function displayCategs(CategoryRepository $repo,SerializerInterface $serializer)
    {
        $events = $repo->findAll();
        $formatted = $serializer->normalize($events,'json',['groups' => 'events']);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/addCategory", name="addCategory")
     * @Method ("POST")
     */
    public function addcateg(Request $request)
    {
        $categ = new Category();
        $name = $request->query->get("name");

        $em = $this->getDoctrine()->getManager();
        $categ->setName($name);
        $categ->setImage("37c45fdde5409e050464ffdf711db5ef.png");

        $em->persist($categ);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("categorie ajoutee");
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/updateCateg", name="updateCateg")
     * @Method("PUT")
     */
    public function modifierCategAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $event = $this->getDoctrine()->getManager()
            ->getRepository(Category::class)
            ->find($request->get("id"));

        $event->setName($request->get("name"));

        $em->persist($event);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("Catégorie a ete modifiee avec success.");
        return new JsonResponse($formatted);

    }

    /**
     * @Route("/deleteCateg", name="deleteCateg")
     * @Method("DELETE")
     */

    public function deleteEventAction(Request $request) {
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Category::class)->find($id);
        if($event!=null ) {
            $em->remove($event);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Categorie a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id categorie invalide.");


    }


}
