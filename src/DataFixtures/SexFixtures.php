<?php

namespace App\DataFixtures;

use App\Entity\Sex;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SexFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $man = new Sex();
        $man->setLabel("Man");
        $manager->persist($man);
        $this->setReference("sex-man", $man);

        $woman = new Sex();
        $woman->setLabel("Woman");
        $manager->persist($woman);
        $this->setReference("sex-woman", $woman);


        $manager->flush();
    }
}
