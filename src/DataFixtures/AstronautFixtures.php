<?php

namespace App\DataFixtures;

use App\Entity\Astronaut;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class AstronautFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $astronaut1 = new Astronaut();
        $astronaut1->setName("Pesquet");
        $astronaut1->setSurname("Thomas");
        $astronaut1->setBirthdate(new \DateTime("1985-01-01"));
        $astronaut1->setNationality($this->getReference("nationality-french"));
        $astronaut1->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut1);

        $astronaut2 = new Astronaut();
        $astronaut2->setName("Saint-Jacques");
        $astronaut2->setSurname("David");
        $astronaut2->setBirthdate(new \DateTime("1982-01-01"));
        $astronaut2->setNationality($this->getReference("nationality-canadian"));
        $astronaut2->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut2);

        $astronaut3 = new Astronaut();
        $astronaut3->setName("McClain");
        $astronaut3->setSurname("Anne");
        $astronaut3->setBirthdate(new \DateTime("1981-01-01"));
        $astronaut3->setNationality($this->getReference("nationality-american"));
        $astronaut3->setSex($this->getReference("sex-woman"));
        $manager->persist($astronaut3);

        $astronaut4 = new Astronaut();
        $astronaut4->setName("Kononenko");
        $astronaut4->setSurname("Oleg");
        $astronaut4->setBirthdate(new \DateTime("1978-01-01"));
        $astronaut4->setNationality($this->getReference("nationality-russian"));
        $astronaut4->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut4);

        $astronaut5 = new Astronaut();
        $astronaut5->setName("Hague");
        $astronaut5->setSurname("Nick");
        $astronaut5->setBirthdate(new \DateTime("1989-01-01"));
        $astronaut5->setNationality($this->getReference("nationality-american"));
        $astronaut5->setSex($this->getReference("sex-man"));
        $manager->persist($astronaut5);


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
            NationalityFixtures::class,
            SexFixtures::class
        ];
    }
}
