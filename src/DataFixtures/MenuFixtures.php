<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\MenuFactory;

class MenuFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
      MenuFactory::createOne([
          'type' => 'Starter'
      ]);

      MenuFactory::createOne([
          'type' => 'Main'
      ]);

      MenuFactory::createOne([
          'type' => 'Dessert'
      ]);
    }
}
