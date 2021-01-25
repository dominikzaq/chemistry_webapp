<?php

namespace App\Controller;

use App\Entity\Atom;
use App\Entity\JonizationLevel;
use App\Form\JonizationLevelType;
use App\Repository\JonizationLevelRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JonizationLevelController extends AbstractController
{
    /**
     * @Route("/jonization/list/{id}", name="jonization_level_list")
     */
    public function list(Atom $atom, Request $request, JonizationLevelRepository $jonizationLevelRepository): Response
    {
        $jonizationLevels = $jonizationLevelRepository->findBy(["atom"=>$atom]);

        return $this->render('jonization_level/list.html.twig', [
            "jonization_levels" => $jonizationLevels
        ]);
    }

    /**
     * @Route("/jonization/add/{id}", name="jonization_level_add")
     */
    public function add(Atom $atom, Request $request, JonizationLevel $jonizationLevel): Response
    {
        $form = $this->createForm(JonizationLevelType::class, $jonizationLevel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            ;
        }
        return $this->render('jonization_level/list.html.twig', [
        ]);
    }

    /**
     * @Route("/jonization/delete/{id}", name="jonization_level_delete")
     */
    public function delete(JonizationLevel $jonizationLevel): Response
    {
        if($jonizationLevel)
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($jonizationLevel);
            $em->flush();
        }
        return $this->redirectToRoute("jonization_level_list");
    }
}
