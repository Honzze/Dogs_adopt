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

            yield  MenuItem::linkToRoute('Logout', 'fa-solid fa-right-to-bracket mr-2 fa-beat-fade', 'app_home'),
            
            yield MenuItem::section('Dog'),
            yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
                MenuItem::linkToCrud('Show dog', 'fa-solid fa-eye fa-bounce', Dog::class)
            ]),
            

            yield MenuItem::section('Actualite'),
            yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
                MenuItem::linkToCrud('Show Actualite', 'fa-solid fa-eye fa-bounce', Actualite::class)
                
            ]),

            
            yield MenuItem::section('User'),
            yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
                MenuItem::linkToCrud('Show User', 'fa-solid fa-eye fa-bounce', User::class)
            ]),

                        
            yield MenuItem::section('AdoptedDog'),
            yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
                MenuItem::linkToCrud('Show AdoptedDog', 'fa-solid fa-eye fa-bounce', AdoptedDog::class)
            ]),
        ];
        
    }

}
