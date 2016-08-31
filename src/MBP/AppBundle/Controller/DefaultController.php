<?php

namespace MBP\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 * @package MBP\AppBundle\Controller
 */
class DefaultController extends Controller
{
    public function indexAction()
    {
     return new Response('');
    }
}
