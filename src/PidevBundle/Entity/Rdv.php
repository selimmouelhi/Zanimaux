<?php

namespace PidevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rdv
 *
 * @ORM\Table(name="rdv", indexes={@ORM\Index(name="id_fournisseur", columns={"id_fournisseur"}), @ORM\Index(name="id_membre", columns={"id_membre"})})
 * @ORM\Entity
 */
class Rdv
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rdv", type="datetime", nullable=false)
     */
    private $dateRdv = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="type_consultation", type="string", length=100, nullable=false)
     */
    private $typeConsultation;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_consultation", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixConsultation;

    /**
     * @var integer
     *
     * @ORM\Column(name="idr", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idr;

    /**
     * @var \PidevBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id")
     * })
     */
    private $idMembre;

    /**
     * @var \PidevBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fournisseur", referencedColumnName="id")
     * })
     */
    private $idFournisseur;


}

