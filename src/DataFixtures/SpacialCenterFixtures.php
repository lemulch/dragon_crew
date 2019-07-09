<?php

namespace App\DataFixtures;

use App\Entity\SpacialCenter;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SpacialCenterFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $spacialcenter1 = new SpacialCenter();
        $spacialcenter1->setLocallization("Florida");
        $spacialcenter1->setName("John F. Kennedy Space Center");
        $spacialcenter1->setLatitude(28.5856559);
        $spacialcenter1->setLongitude(-80.6507658);
        $manager->persist($spacialcenter1);
        $this->setReference("spacialcenter-spacialcenter1", $spacialcenter1);

        $spacialcenter2 = new SpacialCenter();
        $spacialcenter2->setLocallization("French Guiana");
        $spacialcenter2->setName("Centre spacial Guyanais");
        $spacialcenter2->setLatitude(4.969005);
        $spacialcenter2->setLongitude(-52.825610);
        $manager->persist($spacialcenter2);
        $this->setReference("spacialcenter-spacialcenter2", $spacialcenter2);

        $spacialcenter3 = new SpacialCenter();
        $spacialcenter3->setLocallization("Russia");
        $spacialcenter3->setName("Plessetsk cosmodrom");
        $spacialcenter3->setLatitude(62.926448);
        $spacialcenter3->setLongitude(40.574246);
        $manager->persist($spacialcenter3);
        $this->setReference("spacialcenter-spacialcenter3", $spacialcenter3);

        $spacialcenter4 = new SpacialCenter();
        $spacialcenter4->setLocallization("China");
        $spacialcenter4->setName("Jiuquan");
        $spacialcenter4->setLatitude(62.926448);
        $spacialcenter4->setLongitude(40.574246);
        $manager->persist($spacialcenter4);
        $this->setReference("spacialcenter-spacialcenter4", $spacialcenter4);


        $manager->flush();
    }
}
