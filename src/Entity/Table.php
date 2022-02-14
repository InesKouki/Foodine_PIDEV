<?php

namespace App\Entity;

use App\Repository\TableRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TableRepository::class)
 * @ORM\Table(name="`table`")
 */
class Table
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numerotable;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagetable;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbplacetable;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumerotable(): ?int
    {
        return $this->numerotable;
    }

    public function setNumerotable(int $numerotable): self
    {
        $this->numerotable = $numerotable;

        return $this;
    }

    public function getImagetable(): ?string
    {
        return $this->imagetable;
    }

    public function setImagetable(string $imagetable): self
    {
        $this->imagetable = $imagetable;

        return $this;
    }

    public function getNbplacetable(): ?int
    {
        return $this->nbplacetable;
    }

    public function setNbplacetable(int $nbplacetable): self
    {
        $this->nbplacetable = $nbplacetable;

        return $this;
    }
}
