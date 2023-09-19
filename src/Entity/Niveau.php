<?php

namespace App\Entity;

use App\Repository\NiveauRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NiveauRepository::class)]
class Niveau
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Support = null;

    #[ORM\Column]
    private ?int $Niveau = null;

    #[ORM\ManyToOne(inversedBy: 'Niveaux')]
    private ?InventaireMembre $Membre = null;

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

    public function getNiveau(): ?int
    {
        return $this->Niveau;
    }

    public function setNiveau(int $Niveau): static
    {
        $this->Niveau = $Niveau;

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
