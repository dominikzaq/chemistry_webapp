<?php

namespace App\Controller;

use App\Entity\Atom;
use App\Form\AtomType;
use App\Repository\AtomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormTypeInterface;
class AtomController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('atom/index.html.twig', [
            'controller_name' => 'AtomController',
        ]);
    }


    /**
     * @Route("/atom/edit", name="atom_edit")
     */
    public function edit(): Response
    {
        return $this->render('atom/edit.html.twig');
    }

    /**
     * @Route("/atom/delete{atomId}", name="atom_delete")
     */
    public function delete(int $atomId): Response
    {
        dump($atomId);
        die();
        return $this->redirectToRoute("atom_list");
    }

    /**
     * @Route("/atom/view", name="atom_view")
     */
    public function view(): Response
    {
        return $this->render('atom/view.html.twig');
    }

    /**
     * @Route("/atom/list", name="atom_list")
     */
    public function atomList(AtomRepository $atomRepository): Response
    {

        return $this->render('atom/list.html.twig', [
            "atoms" => $atomRepository->findAll()
        ]);
    }

    /**
     * @Route("/atom/new", name="atom_new")
     */
    public function new(Request $request): Response
    {
        $atom = new Atom();
        $form = $this->createForm(AtomType::class, $atom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($atom);
            $em->flush();
            return $this->redirectToRoute('atom_lists');
        }

        return $this->render('atom/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
