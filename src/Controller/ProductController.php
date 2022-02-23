<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     *@param Request $request ;
     */
    public function addProd(Request $request)
    {
        $prod=$this->getDoctrine()->getRepository(Product::class)->findAll();

        $product= new Product() ;
        $form2=$this->createForm(ProductType::class,$product);
        $form2->handleRequest($request);
        $file=$form2['image']->getData();

        if ($form2->isSubmitted()&& $form2->isValid()) {
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory'), $filename);
            $product->setImage($filename);


            $this->addFlash('success', '');

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            return $this->redirectToRoute('product');

        }

        return $this->render('product/index.html.twig', [
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
        return $this->render('productlist/index.html.twig', [

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

        return $this->render('product/index.html.twig', [
            'prod' => $prod,
            'form1' => $form->createView(),
        ]);
    }


}
