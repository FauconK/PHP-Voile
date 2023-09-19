<?php

namespace App\Entity;

use App\Repository\ExperienceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExperienceRepository::class)]
class Experience
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Support = null;

    #[ORM\ManyToOne(inversedBy: 'Experiences')]
    private ?InventaireMembre $Membre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getSupport(): ?string
    {
        return $this->Support;
    }

    public function setSupport(?string $Support): static
    {
        $this->Support = $Support;

        return $this;
    }

    public function getMembre(): ?InventaireMembre
    {
        return $this->Membre;
    }

    public function setMembre(?InventaireMembre $Membre): static
    {
        $this->Membre = $Membre;

        return $this;
    }
}
