<?php

namespace App\Controller;

use App\Repository\ActualiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActualityController extends AbstractController
{
    #[Route('/actualite', name: 'app_actuality')]
    public function index(ActualiteRepository $ActualiteRepository): Response
    {
        return $this->render('actuality/index.html.twig', [
            'controller_name' => 'ActualityController',
            'actualites' => $ActualiteRepository->findAll()
        ]);
    }
}
