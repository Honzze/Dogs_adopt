<?php

namespace App\Controller;

use App\Entity\Dog;
use App\Repository\DogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DogController extends AbstractController

{
    #[Route('/chien', name: 'app_dog')]
    public function index(DogRepository $dogrepository): Response
    {
        return $this->render('dog/index.html.twig', [
            'dogs' => $dogrepository->findAll()
        ]);
    }
}
