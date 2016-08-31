<?php

namespace Chatter\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ChatterAppBundle:Default:index.html.twig');
    }
}
