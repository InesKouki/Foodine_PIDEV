<?php

namespace App\Entity;

use App\Repository\ReviewRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ReviewRepository::class)
 */
class Review
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     * @Groups("post:read")
     */
    private $Published_at;

    /**
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $Stars;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $UserName;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPublishedAt(): ?\DateTimeInterface
    {
        return $this->Published_at;
    }

    public function setPublishedAt(\DateTimeInterface $Published_at): self
    {
        $this->Published_at = $Published_at;

        return $this;
    }

    public function getStars(): ?int
    {
        return $this->Stars;
    }

    public function setStars(int $Stars): self
    {
        $this->Stars = $Stars;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->UserName;
    }

    public function setUserName(string $UserName): self
    {
        $this->UserName = $UserName;

        return $this;
    }


}
