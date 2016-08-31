<?php

namespace Chatter\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CaptureController
 * @package Chatter\AppBundle\Controller
 */
class CaptureController extends Controller
{
    /**
     * @param $eventId
     * @param Request $request
     * @return Response
     */
    public function indexAction($eventId, Request $request)
    {
        $userId = $request->get('userId', false);

        if (false === $userId) {
            return new Response('user id not found', 404);
        }
        return $this->render('ChatterAppBundle:Default:index.html.twig');
    }

    /**
     * @param $userId
     * @param Request $request
     * @return Response
     */
    public function addCreditCardAction($userId, Request $request)
    {
        $vars = ['userId' => $userId];
        return $this->render('ChatterAppBundle:Default:add.html.twig', $vars);
    }
}
