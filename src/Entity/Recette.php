<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecetteRepository::class)
 */
class Recette
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;


    /**
     * @ORM\ManyToOne(targetEntity=Planning::class, inversedBy="recettes")
     */
    private $planningid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ImageRecette;

    /**
     * @ORM\Column(type="array")
     */
    private $ingredients = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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

    public function getIngredients(): ?string
    {
        return $this->ingredients;
    }

    public function setIngredients(string $ingredients): self
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    public function getPlanningid(): ?Planning
    {
        return $this->planningid;
    }

    public function setPlanningid(?Planning $planningid): self
    {
        $this->planningid = $planningid;

        return $this;
    }

    public function getImageRecette(): ?string
    {
        return $this->ImageRecette;
    }

    public function setImageRecette(string $ImageRecette): self
    {
        $this->ImageRecette = $ImageRecette;

        return $this;
    }
}
