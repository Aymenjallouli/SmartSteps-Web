<?php

namespace App\Entity;

use App\Repository\CourRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CourRepository::class)]
class Cour
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_cour")]
    private ?int $id = null;

    #[ORM\Column(length: 255, name: "Matiere")]
    #[Assert\NotBlank(message: "Le champ Matiere ne doit pas être vide.")]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z\s]+$/",
        message: "Le champ Matiere ne doit contenir que des lettres et des espaces."
    )]
    private ?string $matiere = null;

    #[ORM\Column(type: 'datetime', name: "Date_Debut")]
    #[Assert\NotBlank(message: "Veuillez sélectionner une date de début.")]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: 'datetime', name: "Date_Fin")]
    #[Assert\NotBlank(message: "Veuillez sélectionner une date de fin.")]
    #[Assert\GreaterThan(
        propertyPath: "dateDebut",
        message: "La date de fin doit être postérieure à la date de début."
    )]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\OneToMany(mappedBy: 'id_cour', targetEntity: Unite::class)]
    private Collection $unites;

    public function __construct()
    {
        $this->unites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatiere(): ?string
    {
        return $this->matiere;
    }

    public function setMatiere(string $matiere): self
    {
        $this->matiere = $matiere;
        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;
        return $this;
    }
        /**
     * @return Collection<int, Unite>
     */
    public function getUnites(): Collection
    {
        return $this->unites;
    }
    public function addUnite(Unite $unite): self
    {
        if (!$this->unites->contains($unite)) {
            $this->unites->add($unite);
            $unite->setIdCour($this);
        }
        return $this;
    }
   
    public function __toString(): string
    {
        if ($this->unites === null) {
            return '';
        }
        return $this->getMatiere(); // ou toute autre propriété que vous souhaitez utiliser comme représentation
    }

   
    public function removeUnite(Unite $unite): static
    {
        if ($this->unites->removeElement($unite)) {
            // set the owning side to null (unless already changed)
            if ($unite->getIdCour() === $this) {
                $unite->setIdCour(null);
            }
        }
        return $this;
    }
 
}
