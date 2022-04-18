<?php

namespace App\DataFixtures;

use App\Entity\Booking;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookingFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $b1 = new Booking();
        $b1->setGuestName("Dylan XYZ");
        $b1->setRoom("Family Room");
        $b1->setStartDate('2022-09-01');
        $b1->setEndDate('2022-09-05');
        $b1->setNumAdults(2);
        $b1->setNumChild(2);
        $manager->persist($b1);
        $manager->flush();
    }
}
