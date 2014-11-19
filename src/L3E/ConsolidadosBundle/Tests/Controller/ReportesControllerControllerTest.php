<?php

namespace L3E\ConsolidadosBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReportesControllerControllerTest extends WebTestCase
{
    public function testListarcursos()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listarcursos');
    }

    public function testFiltrarcolegios()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/filtrarcolegios');
    }

}
