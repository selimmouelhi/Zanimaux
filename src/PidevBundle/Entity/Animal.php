<?php

namespace PidevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animal
 *
 * @ORM\Table(name="animal")
 * @ORM\Entity
 */
class Animal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_publication", type="integer", nullable=true)
     */
    private $idPublication;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255, nullable=false)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_concours", type="integer", nullable=true)
     */
    private $idConcours;

    /**
     * @var integer
     *
     * @ORM\Column(name="pts", type="integer", nullable=false)
     */
    private $pts = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=250, nullable=false)
     */
    private $race = '';

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=250, nullable=false)
     */
    private $couleur = '';

    /**
     * @var string
     *
     * @ORM\Column(name="couleur_yeux", type="string", length=250, nullable=false)
     */
    private $couleurYeux = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

