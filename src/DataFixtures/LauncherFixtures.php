<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LauncherFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $launcher1 = new Launcher();
        $launcher1->setName("Falcon 9");
        $manager->persist($launcher1);

        $launcher2 = new Launcher();
        $launcher2->setName("Longue marche");
        $manager->persist($launcher2);

        $launcher3 = new Launcher();
        $launcher3->setName("Falcon Heavy");
        $manager->persist($launcher3);

        $launcher4 = new Launcher();
        $launcher4->setName("BFR");
        $manager->persist($launcher4);

        $launcher5 = new Launcher();
        $launcher5->setName("Delta IV");
        $manager->persist($launcher5);

        $launcher6 = new Launcher();
        $launcher6->setName("Delta IV Heavy");
        $manager->persist($launcher6);

        $launcher7 = new Launcher();
        $launcher7->setName("Ariane 5");
        $manager->persist($launcher7);

        $launcher8 = new Launcher();
        $launcher8->setName("Vega");
        $manager->persist($launcher8);

        $launcher9 = new Launcher();
        $launcher9->setName("PSLV");
        $manager->persist($launcher9);

        $launcher10 = new Launcher();
        $launcher10->setName("Espilon");
        $manager->persist($launcher10);

        $launcher11 = new Launcher();
        $launcher11->setName("Soyouz-U");
        $manager->persist($launcher11);

        $launcher12 = new Launcher();
        $launcher12->setName("Soyouz-FG");
        $manager->persist($launcher12);

        $launcher13 = new Launcher();
        $launcher13->setName("Soyouz-2-1a");
        $manager->persist($launcher13);

        $launcher14 = new Launcher();
        $launcher14->setName("Soyouz-2-1v");
        $manager->persist($launcher14);


        $manager->flush();
    }
}
