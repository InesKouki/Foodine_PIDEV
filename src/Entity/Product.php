<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert ;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("events")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Merci de saisir le nom")
     * @Groups("events")
     */
    private $name;

    /**

     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank(message="Merci d'enter la quantité")
     * @Groups("events")
     */
    private $quantitie;

    /**
     * @ORM\Column(type="float", length=50, nullable=false)
     * @Assert\NotBlank(message="Merci de saisir le prix")
     * @Groups("events")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="products")

     */
    private $category;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     * @Groups("events")
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=ProduitLike::class, mappedBy="Produit")
     */
    private $produitLikes;

    /**
     * @ORM\OneToMany(targetEntity=Promotion::class, mappedBy="produit")
     */
    private $promotion;

    public function __construct()
    {
        $this->produitLikes = new ArrayCollection();
        $this->promotion = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getQuantitie(): ?int
    {
        return $this->quantitie;
    }

    public function setQuantitie(?int $quantitie): self
    {
        $this->quantitie = $quantitie;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, ProduitLike>
     */
    public function getProduitLikes(): Collection
    {
        return $this->produitLikes;
    }

    public function addProduitLike(ProduitLike $produitLike): self
    {
        if (!$this->produitLikes->contains($produitLike)) {
            $this->produitLikes[] = $produitLike;
            $produitLike->setProduit($this);
        }

        return $this;
    }

    public function removeProduitLike(ProduitLike $produitLike): self
    {
        if ($this->produitLikes->removeElement($produitLike)) {
            // set the owning side to null (unless already changed)
            if ($produitLike->getProduit() === $this) {
                $produitLike->setProduit(null);
            }
        }

        return $this;
    }

    /**
     * @param \App\Entity\User $user
     * @return bool
     */
    public function isLiked(User $user): bool

    {
        foreach ($this->produitLikes as $like){
            if($like->getUser()=== $user)return true;
        }
        return false;
    }

    /**
     * @return Collection|Promotion[]
     */
    public function getPromotion(): Collection
    {
        return $this->promotion;
    }

    public function addPromotion(Promotion $promotion): self
    {
        if (!$this->promotion->contains($promotion)) {
            $this->promotion[] = $promotion;
            $promotion->setProduit($this);
        }

        return $this;
    }

    public function removePromotion(Promotion $promotion): self
    {
        if ($this->promotion->removeElement($promotion)) {
            // set the owning side to null (unless already changed)
            if ($promotion->getProduit() === $this) {
                $promotion->setProduit(null);
            }
        }

        return $this;
    }
}
