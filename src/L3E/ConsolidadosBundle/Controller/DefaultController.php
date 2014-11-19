<?php

namespace L3E\ConsolidadosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('L3EConsolidadosBundle:Default:index.html.twig', array('name' => $name));
    }
}
