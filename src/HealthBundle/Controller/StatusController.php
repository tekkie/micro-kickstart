<?php

namespace HealthBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class StatusController extends Controller
{
    /**
     * @Route("/status", name="status")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return new JsonResponse(["test" => "positive"]);
    }
}
