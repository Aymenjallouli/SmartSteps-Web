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

    #[ORM\Column]
    private $id_etudiant;

    #[ORM\Column]
    private ?int $note = null;

    #[ORM\Column]
    private $id_evaluation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEtudiant(): ?int
    {
        return $this->id_etudiant;
    }

    public function setIdEtudiant(int $idEtudiant): static
    {
        $this->id_etudiant = $idEtudiant;

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
        return $this->id_evaluation;
    }

    public function setIdEvaluation(?int $idEvaluation): static
    {
        $this->id_evaluation = $idEvaluation;

        return $this;
    }


}
