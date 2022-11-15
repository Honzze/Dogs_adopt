<?php

namespace App\Controller\Admin;

use App\Entity\Dog;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DogCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dog::class;
    }

  
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('description'),
            TextField::new('image'),
            BooleanField::new('Adopted')->renderAsSwitch(false),
            DateField::new('date_of_birth'),
            ChoiceField::new('breed')->setChoices([
                // $value => $badgeStyleName
                'chiwawa' => 'Chiwawa',
                'Booldog' => 'Booldog',
                'chien' => 'chien',
            ]),
            ChoiceField::new('sexe')->setChoices([
                // $value => $badgeStyleName
                'males' => 1,
                'femelles' => 0,
            ])
        ];
    }
 
}
