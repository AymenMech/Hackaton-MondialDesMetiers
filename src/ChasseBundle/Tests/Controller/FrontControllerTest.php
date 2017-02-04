<?php

namespace ChasseBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FrontControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

    public function testHowto()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/howto');
    }

    public function testLegalmention()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/legalmention');
    }

    public function testInscript()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/inscript');
    }

}
