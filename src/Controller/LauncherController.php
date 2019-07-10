<?php

namespace App\Controller;

use App\Entity\Launcher;
use App\Entity\Operator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LauncherController extends AbstractController
{
    /**
     * @Route("/launcher", name="launcher")
     */
    public function index()
    {
        $launchers = $this->getDoctrine()->getRepository(Launcher::class)->findAll();


        return $this->render('launcher/index.html.twig', [
            'launchers' => $launchers

        ]);

    }
}
