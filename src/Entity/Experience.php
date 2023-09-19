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
    private ?string $Support = null;

    #[ORM\Column(length: 1500, nullable: true)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $Date = null;

    #[ORM\ManyToOne(inversedBy: 'Experiences')]
    private ?Membre $Membre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSupport(): ?string
    {
        return $this->Support;
    }

    public function setSupport(string $Support): static
    {
        $this->Support = $Support;

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

    public function getDate(): ?string
    {
        return $this->Date;
    }

    public function setDate(string $Date): static
    {
        $this->Date = $Date;

        return $this;
    }

    public function getMembre(): ?Membre
    {
        return $this->Membre;
    }

    public function setMembre(?Membre $Membre): static
    {
        $this->Membre = $Membre;

        return $this;
    }
}
