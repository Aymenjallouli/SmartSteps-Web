<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\EvaluationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EvaluationRepository::class)]
class Evaluation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "")]
    private ?string $titre =null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "")]
    private ?\DateTime $dateLimite = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "")]
    private ?int $duree = null;
    
    #[ORM\Column]
    private ?int $nbQuestions = 0;

    #[ORM\OneToMany(targetEntity: Question::class, mappedBy: 'evaluation', cascade: ['persist',"remove"])]
    private Collection $questions;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateLimite(): ?\DateTime
    {
        return $this->dateLimite;
    }

    public function setDateLimite(\DateTime $dateLimite): static
    {
        $this->dateLimite = $dateLimite;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): static
    {
        $this->duree = $duree;

        return $this;
    }

    public function getNbQuestions(): ?int
    {
        return $this->nbQuestions;
    }

    public function setNbQuestions(int $nbQuestions): static
    {
        $this->nbQuestions = $nbQuestions;

        return $this;
    }

    public function getQuestions(): Collection
    {
        return $this->questions;
    }
    public function addQuestion(Question $question): void
    {
        $question->setEvaluation($this);
        $this->questions->add($question);
    }

    public function removeQuestion(Question $question): void
    {
        $this->questions->removeElement($question);
    }
}
