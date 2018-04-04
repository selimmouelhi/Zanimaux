<?php
/**
 * Created by PhpStorm.
 * User: Malek Fenina
 * Date: 14/03/2018
 * Time: 13:33
 */

namespace PidevBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * @param mixed $date_naissance
     */
    public function setDateNaissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getConnected()
    {
        return $this->connected;
    }

    /**
     * @param mixed $connected
     */
    public function setConnected($connected)
    {
        $this->connected = $connected;
    }

    /**
     * @return mixed
     */
    public function getEnAttente()
    {
        return $this->EnAttente;
    }

    /**
     * @param mixed $EnAttente
     */
    public function setEnAttente($EnAttente)
    {
        $this->EnAttente = $EnAttente;
    }

    /**
     * @return mixed
     */
    public function getNumberReports()
    {
        return $this->numberReports;
    }

    /**
     * @param mixed $numberReports
     */
    public function setNumberReports($numberReports)
    {
        $this->numberReports = $numberReports;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * @param mixed $date_creation
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getIdAssocaition()
    {
        return $this->id_assocaition;
    }

    /**
     * @param mixed $id_assocaition
     */
    public function setIdAssocaition($id_assocaition)
    {
        $this->id_assocaition = $id_assocaition;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * @param mixed $information
     */
    public function setInformation($information)
    {
        $this->information = $information;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getUrlImage()
    {
        return $this->url_image;
    }

    /**
     * @param mixed $url_image
     */
    public function setUrlImage($url_image)
    {
        $this->url_image = $url_image;
    }

    /**
     * @return mixed
     */
    public function getTypeService()
    {
        return $this->type_service;
    }

    /**
     * @param mixed $type_service
     */
    public function setTypeService($type_service)
    {
        $this->type_service = $type_service;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @ORM\Column(type="string")
     */
    private $nom;
    /**
     * @ORM\Column(type="string")
     */
    private $prenom;
    /**
     * @ORM\ManyToOne(targetEntity="PidevBundle\Entity\Association")
     * @ORM\JoinColumn(name="id_association", referencedColumnName="id")
     */
    private $id_assocaition;
    /**
     * @ORM\Column(type="date")
     */
    private $date_naissance;
    /**
     * @ORM\Column(type="string")
     */
    private $adresse;
    /**
     * @ORM\Column(type="integer")
     */
    private $tel;
    /**
     * @ORM\Column(type="string")
     */
    private $information;
    /**
     * @ORM\Column(type="string")
     */
    private $ville;
    /**
     * @ORM\Column(type="string")
     */
    private $url_image;
    /**
     * @ORM\Column(type="string")
     */
    private $type_service;
    /**
     * @ORM\Column(type="string")
     */
    private $connected;
    /**
     * @ORM\Column(type="integer")
     */
    private $numberReports;
    /**
     * @ORM\Column(type="integer")
     */
    private $rating;
    /**
     * @ORM\Column(type="integer")
     */
    private $EnAttente;



    /**
     * @ORM\Column(type="date")
     */
    private $date_creation;




    public function __toString()
    {
        return (string)$this->getNom();
    }


}