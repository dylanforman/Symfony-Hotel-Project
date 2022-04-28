<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Factory\UserFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createOne([
            'username' => 'admin123',
            'password' => 'admin123',
            'role' => 'ROLE_ADMIN'
        ]);

        UserFactory::createOne([
            'username' => 'recep123',
            'password' => 'recep123',
            'role' => 'ROLE_RECEPTIONIST'
        ]);

        UserFactory::createOne([
            'username' => 'chef123',
            'password' => 'chef123',
            'role' => 'ROLE_CHEF'
        ]);

        UserFactory::createOne([
            'username' => 'guest123',
            'password' => 'guest123',
            'role' => 'ROLE_GUEST'
        ]);





    }
}
