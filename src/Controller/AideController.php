<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AideController extends AbstractController
{
    #[Route('/aide', name: 'app_aide')]
    public function index(): Response
    {
        return $this->render('aide/index.html.twig', [
            'controller_name' => 'AideController',
        ]);
    }
}
