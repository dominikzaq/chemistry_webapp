<?php

namespace App\Controller;

use App\Entity\Atom;
use App\Form\AtomType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormTypeInterface;
class AtomController extends AbstractController
{
    /**
     * @Route("/atom", name="atom")
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
     * @Route("/atom/list", name="atom_list")
     */
    public function atomList(): Response
    {
        return $this->render('atom/edit.html.twig');
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

            //return $this->redirectToRoute('task_success');
        }

        return $this->render('atom/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
