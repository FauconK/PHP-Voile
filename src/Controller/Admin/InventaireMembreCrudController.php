<?php

namespace App\Controller\Admin;

use App\Entity\InventaireMembre;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InventaireMembreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InventaireMembre::class;
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
