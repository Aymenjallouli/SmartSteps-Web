<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NoteRepository::class)]
class Note
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    private $idEtudiant;

    #[ORM\Column]
    private ?int $note = null;
    
    #[ORM\ManyToOne(targetEntity: Evaluation::class)]
    private $idEvaluation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEtudiant(): ?int
    {
        return $this->idEtudiant;
    }

    public function setIdEtudiant(int $idEtudiant): static
    {
        $this->idEtudiant = $idEtudiant;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function getIdEvaluation(): ?int
    {
        return $this->idEvaluation;
    }

    public function setIdEvaluation(?int $idEvaluation): static
    {
        $this->idEvaluation = $idEvaluation;

        return $this;
    }


}
