<?php

namespace App\Entity;

use App\Repository\MembreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MembreRepository::class)]
class Membre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Prenom = null;

    #[ORM\OneToMany(mappedBy: 'Membre', targetEntity: Niveau::class)]
    private Collection $Niveaux;

    #[ORM\OneToMany(mappedBy: 'Membre', targetEntity: Experience::class)]
    private Collection $Experiences;

    #[ORM\OneToMany(mappedBy: 'Membre', targetEntity: Projet::class)]
    private Collection $Projets;

    #[ORM\OneToMany(mappedBy: 'Membre', targetEntity: Objectif::class)]
    private Collection $Objectifs;

    public function __construct()
    {
        $this->Niveaux = new ArrayCollection();
        $this->Experiences = new ArrayCollection();
        $this->Projets = new ArrayCollection();
        $this->Objectifs = new ArrayCollection();
    }

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

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    /**
     * @return Collection<int, Niveau>
     */
    public function getNiveaux(): Collection
    {
        return $this->Niveaux;
    }

    public function addNiveau(Niveau $niveau): static
    {
        if (!$this->Niveaux->contains($niveau)) {
            $this->Niveaux->add($niveau);
            $niveau->setMembre($this);
        }

        return $this;
    }

    public function removeNiveau(Niveau $niveau): static
    {
        if ($this->Niveaux->removeElement($niveau)) {
            // set the owning side to null (unless already changed)
            if ($niveau->getMembre() === $this) {
                $niveau->setMembre(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Experience>
     */
    public function getExperiences(): Collection
    {
        return $this->Experiences;
    }

    public function addExperience(Experience $experience): static
    {
        if (!$this->Experiences->contains($experience)) {
            $this->Experiences->add($experience);
            $experience->setMembre($this);
        }

        return $this;
    }

    public function removeExperience(Experience $experience): static
    {
        if ($this->Experiences->removeElement($experience)) {
            // set the owning side to null (unless already changed)
            if ($experience->getMembre() === $this) {
                $experience->setMembre(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Projet>
     */
    public function getProjets(): Collection
    {
        return $this->Projets;
    }

    public function addProjet(Projet $projet): static
    {
        if (!$this->Projets->contains($projet)) {
            $this->Projets->add($projet);
            $projet->setMembre($this);
        }

        return $this;
    }

    public function removeProjet(Projet $projet): static
    {
        if ($this->Projets->removeElement($projet)) {
            // set the owning side to null (unless already changed)
            if ($projet->getMembre() === $this) {
                $projet->setMembre(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Objectif>
     */
    public function getObjectifs(): Collection
    {
        return $this->Objectifs;
    }

    public function addObjectif(Objectif $objectif): static
    {
        if (!$this->Objectifs->contains($objectif)) {
            $this->Objectifs->add($objectif);
            $objectif->setMembre($this);
        }

        return $this;
    }

    public function removeObjectif(Objectif $objectif): static
    {
        if ($this->Objectifs->removeElement($objectif)) {
            // set the owning side to null (unless already changed)
            if ($objectif->getMembre() === $this) {
                $objectif->setMembre(null);
            }
        }

        return $this;
    }
}
