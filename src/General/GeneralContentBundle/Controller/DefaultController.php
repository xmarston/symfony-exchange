<?php

namespace General\GeneralContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeneralContentBundle:Default:index.html.twig');
    }
}
