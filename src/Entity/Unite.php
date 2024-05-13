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
    #[ORM\Column(name: "id", type: "integer")]
    private ?int $id = null;

    #[ORM\Column(name: "num_unite", type: "integer")]
    private ?int $NumUnite = null;

    #[ORM\Column(length: 255, name: "Titre")]
    #[Assert\NotBlank(message: "Le champ Titre ne peut pas être vide.")]
    private ?string $Titre = null;

    #[ORM\Column(length: 11, name: "Statut")]
    #[Assert\NotBlank(message: "Le champ Statut ne peut pas être vide.")]
    private ?string $Statut = null;

    #[ORM\Column(length: 255, name: "Contenu")]
    #[Assert\NotBlank(message: "Le champ Contenu ne peut pas être vide.")]
    private ?string $Contenu = null;

    #[ORM\Column(name: "dateDepot", type: "datetime", options: ["default" => "CURRENT_TIMESTAMP"])]
    private ?\DateTimeInterface $dateDepot = null;

    #[ORM\ManyToOne(targetEntity: Cour::class, inversedBy: 'unites')]
    #[ORM\JoinColumn(name: "id_cour", referencedColumnName: "id_cour", nullable: false)]
    private ?Cour $id_cour = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumUnite(): ?int
    {
        return $this->NumUnite;
    }

    public function setNumUnite(int $NumUnite): self
    {
        $this->NumUnite = $NumUnite;
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

    public function getDateDepot(): ?\DateTimeInterface
    {
        return $this->dateDepot;
    }

    public function setDateDepot(\DateTimeInterface $dateDepot): self
    {
        $this->dateDepot = $dateDepot;
        return $this;
    }

    public function getIdCour(): ?Cour
    {
        return $this->id_cour;
    }

    public function setIdCour(?Cour $id_cour): self
    {
        $this->id_cour = $id_cour;
        return $this;
    }
}
