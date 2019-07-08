<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MissionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $mission1 = new Mission();
        $mission1->setUsefullcharge("Spektr-RG");
        $mission1->setlaunchtime(date_time_set(12/07/2019));
        $mission1->setLauncher($this->getReference("launcher-Falcon Heavy"));
        $mission1->setSpatialCenter($this->getReference("spatialcenter-Florida"));
        $mission1->setOperator($this->getReference("operator-Space X"));


        $manager->persist($mission1);

        $manager->flush();
    }
}
