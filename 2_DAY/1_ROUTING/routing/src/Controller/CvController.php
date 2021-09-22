<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CvController extends AbstractController
{
    /**
     * @Route("/cv", methods={"GET", "POST"}, name="cv")
     */
    public function index(Request $request, LoggerInterface $logger): Response
    {

        if($request->getMethod() === 'POST') {
            $logger->info("Cześć jestem postem!!!");
        }

        $res = new Response();
        $res->headers->setCookie(Cookie::create("test", "test"));

        return $this->render('cv/index.html.twig', [
            'controller_name' => 'CvController',
        ], $res);
    }
}
