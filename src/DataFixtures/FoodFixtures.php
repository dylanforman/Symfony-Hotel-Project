<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\FoodFactory;

class FoodFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        FoodFactory::createOne([
            'foodName' => 'Burger',
            'price' => 5.99,
            'description' => 'Beef Burger with Cheese',
            'menu' => 'Main'
        ]);

        FoodFactory::createOne([
            'foodName' => 'Chicken Wings',
            'price' => 7.99,
            'description' => 'Chicken Wings with Hot Sauce',
            'menu' => 'Starter'
        ]);

        FoodFactory::createOne([
            'foodName' => 'Chocolate Cake',
            'price' => 4.99,
            'description' => 'Chocolate Cake with Ice Cream',
            'menu' => 'Dessert'
        ]);
    }
}
