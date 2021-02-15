<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

    /**
     * @Route("/", name="app_homepage")
     */
    public function index()
    {
        $json = [
          "routes" => [
              "catalog" => [
                  "categories" => [
                      "path" =>"GET /catalog/categories",
                      "description" => "Returns a list of categories"
                  ],
                  "products" => [
                      "path" =>"GET /catalog/products",
                      "description" => "Returns a list of products"
                  ]
              ],
              "user" => [
                  "profile" => [
                      "path" =>"GET /my/profile",
                      "description" => "Returns profile data of authorized user"
                  ],
                  "orders" => [
                      "path" =>"GET /my/orders",
                      "description" => "Returns orders list of authorized user"
                  ]
              ]
          ]
        ];

        $response = new Response();
        $response->setContent(json_encode($json));
        $response->headers->set('Content-Type', 'application/json');


        return $this->json($json);
    }

}