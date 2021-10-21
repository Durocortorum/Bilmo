<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
  * @ApiResource(
 *     collectionOperations={
 *         "get"={
 *              "access_control"="is_granted('ROLE_USER')",
 *          "normalization_context"={"groups"={"product_read"}}
 *          },
 *         "post"={
 *              "access_control"="is_granted('ROLE_ADMIN')"
 *          }
 *      },
 *     itemOperations={
 *         "get"={
 *              "access_control"="is_granted('ROLE_USER')",
 *              "normalization_context"={"groups"={"product_details_read"}}
 *          }
 *     },
 * )
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"product_details_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"product_read", "product_details_read"})
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"product_read", "product_details_read"})
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"product_read", "product_details_read"})
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     * @Groups({"product_read", "product_details_read"})
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
