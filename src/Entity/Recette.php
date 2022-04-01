<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass=RecetteRepository::class)
 */
class Recette
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups ("event")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Entrez le nom du recette ")
     * @Groups ("event")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Entrez le description du votre recette ")
     * @Groups ("event")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255 , nullable="true")
     * @Groups ("event")
     */
    private $imagerecette;

    /**
     * @ORM\ManyToOne(targetEntity=Planning::class, inversedBy="recettes")
     * @Assert\NotBlank(message="choisir le planning ")
     * @ORM\JoinColumn(nullable=false, onDelete="cascade")
     * @Groups ("event")
     */

    private $planningid;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message="Entrez les ingredients de votre recette ")
     * @Groups ("event")
     */
    private $ingredient;

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

    public function getImagerecette(): ?string
    {
        return $this->imagerecette;
    }

    public function setImagerecette(string $imagerecette): self
    {
        $this->imagerecette = $imagerecette;

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

    public function getIngredient(): ?string
    {
        return $this->ingredient;
    }

    public function setIngredient(string $ingredient): self
    {
        $this->ingredient = $ingredient;

        return $this;
    }


}
