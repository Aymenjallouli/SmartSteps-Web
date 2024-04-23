<?php

namespace App\Entity;

use App\Repository\CandidatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidatRepository::class)]
class Candidat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8)]
    private ?string $cin = null;

    #[ORM\Column(length: 20)]
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'cinCandidat', targetEntity: Entretien::class)]
    private Collection $entretiens;

    #[ORM\Column(nullable: true)]
    private ?string $specialite = null;

    public function __construct()
    {
        $this->entretiens = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): static
    {
        $this->cin = $cin;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): static
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * @return Collection<int, Entretien>
     */
    public function getEntretiens(): Collection
    {
        return $this->entretiens;
    }

  /*  public function addBook(Book $book): static
    {
        if (!$this->books->contains($book)) {
            $this->books->add($book);
            $book->setIdAuthor($this);
        }

        return $this;
    }

    public function removeBook(Book $book): static
    {
        if ($this->books->removeElement($book)) {
            // set the owning side to null (unless already changed)
            if ($book->getIdAuthor() === $this) {
                $book->setIdAuthor(null);
            }
        }

        return $this;
    }

    public function getNbBooks(): ?int
    {
        return $this->nb_books;
    }

    public function setNbBooks(?int $nb_books): static
    {
        $this->nb_books = $nb_books;

        return $this;
    }*/

  public function addEntretien(Entretien $entretien): static
  {
      if (!$this->entretiens->contains($entretien)) {
          $this->entretiens->add($entretien);
          $entretien->setCinCandidat($this);
      }

      return $this;
  }

  public function removeEntretien(Entretien $entretien): static
  {
      if ($this->entretiens->removeElement($entretien)) {
          // set the owning side to null (unless already changed)
          if ($entretien->getCinCandidat() === $this) {
              $entretien->setCinCandidat(null);
          }
      }

      return $this;
  }
}