<?php

namespace App\Entity;

use App\Repository\DogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DogRepository::class)]
class Dog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $sexe;

    #[ORM\Column(type: 'string', length: 255)]
    private $breed;

    #[ORM\Column(type: 'date')]
    private $date_of_birth;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $image;

    #[ORM\OneToOne(mappedBy: 'Dog', targetEntity: AdoptedDog::class, cascade: ['persist', 'remove'])]
    private $adoptedDog;

    #[ORM\Column(type: 'boolean')]
    private $adopted;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getBreed(): ?string
    {
        return $this->breed;
    }

    public function setBreed(string $breed): self
    {
        $this->breed = $breed;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->date_of_birth;
    }

    public function setDateOfBirth(\DateTimeInterface $date_of_birth): self
    {
        $this->date_of_birth = $date_of_birth;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getAdoptedDog(): ?AdoptedDog
    {
        return $this->adoptedDog;
    }

    public function setAdoptedDog(AdoptedDog $adoptedDog): self
    {
        // set the owning side of the relation if necessary
        if ($adoptedDog->getDog() !== $this) {
            $adoptedDog->setDog($this);
        }

        $this->adoptedDog = $adoptedDog;

        return $this;
    }

    public function isAdopted(): ?bool
    {
        return $this->adopted;
    }

    public function setAdopted(bool $adopted): self
    {
        $this->adopted = $adopted;

        return $this;
    }
}
