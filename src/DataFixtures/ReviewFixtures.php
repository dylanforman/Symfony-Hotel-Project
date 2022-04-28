<?php

namespace App\DataFixtures;

use App\Entity\Review;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\ReviewFactory;

class ReviewFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        ReviewFactory::createOne([
            'guestName' => 'pastGuestOne',
            'staffRating' => 8,
            'cleanRating' => 10,
            'facilityRating' => 9,
            'comment' => 'Great Hotel'
        ]);

        ReviewFactory::createOne([
            'guestName' => 'pastGuestTwo',
            'staffRating' => 6,
            'cleanRating' => 8,
            'facilityRating' => 5,
            'comment' => 'Average Hotel'
        ]);
    }
}
