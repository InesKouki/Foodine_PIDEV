<?php

namespace App\Entity;

use App\Repository\ProduitLikeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitLikeRepository::class)
 */
class ProduitLike
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="produitLikes")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="produitLikes")
     */
    private $Produit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getProduit(): ?Product
    {
        return $this->Produit;
    }

    public function setProduit(?Product $Produit): self
    {
        $this->Produit = $Produit;

        return $this;
    }
}
