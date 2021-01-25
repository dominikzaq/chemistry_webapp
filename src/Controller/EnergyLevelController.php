<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnergyLevelController extends AbstractController
{
    /**
     * @Route("/energy/level", name="energy_level")
     */
    public function index(): Response
    {
        return $this->render('energy_level/list.html.twig', [
            'energy_levels' => null,
        ]);
    }

    /**
     * @Route("/energy/level/add", name="energy_level_add")
     */
    public function add(): Response
    {
        return $this->render('energy_level/add.html.twig', [
            'energy_levels' => null,
        ]);
    }

}
