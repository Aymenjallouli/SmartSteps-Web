<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\MessageRepository;
#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(name: 'id_message', type: 'integer', nullable: false)]
    private ?int $idMessage;

    #[ORM\Column(name: 'contenu_message', type: 'string', length: 100, nullable: false)]
    private string $contenuMessage;

    #[ORM\Column(name: 'date_message', type: 'datetime', nullable: false)]
    private \DateTime $dateMessage;

    #[ORM\ManyToOne(targetEntity: Forum::class)]
    #[ORM\JoinColumns([
        ORM\JoinColumn(name: 'id_forum', referencedColumnName: 'id')
    ])]
    private ?Forum $idForum=null;

    public function getIdMessage(): ?int
    {
        return $this->idMessage;
    }

    public function getContenuMessage(): string
    {
        return $this->contenuMessage;
    }

    public function setContenuMessage(string $contenuMessage): self
    {
        $this->contenuMessage = $contenuMessage;
        return $this;
    }

    public function getDateMessage(): \DateTime
    {
        return $this->dateMessage;
    }

    public function setDateMessage(\DateTime $dateMessage): self
    {
        $this->dateMessage = $dateMessage;
        return $this;
    }

    public function getIdForum(): ?Forum
    {
        return $this->idForum;
    }

    public function setIdForum(?Forum $idForum): self
    {
        $this->idForum = $idForum;
        return $this;
    }
}
