<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class AstronautFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $astronaut1 = new Astronaut();
        $astronaut1->setName("Thomas Pesquet");
        $astronaut1->setAge("41");
        $astronaut1->setNationality($this->getReference("nationality-french"));
        $astronaut1->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut1);

        $astronaut2 = new Astronaut();
        $astronaut2->setName("David Saint-Jacques");
        $astronaut2->setAge("49");
        $astronaut2->setNationality($this->getReference("nationality-canadian"));
        $astronaut2->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut2);

        $astronaut3 = new Astronaut();
        $astronaut3->setName("Anne McClain");
        $astronaut3->setAge("40");
        $astronaut3->setNationality($this->getReference("nationality-american"));
        $astronaut3->setSex($this->getReference("sex-woman"));
        $manager->persist($astronaut3);

        $astronaut4 = new Astronaut();
        $astronaut4->setName("Oleg Kononenko");
        $astronaut4->setAge("54");
        $astronaut4->setNationality($this->getReference("nationality-russian"));
        $astronaut4->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut4);

        $astronaut5 = new Astronaut();
        $astronaut5->setName("Nick Hague");
        $astronaut5->setAge("43");
        $astronaut5->setNationality($this->getReference("nationality-american"));
        $astronaut5->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut5);

        $astronaut6 = new Astronaut();
        $astronaut6->setName("Alekseï Ovtchinine");
        $astronaut6->setAge("47");
        $astronaut6->setNationality($this->getReference("nationality-russian"));
        $astronaut6->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut6);

        $astronaut7 = new Astronaut();
        $astronaut7->setName("Alexander Gerst");
        $astronaut7->setAge("43");
        $astronaut7->setNationality($this->getReference("nationality-german"));
        $astronaut7->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut7);

        $astronaut8 = new Astronaut();
        $astronaut8->setName("Serena M. Auñón-Chancellor");
        $astronaut8->setAge("43");
        $astronaut8->setNationality($this->getReference("nationality-american"));
        $astronaut8->setSex($this->getReference("sex-woman"));
        $manager->persist($astronaut8);

        $astronaut9 = new Astronaut();
        $astronaut9->setName("Sergueï Prokopyev");
        $astronaut9->setAge("44");
        $astronaut9->setNationality($this->getReference("nationality-russian"));
        $astronaut9->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut9);

        $astronaut10 = new Astronaut();
        $astronaut10->setName("Norishige Kanai");
        $astronaut10->setAge("42");
        $astronaut10->setNationality($this->getReference("nationality-japanese"));
        $astronaut10->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut10);

        $astronaut11 = new Astronaut();
        $astronaut11->setName("Scott David Tingle");
        $astronaut11->setAge("53");
        $astronaut11->setNationality($this->getReference("nationality-american"));
        $astronaut11->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut11);

        $astronaut12 = new Astronaut();
        $astronaut12->setName("Anton Chkaplerov");
        $astronaut12->setAge("49");
        $astronaut12->setNationality($this->getReference("nationality-russian"));
        $astronaut12->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut12);

        $astronaut13 = new Astronaut();
        $astronaut13->setName("Paolo Nespoli");
        $astronaut13->setAge("62");
        $astronaut13->setNationality($this->getReference("nationality-italian"));
        $astronaut13->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut13);

        $astronaut14 = new Astronaut();
        $astronaut14->setName("Timothy Nigel Peake");
        $astronaut14->setAge("49");
        $astronaut14->setNationality($this->getReference("nationality-english"));
        $astronaut14->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut14);

        $manager->flush();
    }
}
