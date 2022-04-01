<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Entity\ProduitLike;
use App\Entity\User;
use App\Form\ProductType;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use App\Repository\ProduitLikeRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     *@param Request $request ;
     */
    public function addProd(Request $request, MailerInterface $mailer,UserRepository $repository)
    {
        $prod=$this->getDoctrine()->getRepository(Product::class)->findAll();
        $Users = $repository->findOnlyUsers();

        $product= new Product() ;
        $form2=$this->createForm(ProductType::class,$product);
        $form2->handleRequest($request);
        $file=$form2['image']->getData();

        if ($form2->isSubmitted()&& $form2->isValid()) {
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $product->setImage($filename);
            $this->addFlash('success', '');

            foreach ($Users as $User) {
                $to = $User->getEmail();

                /** sending mail to the new all Users **/
                $message = (new Email())
                    ->From('foodine01@gmail.com')
                    ->To($to)
                    ->subject('Il y a un nouveau Produit!')
                    ->text("Voici notre dernier produit: " . $product->getName());
                $mailer->send($message);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            return $this->redirectToRoute('product');

        }

        return $this->render('back/product/index.html.twig', [
            'product' => $prod,

            'form1' => $form2->createView()

        ]);
    }

    /**
     * @Route("/productlist", name="productlist")
     */
    public function index(): Response
    {
        $prod=$this->getDoctrine()->getRepository(Product::class)->findAll();
        return $this->render('back/productlist/index.html.twig', [

            'produits1'=>$prod ,
        ]);
    }

    /**
     * @param $id
     * @param ProductRepository $repository
     * @return RedirectResponse
     * @Route("/productlist/delete/{id}", name="deleteprodcut")
     */
    function Delete($id,ProductRepository $repository) :Response {
        $list=$repository ->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($list);
        $em->flush();
        return $this->redirectToRoute('productlist');

    }


    /**
     * @Route("productlist/edit/{id}", name="editproduct" )
     * @param Request $request ;
     * @param Product $prod
     * @return Response
     */

    public function edit(Request $request, Product $prod): Response
    {
        $form = $this->createForm(ProductType::class, $prod);
        $form->handleRequest($request);
        $file=$form['image']->getData();

        if ($form->isSubmitted()&& $form->isValid()) {

            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $prod->setImage($filename);


            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('productlist');
        }

        return $this->render('back/product/index.html.twig', [
            'prod' => $prod,
            'form1' => $form->createView(),
        ]);
    }

    /**
     * @Route ("/productslike/{id}/like", name="produit_like")
     * @param Product $produit
     * @param EntityManagerInterface $manager
     * @param ProduitLikeRepository $produitLikeRepository
     * @return  Response
     */
    public function like(Product $produit,EntityManagerInterface $manager, ProduitLikeRepository $produitLikeRepository):Response
    {
        $user = $this->getUser();
        if (!$user) return  $this->json([
            'code' =>403,
            'message'=>"unaurhorized"
        ],403);
        if ($produit->isLiked($user)){
            $like =$produitLikeRepository->findOneBy([
                'product' =>$produit,
                'user'=>$user
            ]);
            $manager->remove($like);
            $manager->flush();
            return $this->redirectToRoute('products');

        }
        $like = new ProduitLike();

        $like->setProduit($produit)
            ->setUser($user);
        $manager->persist($like);
        $manager->flush();


        return $this->redirectToRoute('products');
    }

    /**
     * @Route("/productlist/searchResajax ", name="searchProdResajax")
     */
    public function searchProductAjax(ProductRepository $repo,Request $request)
    {
        $requestString=$request->get('searchValue');
        $products = $repo->findProductByName($requestString);

        return $this->render('back/productlist/ajax.html.twig', [
            "produits1"=>$products
        ]);
    }
    /**
     * @return Response
     * @Route ("/productlist-trienomAsc",name="trienom")
     */
    public function orderByNomDescQB(ProductRepository $rep,Request $request){
        $x=$rep->orderByNomDescQB();

        return $this->render('back/productlist/index.html.twig',['produits1'=>$x]);
    }
    /**
     * @return Response
     * @Route ("/productlist-trienomDsc",name="trienomDsc")
     */
    public function orderByNomAscQB(ProductRepository $rep,Request $request){
        $x=$rep->orderByNomAscQB();
        return $this->render('back/productlist/index.html.twig',['produits1'=>$x]);
    }
    /**
     * @return Response
     * @Route ("/productlist-triePrixAsc",name="trieprixAsc")
     */
    public function orderByPriceAscQB(ProductRepository $rep,Request $request){
        $x=$rep->orderByPriceAscQB();
        return $this->render('back/productlist/index.html.twig',['produits1'=>$x]);
    }

    /**
     * @return Response
     * @Route ("/productlist-triePrixDsc",name="trieprixDsc")
     */
    public function orderByPriceDescQB(ProductRepository $rep,Request $request){
        $x=$rep->orderByPriceDescQB();
        return $this->render('back/productlist/index.html.twig',['produits1'=>$x]);
    }

    //  --------- ROUTES MOBILE ----------

    /**
     * @Route("/produits", name="displayProds")
     */
    public function displayProds(ProductRepository $repo,SerializerInterface $serializer)
    {
        $events = $repo->findAll();
        $formatted = $serializer->normalize($events,'json',['groups' => 'events']);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/addProd", name="addProd")
     * @Method ("POST")
     */
    public function addProduct(Request $request,MailerInterface $mailer,UserRepository $repository, CategoryRepository $rep)
    {
        $categ = new Product();
        $cat = $rep->find(1);
        $name = $request->query->get("name");
        $price = $request->query->get("price");
        $quantitie = $request->query->get("quantitie");
        $categ->setCategory($cat);

        $em = $this->getDoctrine()->getManager();
        $categ->setName($name);
        $categ->setPrice($price);
        $categ->setQuantitie($quantitie);
        $categ->setImage("d3ab957c3dba53164f74da0674bbdc53.png");

        $em->persist($categ);
        $em->flush();

        $Users = $repository->findOnlyUsers();

        foreach ($Users as $User) {
            $to = $User->getEmail();

            /** sending mail to the new all Users **/
            $message = (new Email())
                ->From('foodine01@gmail.com')
                ->To($to)
                ->subject('Il y a un nouveau Produit!')
                ->text("Voici notre dernier produit: " . $categ->getName());
            $mailer->send($message);
        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("produit ajoute");
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/updateProd", name="updateProd")
     * @Method("PUT")
     */
    public function modifierProductAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $event = $this->getDoctrine()->getManager()
            ->getRepository(Product::class)
            ->find($request->get("id"));

        $event->setName($request->get("name"));
        $event->setPrice($request->get("price"));
        $event->setQuantitie($request->get("quantitie"));

        $em->persist($event);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("produit a ete modifiee avec success.");
        return new JsonResponse($formatted);

    }

    /**
     * @Route("/deleteProd", name="deleteProd")
     * @Method("DELETE")
     */

    public function deleteProductAction(Request $request) {
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Product::class)->find($id);
        if($event!=null ) {
            $em->remove($event);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("produit a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id produit invalide.");


    }


}
