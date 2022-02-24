<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EvenementController extends AbstractController
{
    /**
     * @Route("/evenements", name="event")
     */
    public function afficheFront(EvenementRepository $repo)
    {
        $event=$repo->getActiveEvents();
        return $this->render('front/evenement/index.html.twig', ['frontEvents' => $event]);
    }

    /**
     * @Route("/admin-evenements", name="evenement")
     */
    public function afficheBack(EvenementRepository $repo)
    {
        $event=$repo->orderByDateDescQB();
        return $this->render('back/evenement/index.html.twig', ['backEvents' => $event]);
    }

    /**
     * @Route("/admin-addEvenement", name="addEvenement")
     */
    public function addEvenement(Request $request)
    {
        $event = new Evenement();
        $form = $this->createForm(EvenementType::class,$event);
        $form->handleRequest($request);
        $file = $form['image']->getData();
        if ($form->isSubmitted() && $form->isValid()){

            $upload_dir = $this->getParameter('uploads_directory');
            $filename = md5(uniqid())   . '.' .   $file->guessExtension();
            $file->move($upload_dir,$filename);

            $event->setImage($filename);

            $em=$this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('evenement');
        }

        return $this->render('back/evenement/addEvenement.html.twig', [
            'eventForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin-updateEvenement-{id}", name="updateEvenement")
     */
    public function updateEvenement(Request $request, EvenementRepository $repo, $id)
    {
        $event = $repo->find($id);
        $form = $this->createForm(EvenementType::class,$event);
        $form->handleRequest($request);
        $file = $form['image']->getData();

        if ($form->isSubmitted() && $form->isValid()){
            if ($file) {
                $upload_dir = $this->getParameter('uploads_directory');
                $filename = md5(uniqid())   . '.' .   $file->guessExtension();
                $file->move($upload_dir,$filename);

                $event->setImage($filename);
            }

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('evenement');
        }

        return $this->render('back/evenement/updateEvenement.html.twig', [
            'eventForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin-deleteEvenement-{id}", name="deleteEvenement")
     */
    public function deleteEvenement(EvenementRepository $repo, $id)
    {
            $em=$this->getDoctrine()->getManager();

            $event=$repo->find($id);
            $em->remove($event);
            $em->flush();
            return $this->redirectToRoute('evenement');
    }

    /**
     * @Route("/admin-evenements-sortbynameasc", name="evenementSortByNameAsc")
     */
    public function sortBackByNameAsc(EvenementRepository $repo)
    {
        $event=$repo->orderByNameAscQB();
        return $this->render('back/evenement/index.html.twig', ['backEvents' => $event]);
    }

    /**
     * @Route("/admin-evenements-sortbynamedesc", name="evenementSortByNameDesc")
     */
    public function sortBackByNameDesc(EvenementRepository $repo)
    {
        $event=$repo->orderByNameDescQB();
        return $this->render('back/evenement/index.html.twig', ['backEvents' => $event]);
    }

    /**
     * @Route("/admin-evenements-sortbydateasc", name="evenementSortByDateAsc")
     */
    public function sortBackByDateAsc(EvenementRepository $repo)
    {
        $event=$repo->orderByDateAscQB();
        return $this->render('back/evenement/index.html.twig', ['backEvents' => $event]);
    }

}
