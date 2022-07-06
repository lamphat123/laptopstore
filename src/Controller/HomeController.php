<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(ProductRepository $repo): Response
    {
        $product = $repo->findAll();
        return $this->render('View/content.html.twig',[
            'product'=> $product
        ]);
    }
}
