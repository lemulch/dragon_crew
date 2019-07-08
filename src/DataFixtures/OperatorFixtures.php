<?php

namespace App\DataFixtures;

use App\Entity\Operator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class OperatorFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $operator1 = new Operator();
        $operator1->setName("Space X");
        $operator1->setNationality($this->getReference("nationality-american"));

        $operator2 = new Operator();
        $operator2->setName("Arianespace");
        $operator2->setNationality($this->getReference("nationality-french"));

        $operator3 = new Operator();
        $operator3->setName("Roscosmos");
        $operator3->setNationality($this->getReference("nationality-russian"));

        $operator4 = new Operator();
        $operator4->setName("NASA");
        $operator4->setNationality($this->getReference("nationality-american"));

        $operator5 = new Operator();
        $operator5->setName("Virgin Galactic");
        $operator5->setNationality($this->getReference("nationality-american"));

        $operator6 = new Operator();
        $operator6->setName("Blue Origin");
        $operator6->setNationality($this->getReference("nationality-american"));

        $operator7 = new Operator();
        $operator7->setName("JAXA");
        $operator7->setNationality($this->getReference("nationality-japanese"));

        $operator8 = new Operator();
        $operator8->setName("ASC");
        $operator8->setNationality($this->getReference("nationality-canadian"));

        $operator9 = new Operator();
        $operator9->setName("UK Space");
        $operator9->setNationality($this->getReference("nationality-english"));

        $operator10 = new Operator();
        $operator10->setName("ASI");
        $operator10->setNationality($this->getReference("nationality-italian"));

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
            NationalityFixtures::class
        ];
    }
}
