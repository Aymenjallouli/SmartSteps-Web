<?php

namespace App\Entity;

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


}
