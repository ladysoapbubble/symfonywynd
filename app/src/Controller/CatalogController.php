<?php
// src/Controller/CatalogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{

    /**
     * @Route("/catalog/categories", name="app_catalog_categories")
     */
    public function categories()
    {
        $categories = [];
        return $this->json($categories);
    }

    /**
     * @Route("/catalog/products", name="app_catalog_products")
     */
    public function products()
    {
        $products = [];
        return $this->json($products);
    }
}