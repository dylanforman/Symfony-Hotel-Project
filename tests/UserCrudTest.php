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

    public function testRoleRecepCanSeeRoomList(): void
    {
        //Arrange
        $method = 'GET';
        $url = '/room';
        $username = 'recep123';
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

        $expectedText = 'Room Index';
        $contentSelector = 'body h1';
        $this->assertSelectorTextContains($contentSelector, $expectedText);
    }

    public function testRoleChefCanSeeFoodList(): void
    {
        //Arrange
        $method = 'GET';
        $url = '/menu';
        $username = 'chef123';
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

        $expectedText = 'Menu Index';
        $contentSelector = 'body h1';
        $this->assertSelectorTextContains($contentSelector, $expectedText);
    }

    public function testRoleGuestCanNotSeeUserList() {
        // Arrange
        $method = 'GET';
        $url = '/user';
        $userName = 'guest123';
        $accessDeniedResponseCode403 = Response::HTTP_FORBIDDEN;

        // create client that automatically follow re-directs
        $client = static::createClient();
        $client->followRedirects();

        // login user
        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneByUsername($userName);
        $client->loginUser($testUser);

        // Act
        $crawler = $client->request($method, $url);

        // Assert
        $responseCode = $client->getResponse()->getStatusCode();
        $this->assertSame($accessDeniedResponseCode403, $responseCode);

    }

    public function testRoleChefCanNotSeeRoomList() {
        // Arrange
        $method = 'GET';
        $url = '/room';
        $userName = 'chef123';
        $accessDeniedResponseCode403 = Response::HTTP_FORBIDDEN;

        // create client that automatically follow re-directs
        $client = static::createClient();
        $client->followRedirects();

        // login user
        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneByUsername($userName);
        $client->loginUser($testUser);

        // Act
        $crawler = $client->request($method, $url);

        // Assert
        $responseCode = $client->getResponse()->getStatusCode();
        $this->assertSame($accessDeniedResponseCode403, $responseCode);

    }

    public function testRoleRecepCanNotSeeFoodList() {
        // Arrange
        $method = 'GET';
        $url = '/menu';
        $userName = 'recep123';
        $accessDeniedResponseCode403 = Response::HTTP_FORBIDDEN;

        // create client that automatically follow re-directs
        $client = static::createClient();
        $client->followRedirects();

        // login user
        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneByUsername($userName);
        $client->loginUser($testUser);

        // Act
        $crawler = $client->request($method, $url);

        // Assert
        $responseCode = $client->getResponse()->getStatusCode();
        $this->assertSame($accessDeniedResponseCode403, $responseCode);

    }
}
