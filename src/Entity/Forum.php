<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Forum
 *
 * @ORM\Table(name="forum")
 * @ORM\Entity
 */
class Forum
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="The title cannot be blank")

     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="The image cannot be blank")
     * @Assert\Length(max=50, maxMessage="Title cannot be longer than {{ limit }} characters")


     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date", nullable=false)
     * @Assert\NotBlank(message="The image cannot be blank")
     * @Assert\GreaterThanOrEqual("today", message="The date of creation cannot be in the past")

     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     *  @Assert\NotBlank(message="The description cannot be blank")
     * @Assert\Length(max=50, maxMessage="description cannot be longer than {{ limit }} characters")

     */
    private $description;

    /**
     * Forum constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of titre
     *
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @param string $titre
     * @return self
     */
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Get the value of image
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param string $image
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Get the value of datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation(): \DateTime
    {
        return $this->datecreation;
    }

    /**
     * Set the value of datecreation
     *
     * @param \DateTime $datecreation
     * @return self
     */
    public function setDatecreation(\DateTime $datecreation): self
    {
        $this->datecreation = $datecreation;
        return $this;
    }

    /**
     * Get the value of description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param string $description
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Returns a string representation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->titre;
    }


}
