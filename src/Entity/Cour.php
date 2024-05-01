<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cour
 *
 * @ORM\Table(name="cour")
 * @ORM\Entity
 */
class Cour
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cour", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCour;

    /**
     * @var string
     *
     * @ORM\Column(name="Matiere", type="string", length=255, nullable=false)
     */
    private $matiere;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_fin", type="date", nullable=false)
     */
    private $dateFin;


}
