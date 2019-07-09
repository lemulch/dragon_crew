<?php

namespace App\DataFixtures;

use App\Entity\Nationality;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class NationalityFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $french = new Nationality();
        $french->setLabel("French");
        $manager->persist($french);
        $this->setReference("nationality-french", $french);

        $american = new Nationality();
        $american->setLabel("American");
        $manager->persist($american);
        $this->setReference("nationality-american", $american);

        $english = new Nationality();
        $english->setLabel("English");
        $manager->persist($english);
        $this->setReference("nationality-english", $english);

        $italian = new Nationality();
        $italian->setLabel("Italian");
        $manager->persist($italian);
        $this->setReference("nationality-italian", $italian);

        $canadian = new Nationality();
        $canadian->setLabel("Canadian");
        $manager->persist($canadian);
        $this->setReference("nationality-canadian", $canadian);

        $spanish = new Nationality();
        $spanish->setLabel("Spanish");
        $manager->persist($spanish);
        $this->setReference("nationality-spanish", $spanish);

        $japanese = new Nationality();
        $japanese->setLabel("Japanese");
        $manager->persist($japanese);
        $this->setReference("nationality-japanese", $japanese);

        $chinese = new Nationality();
        $chinese->setLabel("Chinese");
        $manager->persist($chinese);
        $this->setReference("nationality-chinese", $chinese);

        $russian = new Nationality();
        $russian->setLabel("Russian");
        $manager->persist($russian);
        $this->setReference("nationality-russian", $russian);

        $indian = new Nationality();
        $indian->setLabel("Indian");
        $manager->persist($indian);
        $this->setReference("nationality-indian", $indian);

        $german = new Nationality();
        $german->setLabel("German");
        $manager->persist($german);
        $this->setReference("nationality-german", $german);

        $manager->flush();
    }
}
