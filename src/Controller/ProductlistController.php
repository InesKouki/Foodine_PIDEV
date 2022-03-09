<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ProductlistController extends AbstractController
{
    /**
     * @Route("/productlist", name="productlist")
     */
    public function index(): Response
    {
        $prod=$this->getDoctrine()->getRepository(Product::class)->findAll();
        return $this->render('productlist/index.html.twig', [

            'prod'=>$prod ,
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

        if ($form->isSubmitted()) {

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
