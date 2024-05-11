<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="fk_forum_commentaire", columns={"id_forum"})})
 * @ORM\Entity
 */
class Commentaire
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
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Description cannot be blank")
     * @Assert\Length(max=255, maxMessage="Description cannot be longer than {{ limit }} characters")
     */
    private $description;

    /**
     * @var \Forum|null
     *
     * @ORM\ManyToOne(targetEntity="Forum")
     * @ORM\JoinColumn(name="id_forum", referencedColumnName="id")
     */
    private $idForum;

    // Getters and setters...

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Forum|null
     */
    public function getIdForum(): ?Forum
    {
        return $this->idForum;
    }

    /**
     * @param \Forum|null $idForum
     * @return self
     */
    public function setIdForum(?Forum $idForum): self
    {
        $this->idForum = $idForum;
        return $this;
    }

    /**
     * Returns a string representation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->description;
    }
}