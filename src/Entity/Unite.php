<?php

namespace App\Entity;

use App\Repository\UniteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UniteRepository::class)]
class Unite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le champ Numéro d'unité ne peut pas être vide.")]
    private ?int $Num_unite = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le champ Titre ne peut pas être vide.")]
    #[Assert\Length(max: 255, maxMessage: "Le Titre ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $Titre = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le champ Statut ne peut pas être vide.")]
    #[Assert\Length(max: 255, maxMessage: "Le Statut ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $Statut = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le champ Contenu ne peut pas être vide.")]
    private ?string $Contenu = null;

    #[ORM\ManyToOne(targetEntity: Cour::class, inversedBy: 'unites')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cour $id_Cour = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumUnite(): ?int
    {
        return $this->Num_unite;
    }

    public function setNumUnite(int $Num_unite): self
    {
        $this->Num_unite = $Num_unite;

        return $this;
    }

    public function getTitre(): ?string
    {

        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getStatut(): ?string
    {

        return $this->Statut;
    }

    public function setStatut(string $Statut): self
    {
        $this->Statut = $Statut;

        return $this;
    }

    public function getContenu(): ?string
    {

        return $this->Contenu;
    }

    public function setContenu(string $Contenu): self
    {
        $this->Contenu = $Contenu;

        return $this;
    }

    public function getIdCour(): ?Cour
    {

        return $this->id_Cour;
    }

    public function setIdCour(?Cour $id_Cour): self
    {
        $this->id_Cour = $id_Cour;

        return $this;
    }
}
