<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
}
