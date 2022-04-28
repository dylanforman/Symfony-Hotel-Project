<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\ReservationFactory;

class ReservationFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        ReservationFactory::createOne([
            'numDiners' => 4,
            'time' => '18:30',
            'date' => '2022-04-02',
            'guest' => true
        ]);

        ReservationFactory::createOne([
            'numDiners' => 6,
            'time' => '14:30',
            'date' => '2022-04-05',
            'guest' => false
        ]);
    }
}
