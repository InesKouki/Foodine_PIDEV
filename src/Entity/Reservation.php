<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Remplir le champ")
     */
    private $nom;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotNull(message="Remplir le champ")
     */
    private $datereservation;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Remplir le champ")
     * @Assert\Length(min = 8, max = 8, minMessage = "min_lenght", maxMessage = "max_lenght")
     * @Assert\Regex(pattern="/^[0-9]*$/", message="number_only")
     */
    private $mobile;

    /**
     * @ORM\ManyToOne(targetEntity=Table::class, inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false, onDelete="cascade")
     * @Assert\NotBlank(message="Remplir le champ")
     */
    private $tableid;

    /**
     * @Assert\Email(
     *     message = "mmm.kkk@hhh.ccc"
     * )
     * @Assert\NotBlank(message="Remplir le champ")
     * @ORM\Column(type="string", length=255)
     */
    private $email;

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

    public function getDatereservation(): ?\DateTimeInterface
    {
        return $this->datereservation;
    }

    public function setDatereservation(\DateTimeInterface $datereservation=null): self
    {
        $this->datereservation = $datereservation;

        return $this;
    }

    public function getMobile(): ?int
    {
        return $this->mobile;
    }

    public function setMobile(int $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getTableid(): ?Table
    {
        return $this->tableid;
    }

    public function setTableid(?Table $tableid): self
    {
        $this->tableid = $tableid;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
