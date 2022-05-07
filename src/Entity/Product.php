<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(
    name: "product"
), ORM\Entity(
    repositoryClass: ProductRepository::class
), ORM\Index(

)]
class Product
{
    #[ORM\Id(
    ), ORM\GeneratedValue(
    ), ORM\Column(
        type: "integer"
    )]
    private int $id;

    #[ORM\Column(
        type: "string",
        length: 5,
        nullable: false
    )]
    private string $sku = '';

    #[ORM\Column(
        type: "string",
        nullable: false
    )]
    private string $name;

    #[ORM\Column(
        type: "string",
        nullable: false
    )]
    private string $category;

    #[ORM\Column(
        type: "integer",
        nullable: false
    )]
    private int $price;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function setSku(string $sku): void
    {
        $this->sku = sprintf('%05d', $sku);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
}
