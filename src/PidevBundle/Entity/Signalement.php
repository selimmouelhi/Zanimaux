<?php

namespace PidevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signalement
 *
 * @ORM\Table(name="signalement", indexes={@ORM\Index(name="id_post", columns={"id_post"}), @ORM\Index(name="id_commentaire", columns={"id_commentaire"}), @ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Signalement
{
    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="string", length=250, nullable=false)
     */
    private $motif = '';

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
     * @var \PidevBundle\Entity\Publication
     *
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\Publication")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_post", referencedColumnName="id")
     * })
     */
    private $idPost;

    /**
     * @var \PidevBundle\Entity\Commentaire
     *
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\Commentaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commentaire", referencedColumnName="id")
     * })
     */
    private $idCommentaire;


}

