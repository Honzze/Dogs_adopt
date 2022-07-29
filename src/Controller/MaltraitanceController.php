<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaltraitanceController extends AbstractController
{
    #[Route('/maltraitance', name: 'app_maltraitance')]
    public function index(): Response
    {
        return $this->render('maltraitance/index.html.twig', [
            'controller_name' => 'MaltraitanceController',
        ]);
    }
}
