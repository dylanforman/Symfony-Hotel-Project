<?php

namespace App\Tests;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;


class UserCrudTest extends WebTestCase
{
    public function testRoleAdminCanSeeUserList(): void
    {
        //Arrange
        $method = 'GET';
        $url = '/user';
        $username = 'admin123';
        $okay200Code = Response::HTTP_OK;

        //create client that follows redirects
        $client = static::createClient();
        $client->followRedirects();

        //Login user
        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneByUsername($username);
        $client->loginUser($testUser);

        //Act
        $crawler = $client->request($method, $url);

        //Assert
        $this->assertResponseIsSuccessful();
        $responseCode = $client->getResponse()->getStatusCode();
        $this->assertSame($okay200Code, $responseCode);

        $expectedText = 'User Index';
        $contentSelector = 'body h1';
        $this->assertSelectorTextContains($contentSelector, $expectedText);
    }
}
