<?php

namespace App\Controller\Admin;

use App\Entity\BoxBook;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BoxBookCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BoxBook::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('city'),
            TextField::new('sreet'),
            IntegerField::new('zipcode'),
            //IntegerField::new('capacity'),
            
        ];
    }
    
}
