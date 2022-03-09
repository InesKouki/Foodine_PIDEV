<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"Username"},message="Username déjà existant !")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Type(type={"alpha", "digit"}, message="Votre nom doit contenir seulement des lettres alphabétiques")
     */

    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Type(type={"alpha", "digit"},message="Votre prénom doit contenir seulement des lettres alphabétiques" )
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message=" Email n'est pas valide")
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $Roles = [];

    /**
     * @ORM\Column(type="string", length=255)
     *@Assert\Length(
     * min = 8,
     * minMessage = "Votre mot de passe doit contenir au moins 8 caracteres",
     * allowEmptyString = false)
     */
    private $Password;

    /**
     * @Assert\EqualTo(propertyPath ="Password",message="Vous n'avez pas saisi le même mot de passe." )
     */

    private $confirm_password;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $file;
    /**
     * @ORM\Column(type="datetime")
     */
    private $Created_at;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $activation_token;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Address;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $reset_token;

    /**
     * @ORM\Column(type="integer")
     */
    private $Etat=0;

    /**
     * @ORM\OneToMany(targetEntity=ProduitLike::class, mappedBy="user")
     */
    private $produitLikes;

    public function __construct()
    {
        $this->reclamations = new ArrayCollection();
        $this->reviews = new ArrayCollection();
        $this->produitLikes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

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

    public function getRoles(): ?array
    {
        $roles = $this->Roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    public function setRoles(array $Roles): self
    {
        $this->Roles = $Roles;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConfirmPassword()
    {
        return $this->confirm_password;
    }

    /**
     * @param mixed $confirm_password
     */
    public function setConfirmPassword($confirm_password): void
    {
        $this->confirm_password = $confirm_password;
    }
    public function eraseCredentials() {}
    public function getSalt() {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->Created_at;
    }

    public function setCreatedAt(\DateTimeInterface $Created_at): self
    {
        $this->Created_at = $Created_at;

        return $this;
    }

    public function getActivationToken(): ?string
    {
        return $this->activation_token;
    }

    public function setActivationToken(?string $activation_token): self
    {
        $this->activation_token = $activation_token;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(?string $Address): self
    {
        $this->Address = $Address;

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
            $produitLike->setUser($this);
        }

        return $this;
    }

    public function removeProduitLike(ProduitLike $produitLike): self
    {
        if ($this->produitLikes->removeElement($produitLike)) {
            // set the owning side to null (unless already changed)
            if ($produitLike->getUser() === $this) {
                $produitLike->setUser(null);
            }
        }

        return $this;
    }

}
