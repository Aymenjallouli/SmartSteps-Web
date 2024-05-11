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
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le champ Matiere ne doit pas être vide.")]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z\s]+$/",
        message: "Le champ Matiere ne doit contenir que des lettres et des espaces."
    )]
    private ?string $Matiere = null;

    #[ORM\Column(type: 'datetime')]
    #[Assert\NotBlank(message: "Veuillez sélectionner une date de début.")]
    private ?\DateTimeInterface $Date_Debut = null;

    #[ORM\Column(type: 'datetime')]
    #[Assert\NotBlank(message: "Veuillez sélectionner une date de fin.")]
    #[Assert\GreaterThan(
        propertyPath: "Date_Debut",
        message: "La date de fin doit être postérieure à la date de début."
    )]
    private ?\DateTimeInterface $Date_Fin = null;

    #[ORM\OneToMany(mappedBy: 'id_Cour', targetEntity: Unite::class)]
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

        return $this->Matiere;
    }

    public function setMatiere(string $Matiere): static
    {
        $this->Matiere = $Matiere;
        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {

        return $this->Date_Debut;
    }

    public function setDateDebut(\DateTimeInterface $Date_Debut): static
    {
        $this->Date_Debut = $Date_Debut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {

        return $this->Date_Fin;
    }

    public function setDateFin(\DateTimeInterface $Date_Fin): static
    {
        $this->Date_Fin = $Date_Fin;
        return $this;
    }

    /**
     * @return Collection<int, Unite>
     */
    public function getUnites(): Collection
    {
        return $this->unites;
    }

    public function addUnite(Unite $unite): static
    {
        if (!$this->unites->contains($unite)) {
            $this->unites->add($unite);
            $unite->setIdCour($this);
        }
        return $this;
    }

    public function __toString(): string
    {
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
