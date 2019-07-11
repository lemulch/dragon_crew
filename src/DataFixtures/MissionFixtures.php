<?php

namespace App\DataFixtures;

use App\Entity\Mission;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class MissionFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $mission1 = new Mission();
        $mission1->setUsefullcharge("Spektr-RG");
        $mission1->setLaunchTime(new \DateTime("2019-07-12"));
        $mission1->setLauncher($this->getReference("launcher-falconheavy"));
        $mission1->setSpacialCenter($this->getReference("spacialcenter-spacialcenter1"));
        $mission1->setOperator($this->getReference("operator-Space X"));
        $this->setReference("Spektr-RG", $mission1);


        $manager->persist($mission1);

        $mission2 = new Mission();
        $mission2->setUsefullcharge("Tesla Roadster");
        $mission2->setLaunchTime(new \DateTime("2030-07-12"));
        $mission2->setLauncher($this->getReference("launcher-falconheavy"));
        $mission2->setSpacialCenter($this->getReference("spacialcenter-spacialcenter1"));
        $mission2->setOperator($this->getReference("operator-nasa"));
        $this->setReference("Tesla Roadster", $mission2);


        $manager->persist($mission2);

        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            LauncherFixtures::class,
            SpacialCenterFixtures::class,
            OperatorFixtures::class
        ];
    }
}
