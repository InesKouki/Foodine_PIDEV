<?php

namespace App\Controller;

use App\Entity\Table;
use App\Form\ClassroomType;
use App\Form\TableType;
use App\Repository\TableRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TableController extends AbstractController
{
    /**
     * @Route("/table", name="table")
     */
    public function index(): Response
    {
        return $this->render('table/index.html.twig', [
            'controller_name' => 'TableController',
        ]);
    }
    /**
     * @Route("/admin-table2", name="tableback")
     */
    public function indexBack(): Response
    {
        return $this->render('back/table/index.html.twig', [
            'controller_name' => 'TableController',
        ]);
    }
    /**

     * @route("/admin-table",name="affichertable")
     */
    public function affichertable(TableRepository $t)
    {$table=$t->findAll();
        return $this->render('back/table/index.html.twig',['t'=>$table]);
    }

    /**
     * @route("/delete/{id}",name="d")
     */
    public function supprimertable($id,TableRepository $t)
    {$table=$t->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($table);
        $em->flush();
        return $this->redirectToRoute('affichertable');

    }

    /**
     * @route("/admin-ajoutertable")
     */
    public function ajoutertable(Request $request)
    {$table=new Table();
        $form=$this->createForm(TableType::class,$table);
        $form->handleRequest($request);
        $file=$form['imagetable']->getData();
        if ($form->isSubmitted()&&$form->isValid())
        { /*$file = $request->files->get('table')['my_file'];*/
         $uploads_dir = $this->getParameter('uploads_directory');
        $filename=md5(uniqid())    .'.'.    $file->guessExtension();
        $file->move($uploads_dir,$filename);
        $table->setImagetable($filename);

            $em=$this->getDoctrine()->getManager();
            $em->persist($table);
            $em->flush();
            return $this->redirectToRoute("affichertable");
        }
        return $this->render('back/table/ajoutertable.html.twig',['form'=>$form->createView()]);
    }

    /**
     * @route("/modifier/{id}",name="dd")
     */

      public function modifiertable(TableRepository $repository,$id,Request $request)
       {$table=$repository->find($id);
           $form=$this->createForm(TableType::class,$table);
           $form->handleRequest($request);
           $file=$form['imagetable']->getData();

           if($form->isSubmitted() && $form->isValid())
           {    $uploads_dir = $this->getParameter('uploads_directory');
               $filename=md5(uniqid())    .'.'.    $file->guessExtension();
               $file->move($uploads_dir,$filename);
               $table->setImagetable($filename);
               $em=$this->getDoctrine()->getManager();
               $em->flush();
               return $this->redirectToRoute("affichertable");
           }
           return $this->render('back/table/modifiertable.html.twig',['form'=>$form->createView()]);
        }


    /**
     * @Route("/admin-ajoutertable", name="ajoutertableback")
     */
    public function ajoutertableback(): Response
    {
        return $this->render('back/table/ajoutertable.html.twig', [
            'controller_name' => 'TableController',
        ]);
    }
}
