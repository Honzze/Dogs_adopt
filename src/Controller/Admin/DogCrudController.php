<?php

namespace App\Controller\Admin;

use App\Entity\Dog;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DogCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dog::class;
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
