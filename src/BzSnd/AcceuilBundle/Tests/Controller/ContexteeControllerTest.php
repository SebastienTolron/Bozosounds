<?php

namespace BzSnd\AcceuilBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContexteeControllerTest extends WebTestCase
{
    public function testMenu()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/menu');
    }

}
