<?php

namespace Pais\PaisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PaisBundle:Default:index.html.twig', array('name' => $name));
    }
}
