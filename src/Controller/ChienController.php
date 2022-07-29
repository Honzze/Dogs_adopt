<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChienController extends AbstractController
{
    #[Route('/chien', name: 'app_chien')]
    public function index(): Response
    {
        return $this->render('chien/index.html.twig', [
            'controller_name' => 'ChienController',
        ]);
    }
}
