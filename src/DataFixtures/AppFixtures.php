<?php

namespace App\DataFixtures;

use App\Entity\Passwd;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        for ($i = 0; $i < 10; $i++) {
            $passwd = new Passwd();
            $passwd->setWebSite("Site Web $i");
            $passwd->setLogin("Login $i");
            $passwd->setPassword("Password $i");
            $passwd->setCreatedAt(new \DateTimeImmutable);
            $passwd->setUpdatedAt(new \DateTimeImmutable);
            $manager->persist($passwd);
        }

        $manager->flush();
    }
}
