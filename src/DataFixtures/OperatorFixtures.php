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
        $this->setReference("operator-Space X", $operator1);
        $manager->persist($operator1);

        $operator2 = new Operator();
        $operator2->setName("Arianespace");
        $operator2->setNationality($this->getReference("nationality-french"));
        $this->setReference("operator-arianespace", $operator2);
        $manager->persist($operator2);

        $operator3 = new Operator();
        $operator3->setName("Roscosmos");
        $operator3->setNationality($this->getReference("nationality-russian"));
        $this->setReference("operator-roscosmos", $operator3);
        $manager->persist($operator3);

        $operator4 = new Operator();
        $operator4->setName("NASA");
        $operator4->setNationality($this->getReference("nationality-american"));
        $this->setReference("operator-nasa", $operator4);
        $manager->persist($operator4);

        $operator5 = new Operator();
        $operator5->setName("Blue Origin");
        $operator5->setNationality($this->getReference("nationality-american"));
        $this->setReference("operator-blueorigin", $operator5);
        $manager->persist($operator5);


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
