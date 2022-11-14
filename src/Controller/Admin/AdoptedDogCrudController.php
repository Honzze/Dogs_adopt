<?php

namespace App\Controller\Admin;

use App\Entity\AdoptedDog;
use App\Entity\Dog;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AdoptedDogCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AdoptedDog::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
