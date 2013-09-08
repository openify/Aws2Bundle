<?php

namespace Openify\Bundle\Aws2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OpenifyAws2Bundle:Default:index.html.twig', array('name' => $name));
    }
}
