<?php

namespace PidevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipationEvt
 *
 * @ORM\Table(name="participation_evt", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_evt", columns={"id_evt", "id_user"}), @ORM\Index(name="IDX_3DE23DA21F453D6", columns={"id_evt"})})
 * @ORM\Entity
 */
class ParticipationEvt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \PidevBundle\Entity\Evenement
     *
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evt", referencedColumnName="id")
     * })
     */
    private $idEvt;

    /**
     * @var \PidevBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;


}

