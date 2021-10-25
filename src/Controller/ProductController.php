<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/product")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="product_index")
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findBy(["visible"=> true], ["created_at"=> "DESC"]),    // comme findAll mais permet d'afficher dans l'ordre chrono
        ]);
    }

    /**
     * @Route("/{id}", name="longDescription")
     */
    public function one($id, ProductRepository $productRepository)
    {
        return $this->render('product/show.html.twig', [
            'product'=> $productRepository->find($id)
        ]);
    }
}
