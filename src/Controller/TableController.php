<?php

namespace App\Controller;

use App\Entity\Table;
use App\Form\TableType;
use App\Repository\TableRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Dompdf\Dompdf;
use Dompdf\Options;

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

    /**
     * @param TableRepository $tableRepository
     * @return Response
     * @route("/listpdf" , name="listpdf")
     */
   public function listpdf(TableRepository $tableRepository)
     {

         $pdfOptions = new Options();
         $pdfOptions->set('defaultFont', 'Arial');

         // Instantiate Dompdf with our options
         $dompdf = new Dompdf($pdfOptions);
         $table=$tableRepository->findAll();

         // Retrieve the HTML generated in our twig file
         $html = $this->renderView('back/table/tablepdf.html.twig',['t'=>$table]);

         // Load HTML to Dompdf
         $dompdf->loadHtml($html);

         // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
         $dompdf->setPaper('A4', 'portrait');

         // Render the HTML as PDF
         $dompdf->render();

         // Output the generated PDF to Browser (force download)
         $dompdf->stream("mypdf.pdf", [
             "Attachment" => true
         ]);
     }
    /**
     * @Route("/trie-table-asc", name="trie-table-asc")
     */
    public function sortBackByNameAsc(TableRepository $repo,PaginatorInterface $paginator, Request $request)
    {
        $donnes=$repo->orderBynombredeplaceAscQB();
        $table=$paginator->paginate(
            $donnes,
            $request->query->getInt('page',1),3
        );
        return $this->render('back/table/index.html.twig', ['t' => $table]);
    }

    /**
     * @Route("/trie-table-desc", name="trie-table-desc")
     */
    public function sortBackByNameDesc(TableRepository $repo,PaginatorInterface $paginator, Request $request)
    {
        $donnes=$repo->orderBynombredeplaceDescQB();
        $table=$paginator->paginate(
            $donnes,
            $request->query->getInt('page',1),6
        );
        return $this->render('back/table/index.html.twig', ['t' => $table]);
    }






















////////////////********************* mobile *************************/////////////////

    /**
     *
     * @route("/tt",name="tt")
     */
 public function gettable(TableRepository $tab,SerializerInterface $serializerinterface )
 {
     $table=$tab->findAll();
     $json=$serializerinterface->normalize($table,'json',['groups'=>'table']);
     return new JsonResponse($json);
 }


/*/**
 * @route("/add",name="add")
 */

 /*public function addtable(Request $request,SerializerInterface $serializer,EntityManagerInterface $em)
 {$content=$request->getContent();
     $data=$serializer->deserialize($content,Table::class,'json');
     $em->persist($data);
     $em->flush();

     return new Response('ok');

 }*/











    /**
     * @route("/add",name="create")
     * @Method ("POST")
     */
    public function addtable(Request $request){

        $table = new Table();
        $numerotable = $request->query->get("numerotable");
        $imagetable = $request->query->get("imagetable");
        $nbplacetable = $request->query->get("nbplacetable");
        $etat = $request->query->get("etat");



        $em = $this->getDoctrine()->getManager();


        $table->setNumerotable($numerotable);
        $table->setImagetable($imagetable);
        $table->setNbplacetable($nbplacetable);
        $table->setEtat($etat);

        $em->persist($table);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($table);
        return new JsonResponse($formatted);

    }

    /**
     * @param Request $request
     * @param TableRepository $repository
     * @return JsonResponse
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     * @Route ("/deletetable")
     * @Method("DELETE")
     */
    function Supprimertablee(Request $request , TableRepository $repository){
        $id=$request->get("id");
        $em=$this->getDoctrine()->getManager();

        $livraison =$em->getRepository(Table::class)->find($id);
        $em->remove($livraison);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $aj = $serializer->normalize($livraison);
        return new JsonResponse($aj);
    }
    /**
     * @Route("/update ", name="updatetable")
     * @Method("PUT")
     */
    public function modifiertablee(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $table = $this->getDoctrine()->getManager()
            ->getRepository(Table::class)
            ->find($request->get("id"));

        $table->setNumerotable($request->get("numerotable"));
        $table->setImagetable($request->get("imagetable"));
        $table->setNbplacetable($request->get("nbplacetable"));
        $table->setEtat($request->get("etat"));

        $em->persist($table);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("Evenement a ete modifiee avec success.");
        return new JsonResponse($formatted);

    }

}
