<?php

namespace App\Controller\Admin;

use App\Entity\Categories;
use EasyCorp\Bundle\EasyAdminBundle\Controller\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CategoriesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Categories::class;
    }


    public function configureFields(string $pageName): iterable
    {
       
        return [
            IdField::new('id'),
            TextField::new('name'),
            TextEditorField::new('description'),
            ImageField::new('image')->setBasePath ('/assets/uploads/categories/')
                                    ->setUpLoadDir('../../../../../public/assets/uploads/categories/')
           
            // IdField::new('id')->hideOnForm(),
            // TextField::new('name'),
            // TextEditorField::new('description'),
            // TextEditorField::new('more descriptions'),
            // MoneyField::new('price')->setCurrency('CAD'),
            // BooleanField::new('isBestSeller'),
            // BooleanField::new('isNewArrival'),
            // BooleanField::new('isFeatured'),
            // BooleanField::new('isSpecialOffer'),
            // BooleanField::new('category'),
            // ImageField::new('image')->setBasePath('/assets/uploads/categories'),
        ];
    }
    
}
