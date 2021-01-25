<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OscillatorStrengthController extends AbstractController
{
    /**
     * @Route("/oscillator/strength/list", name="oscillator_strength_list")
     */
    public function index(): Response
    {
        return $this->render('oscillator_strength/list.html.twig', [
            'oscillators_strength' => null,
        ]);
    }

    /**
     * @Route("/oscillator/strength/add", name="oscillator_strength_ddd")
     */
    public function add(): Response
    {
        return $this->render('oscillator_strength/add.html.twig', [
            'oscillators_strength' => null,
        ]);
    }
}
