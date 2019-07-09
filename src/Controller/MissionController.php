<?php

namespace App\Controller;

use App\Entity\Mission;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MissionController extends AbstractController
{
    /**
     * @Route("/mission", name="mission")
     */
    public function index()
    {
        $missions = $this->getDoctrine()->getRepository(Mission::class)->findAll();

        return $this->render('mission/index.html.twig', [
            'missions' => $missions
        ]);
    }

    /**
     * @Route("/mission/{id}", name="mission_show")
     */
    public function show(Mission $mission)
    {
        return $this->render('mission/index.html.twig', [
            'mission' => $mission
        ]);
    }

}
