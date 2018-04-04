<?php

namespace PidevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification", uniqueConstraints={@ORM\UniqueConstraint(name="id_concours", columns={"id_concours"}), @ORM\UniqueConstraint(name="id_user", columns={"id_user"}), @ORM\UniqueConstraint(name="id_rdv", columns={"id_rdv"}), @ORM\UniqueConstraint(name="id_reponse", columns={"id_reponse"}), @ORM\UniqueConstraint(name="id_commentaire", columns={"id_commentaire"}), @ORM\UniqueConstraint(name="id_publication", columns={"id_publication"}), @ORM\UniqueConstraint(name="id_evt", columns={"id_evt"})})
 * @ORM\Entity
 */
class Notification
{
    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=50, nullable=false)
     */
    private $contenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \PidevBundle\Entity\Concours
     *
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\Concours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_concours", referencedColumnName="id")
     * })
     */
    private $idConcours;

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
     * @var \PidevBundle\Entity\Rdv
     *
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\Rdv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rdv", referencedColumnName="idr")
     * })
     */
    private $idRdv;

    /**
     * @var \PidevBundle\Entity\Reponse
     *
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\Reponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_reponse", referencedColumnName="id")
     * })
     */
    private $idReponse;

    /**
     * @var \PidevBundle\Entity\Commentaire
     *
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\Commentaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commentaire", referencedColumnName="id")
     * })
     */
    private $idCommentaire;

    /**
     * @var \PidevBundle\Entity\Publication
     *
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\Publication")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_publication", referencedColumnName="id")
     * })
     */
    private $idPublication;

    /**
     * @var \PidevBundle\Entity\Evenement
     *
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evt", referencedColumnName="id")
     * })
     */
    private $idEvt;


}

