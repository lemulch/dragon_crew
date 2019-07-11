<?php

namespace App\DataFixtures;

use App\Entity\Launcher;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LauncherFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $launcher1 = new Launcher();
        $launcher1->setName("Falcon 9");
        $launcher1->setType("Machin truc");
        $launcher1->setConstructor("Space X");
        $launcher1->setPhoto("Vol_1.png");
        $this->setReference("launcher-falcon9", $launcher1);
        $manager->persist($launcher1);

        $launcher2 = new Launcher();
        $launcher2->setName("Longue marche");
        $launcher2->setType("Machin");
        $launcher2->setConstructor("Les noichi");
        $launcher2->setPhoto("Vol_2.png");
        $this->setReference("launcher-longuemarche", $launcher2);
        $manager->persist($launcher2);

        $launcher3 = new Launcher();
        $launcher3->setName("Falcon Heavy");
        $launcher3->setType("bigfuckingrocket");
        $launcher3->setConstructor("Space X");
        $launcher3->setPhoto("Vol_3.png");
        $this->setReference("launcher-falconheavy", $launcher3);
        $manager->persist($launcher3);

        $launcher4 = new Launcher();
        $launcher4->setName("Delta IV");
        $launcher4->setType("Machin truc");
        $launcher4->setConstructor("NASA");
        $launcher4->setPhoto("Vol_1.png");
        $this->setReference("launcher-delta4", $launcher4);
        $manager->persist($launcher4);

        $launcher5 = new Launcher();
        $launcher5->setName("Ariane 5");
        $launcher5->setType("Machin truc");
        $launcher5->setConstructor("arianespace");
        $launcher5->setPhoto("Vol_2.png");
        $this->setReference("launcher-ariane5", $launcher5);
        $manager->persist($launcher5);

        $launcher6 = new Launcher();
        $launcher6->setName("Soyouz");
        $launcher6->setType("Machin truc");
        $launcher6->setConstructor("cyka blyat");
        $launcher6->setPhoto("Vol_3.png");
        $this->setReference("launcher-soyouz", $launcher6);
        $manager->persist($launcher6);








        $manager->flush();
    }
}
