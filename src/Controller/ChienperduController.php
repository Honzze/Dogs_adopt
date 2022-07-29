<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChienperduController extends AbstractController
{
    #[Route('/chienperdu', name: 'app_chienperdu')]
    public function index(): Response
    {
        return $this->render('chienperdu/index.html.twig', [
            'controller_name' => 'ChienperduController',
        ]);
    }
}
