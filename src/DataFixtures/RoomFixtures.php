<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\RoomFactory;

class RoomFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        RoomFactory::createOne([
           'roomType' => 'Single Room',
           'pricePerNight' => 59.99
        ]);

        RoomFactory::createOne([
            'roomType' => 'Double Room',
            'pricePerNight' => 69.99
        ]);

        RoomFactory::createOne([
            'roomType' => 'Family Room',
            'pricePerNight' => 79.99
        ]);
    }
}
