<?php

namespace App\Controller\Admin;

use App\Entity\Dog;
use App\Entity\Actualite;
use App\Entity\User;
use App\Entity\AdoptedDog;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    public function __construct(
        private AdminUrlGenerator $adminUrlGenerator
    )
    {
    }
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator->setController(DogCrudController::class)
        ->generateUrl();

        return $this->redirect($url);

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Website Skeleton');
    }

    public function configureMenuItems(): iterable
    {
        return [
            yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            
            yield MenuItem::section('Dog'),
            yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
                MenuItem::linkToCrud('Add dog', 'fas fa-plus', Dog::class)
            ]),
            

            yield MenuItem::section('Actualite'),
            yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
                MenuItem::linkToCrud('Add Actualite', 'fas fa-plus', Actualite::class)
                
            ]),

            
            yield MenuItem::section('User'),
            yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
                MenuItem::linkToCrud('Add User', 'fas fa-plus', User::class)
            ]),

                        
            yield MenuItem::section('AdoptedDog'),
            yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
                MenuItem::linkToCrud('Add AdoptedDog', 'fas fa-plus', Dog::class, User::class, AdoptedDog::class)
            ]),
        ];
        
    }

}
