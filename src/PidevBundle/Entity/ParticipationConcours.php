<?php

namespace PidevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipationConcours
 *
 * @ORM\Table(name="participation_concours", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_concours", columns={"id_concours", "id_user"}), @ORM\Index(name="IDX_A386DD011F75BD03", columns={"id_concours"})})
 * @ORM\Entity
 */
class ParticipationConcours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pts", type="integer", nullable=true)
     */
    private $pts = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_participation", type="datetime", nullable=false)
     */
    private $dateParticipation = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \PidevBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \PidevBundle\Entity\Concours
     *
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\Concours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_concours", referencedColumnName="id")
     * })
     */
    private $idConcours;


}

