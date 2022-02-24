<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReponseRepository::class)
 */
class Reponse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $Message;

    /**
     * @ORM\OneToOne(targetEntity=Reclamation::class, cascade={"persist", "remove"})
     */
    private $recla;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->Message;
    }

    public function setMessage(string $Message): self
    {
        $this->Message = $Message;

        return $this;
    }

    public function getRecla(): ?Reclamation
    {
        return $this->recla;
    }

    public function setRecla(?Reclamation $recla): self
    {
        $this->recla = $recla;

        return $this;
    }
}
