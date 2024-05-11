<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use App\Repository\ForumRepository;

use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ForumRepository::class)]
class Forum
{
    #[Id]
    #[Column(type: 'integer', nullable: false)]
    #[GeneratedValue(strategy: 'IDENTITY')]
    private int $id;

    #[Column(type: 'string', length: 255, nullable: false)]
    #[Assert\NotBlank(message: 'The title cannot be blank')]
    private string $titre;

    #[Column(type: 'string', length: 255, nullable: false)]
    #[Assert\NotBlank(message: 'The image cannot be blank')]
    #[Assert\Length(max: 50, maxMessage: 'Title cannot be longer than {{ limit }} characters')]
    private string $image;

    #[Column(type: 'date', nullable: false)]
    #[Assert\NotBlank(message: 'The date of creation cannot be blank')]
    #[Assert\GreaterThanOrEqual(value: 'today', message: 'The date of creation cannot be in the past')]
    private \DateTime $datecreation;

    #[Column(type: 'string', length: 255, nullable: true)]
    #[Assert\NotBlank(message: 'The description cannot be blank')]
    #[Assert\Length(max: 50, maxMessage: 'Description cannot be longer than {{ limit }} characters')]
    private ?string $description;

    public function __construct()
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;
        return $this;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getDatecreation(): \DateTime
    {
        return $this->datecreation;
    }

    public function setDatecreation(\DateTime $datecreation): self
    {
        $this->datecreation = $datecreation;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function __toString(): string
    {
        return $this->titre;
    }
}
