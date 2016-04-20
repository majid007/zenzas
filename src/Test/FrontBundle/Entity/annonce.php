<?php

namespace Test\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * annonce
 *
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="Test\FrontBundle\Repository\annonceRepository")
 */
class annonce
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="id_annonce", type="string", length=255, nullable=true)
     */
    private $idAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="t_vehicule", type="string", length=255, nullable=true)
     */
    private $tVehicule;

    /**
     * @var int
     *
     * @ORM\Column(name="id_region", type="integer", nullable=true)
     */
    private $idRegion;

    /**
     * @var int
     *
     * @ORM\Column(name="id_provincia", type="integer", nullable=true)
     */
    private $idProvincia;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ciudad", type="integer", nullable=true)
     */
    private $idCiudad;

    /**
     * @var int
     *
     * @ORM\Column(name="id_distrito", type="integer", nullable=true)
     */
    private $idDistrito;

    /**
     * @var int
     *
     * @ORM\Column(name="id_barrio", type="integer", nullable=true)
     */
    private $idBarrio;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $prix;

    /**
     * @var bool
     *
     * @ORM\Column(name="negociable", type="boolean", nullable=true)
     */
    private $negociable;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="visites", type="integer", nullable=true)
     */
    private $visites;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="d_creation", type="date", nullable=true)
     */
    private $dCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="h_creation", type="time", nullable=true)
     */
    private $hCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="unix", type="string", length=255, nullable=true)
     */
    private $unix;

    /**
     * @var string
     *
     * @ORM\Column(name="photo1", type="string", length=255, nullable=true)
     */
    private $photo1;

    /**
     * @var string
     *
     * @ORM\Column(name="photo2", type="string", length=255, nullable=true)
     */
    private $photo2;

    /**
     * @var string
     *
     * @ORM\Column(name="photo3", type="string", length=255, nullable=true)
     */
    private $photo3;

    /**
     * @var bool
     *
     * @ORM\Column(name="supprimer", type="boolean", nullable=true)
     */
    private $supprimer;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set idAnnonce
     *
     * @param string $idAnnonce
     * @return voiture
     */
    public function setIdAnnonce($idAnnonce)
    {
        $this->idAnnonce = $idAnnonce;

        return $this;
    }

    /**
     * Get idAnnonce
     *
     * @return string
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * Set tVehicule
     *
     * @param string $tVehicule
     * @return annonce
     */
    public function setTVehicule($tVehicule)
    {
        $this->tVehicule = $tVehicule;

        return $this;
    }

    /**
     * Get tVehicule
     *
     * @return string 
     */
    public function getTVehicule()
    {
        return $this->tVehicule;
    }

    /**
     * Set idRegion
     *
     * @param integer $idRegion
     * @return annonce
     */
    public function setIdRegion($idRegion)
    {
        $this->idRegion = $idRegion;

        return $this;
    }

    /**
     * Get idRegion
     *
     * @return integer 
     */
    public function getIdRegion()
    {
        return $this->idRegion;
    }

    /**
     * Set idProvincia
     *
     * @param integer $idProvincia
     * @return annonce
     */
    public function setIdProvincia($idProvincia)
    {
        $this->idProvincia = $idProvincia;

        return $this;
    }

    /**
     * Get idProvincia
     *
     * @return integer 
     */
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    /**
     * Set idCiudad
     *
     * @param integer $idCiudad
     * @return annonce
     */
    public function setIdCiudad($idCiudad)
    {
        $this->idCiudad = $idCiudad;

        return $this;
    }

    /**
     * Get idCiudad
     *
     * @return integer 
     */
    public function getIdCiudad()
    {
        return $this->idCiudad;
    }

    /**
     * Set idDistrito
     *
     * @param integer $idDistrito
     * @return annonce
     */
    public function setIdDistrito($idDistrito)
    {
        $this->idDistrito = $idDistrito;

        return $this;
    }

    /**
     * Get idDistrito
     *
     * @return integer 
     */
    public function getIdDistrito()
    {
        return $this->idDistrito;
    }

    /**
     * Set idBarrio
     *
     * @param integer $idBarrio
     * @return annonce
     */
    public function setIdBarrio($idBarrio)
    {
        $this->idBarrio = $idBarrio;

        return $this;
    }

    /**
     * Get idBarrio
     *
     * @return integer 
     */
    public function getIdBarrio()
    {
        return $this->idBarrio;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set negociable
     *
     * @param boolean $negociable
     * @return annonce
     */
    public function setNegociable($negociable)
    {
        $this->negociable = $negociable;

        return $this;
    }

    /**
     * Get negociable
     *
     * @return boolean 
     */
    public function getNegociable()
    {
        return $this->negociable;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return annonce
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set visites
     *
     * @param integer $visites
     * @return annonce
     */
    public function setVisites($visites)
    {
        $this->visites = $visites;

        return $this;
    }

    /**
     * Get visites
     *
     * @return integer 
     */
    public function getVisites()
    {
        return $this->visites;
    }

    /**
     * Set dCreation
     *
     * @param \DateTime $dCreation
     * @return annonce
     */
    public function setDCreation($dCreation)
    {
        $this->dCreation = $dCreation;

        return $this;
    }

    /**
     * Get dCreation
     *
     * @return \DateTime 
     */
    public function getDCreation()
    {
        return $this->dCreation;
    }

    /**
     * Set hCreation
     *
     * @param \DateTime $hCreation
     * @return annonce
     */
    public function setHCreation($hCreation)
    {
        $this->hCreation = $hCreation;

        return $this;
    }

    /**
     * Get hCreation
     *
     * @return \DateTime 
     */
    public function getHCreation()
    {
        return $this->hCreation;
    }

    /**
     * Set unix
     *
     * @param string $unix
     * @return annonce
     */
    public function setUnix($unix)
    {
        $this->unix = $unix;

        return $this;
    }

    /**
     * Get unix
     *
     * @return string 
     */
    public function getUnix()
    {
        return $this->unix;
    }

    /**
     * Set photo1
     *
     * @param string $photo1
     * @return annonce
     */
    public function setPhoto1($photo1)
    {
        $this->photo1 = $photo1;

        return $this;
    }

    /**
     * Get photo1
     *
     * @return string 
     */
    public function getPhoto1()
    {
        return $this->photo1;
    }

    /**
     * Set photo2
     *
     * @param string $photo2
     * @return annonce
     */
    public function setPhoto2($photo2)
    {
        $this->photo2 = $photo2;

        return $this;
    }

    /**
     * Get photo2
     *
     * @return string 
     */
    public function getPhoto2()
    {
        return $this->photo2;
    }

    /**
     * Set photo3
     *
     * @param string $photo3
     * @return annonce
     */
    public function setPhoto3($photo3)
    {
        $this->photo3 = $photo3;

        return $this;
    }

    /**
     * Get photo3
     *
     * @return string 
     */
    public function getPhoto3()
    {
        return $this->photo3;
    }

    /**
     * Set supprimer
     *
     * @param boolean $supprimer
     * @return annonce
     */
    public function setSupprimer($supprimer)
    {
        $this->supprimer = $supprimer;

        return $this;
    }

    /**
     * Get supprimer
     *
     * @return boolean 
     */
    public function getSupprimer()
    {
        return $this->supprimer;
    }
}
