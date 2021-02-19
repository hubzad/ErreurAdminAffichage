<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\Field\TextEditorField;



use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            TextEditorField::new('description'),
            TextEditorField::new('more descriptions'),
            MoneyField::new('price')->setCurrency('USD'),
            BooleanField::new('isBestSeller'),
            BooleanField::new('isNewArrival'),
            BooleanField::new('isFeatured'),
            BooleanField::new('isSpecialOffer'),
            AssociationField::new('category'),
            ImageField::new('image')->setBasePath('/assets/uploads/products')
                                    ->setUploadDir('../../../../../public/assets/uploads/products')
            
            

        ];
    }
    
}
