<?php

namespace App\Entity;

use App\Repository\TableRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

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
     * @Groups("table")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Remplir le champ")
     * @Groups("table")
     */
    private $numerotable;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("table")
     */
    private $imagetable;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Remplir le champ")
     * @Assert\Positive (  message="entrer un nombre positive")
     * @Groups("table")
     */
    private $nbplacetable;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="tableid")

     */
    private $reservations;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("table")
     */
    private $etat;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

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

    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setTableid($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getTableid() === $this) {
                $reservation->setTableid(null);
            }
        }

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
}
