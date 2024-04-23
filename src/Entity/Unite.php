<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Unite
 *
 * @ORM\Table(name="unite", indexes={@ORM\Index(name="id_cour", columns={"id_cour"})})
 * @ORM\Entity
 */
class Unite
{
    /**
     * @var int
     *
     * @ORM\Column(name="num_unite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numUnite;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Statut", type="string", length=11, nullable=false)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="string", length=255, nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepot", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $datedepot = 'CURRENT_TIMESTAMP';

    /**
     * @var \Cour
     *
     * @ORM\ManyToOne(targetEntity="Cour")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cour", referencedColumnName="id_cour")
     * })
     */
    private $idCour;

    public function getNumUnite(): ?int
    {
        return $this->numUnite;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDatedepot(): ?\DateTimeInterface
    {
        return $this->datedepot;
    }

    public function setDatedepot(\DateTimeInterface $datedepot): static
    {
        $this->datedepot = $datedepot;

        return $this;
    }

    public function getIdCour(): ?Cour
    {
        return $this->idCour;
    }

    public function setIdCour(?Cour $idCour): static
    {
        $this->idCour = $idCour;

        return $this;
    }


}
