<?php

namespace App\Controller;

use App\Entity\AdoptedDog;
use App\Entity\Dog;
use App\Repository\AdoptedDogRepository;
use App\Repository\DogRepository;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DogAdoptedController extends AbstractController
{
    #[Route('/chien/adoptez', name: 'app_dog_adopted')]
    public function index(AdoptedDogRepository $adoptedDogRepository): Response
    {
        return $this->render('DogAdopted/index.html.twig', [
            'controller_name' => 'DogAdoptedController',
            'adoptedDogs'=>$adoptedDogRepository->findBy(['user' => $this->getUser()])
        ]);
    }
    #[Route('/chien/adoptez/{id}', name: 'app_dog_adopt', methods:['GET'])]
    public function create(Dog $dog, AdoptedDogRepository $adoptedDogRepository,  DogRepository $dogRepository)
    {
        $user = $this->getUser();
        $adoptedDog = new AdoptedDog();
        $adoptedDog->setDog($dog);
        $adoptedDog->setUser($user);
        $dog->setAdopted(1);
        $adoptedDogRepository->add($adoptedDog, true);        
        return $this->redirectToRoute('app_dog_adopted');
    }
        
}