<?php

declare(strict_types=1);

namespace App\Controller;

use App\HttpClient\GetContentInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    #[Route(
        path: '/products',
        name: 'products_list'
    )]
    public function list(
        GetContentInterface $content
    ): JsonResponse
    {
        return new JsonResponse(
            $content->getContent()
        );
    }
}
