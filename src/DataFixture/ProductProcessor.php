<?php

declare(strict_types=1);

namespace App\DataFixture;

use App\Entity\Product;
//use Doctrine\ORM\EntityManagerInterface;
use Fidry\AliceDataFixtures\ProcessorInterface;

class ProductProcessor implements ProcessorInterface
{

    public function __construct(
        //private EntityManagerInterface $entityManager
    )
    {
    }

    public function preProcess(string $id, object $object): void
    {
        if (!$object instanceof Product) {
            return;
        }

        $idParts = explode('_', $id);
        if (isset($idParts[1]) && 0 !== (int) $idParts[1]) {
            $object->setSku($idParts[1]);
        }
    }

    public function postProcess(string $id, object $object): void
    {
    }
}
