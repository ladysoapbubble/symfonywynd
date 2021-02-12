<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class UserController extends AbstractController
{
    /**
     * @Route("/my/orders", name="app_user_orders")
     */
    public function orders()
    {
        $orders = [];

        return $this->json($orders);
    }

    /**
     * @Route("/my/profile", name="app_user_profile")
     */
    public function profile()
    {
        $user = $this->getUser();
        $json = [
            "username" => $user->getUsername()
        ];


         return $this->json($json);
    }

}