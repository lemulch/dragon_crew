<?php

namespace App\Controller;

use App\Entity\Astronaut;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AstronautController extends AbstractController
{
    /**
     * @Route("/astronaut", name="astronaut")
     */
    public function index()
    {
        $astronauts = $this->getDoctrine()->getRepository(Astronaut::class)->findAll();

        return $this->render('astronaut/index.html.twig', [
            'astronauts' => $astronauts
        ]);
    }

    /**
     * @Route("/astronaut/{id}", name="astonaut_show")
     */
    public function show(Astronaut $astronaut)
    {
        return $this->render('astronaut/index.html.twig', [
            'astronaut' => $astronaut
        ]);
    }
}
