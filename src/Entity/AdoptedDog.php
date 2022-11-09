<?php

namespace App\Entity;

use App\Repository\AdoptedDogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdoptedDogRepository::class)]
class AdoptedDog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'Dog')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[ORM\OneToOne(inversedBy: 'adoptedDog', targetEntity: Dog::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $Dog;

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

    public function getDog(): ?Dog
    {
        return $this->Dog;
    }

    public function setDog(Dog $Dog): self
    {
        $this->Dog = $Dog;
        return $this;
    }
}
