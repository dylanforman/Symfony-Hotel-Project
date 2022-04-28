<?php

namespace App\DataFixtures;

use App\Entity\Booking;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\BookingFactory;

class BookingFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        BookingFactory::createOne([
            'guestName' => 'guestOne',
            'room' => 'Family Room',
            'startDate' => '2022-04-28',
            'endDate' => '2002-04-30',
            'numAdults' => 2,
            'numChild' => 2
        ]);

        BookingFactory::createOne([
            'guestName' => 'guestTwo',
            'room' => 'Double Room',
            'startDate' => '2022-03-28',
            'endDate' => '2002-03-30',
            'numAdults' => 2,
            'numChild' => 0
        ]);
    }
}
