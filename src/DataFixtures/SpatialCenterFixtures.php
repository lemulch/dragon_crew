<?php

namespace App\DataFixtures;

use App\Entity\SpatialCenter;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SpatialCenterFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $spatialcenter1 = new SpatialCenter();
        $spatialcenter1->setLocallization("Florida");
        $spatialcenter1->setName("John F. Kennedy Space Center");
        $spatialcenter1->setLatitude(28.5856559);
        $spatialcenter1->setLongitude(-80.6507658);
        $manager->persist($spatialcenter1);
        $this->setReference("spatialcenter-spatialcenter1", $spatialcenter1);

        $spatialcenter2 = new SpatialCenter();
        $spatialcenter2->setLocallization("French Guiana");
        $spatialcenter2->setName("Centre Spatial Guyanais");
        $spatialcenter2->setLatitude(4.969005);
        $spatialcenter2->setLongitude(-52.825610);
        $manager->persist($spatialcenter2);
        $this->setReference("spatialcenter-spatialcenter2", $spatialcenter2);

        $spatialcenter3 = new SpatialCenter();
        $spatialcenter3->setLocallization("Russia");
        $spatialcenter3->setName("Plessetsk cosmodrom");
        $spatialcenter3->setLatitude(62.926448);
        $spatialcenter3->setLongitude(40.574246);
        $manager->persist($spatialcenter3);
        $this->setReference("spatialcenter-spatialcenter3", $spatialcenter3);

        $spatialcenter4 = new SpatialCenter();
        $spatialcenter4->setLocallization("China");
        $spatialcenter4->setName("Jiuquan");
        $spatialcenter4->setLatitude(62.926448);
        $spatialcenter4->setLongitude(40.574246);
        $manager->persist($spatialcenter4);
        $this->setReference("spatialcenter-spatialcenter4", $spatialcenter4);


        $manager->flush();
    }
}
