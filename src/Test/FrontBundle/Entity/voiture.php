<?php

namespace Test\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * voiture
 *
 * @ORM\Table(name="voiture")
 * @ORM\Entity(repositoryClass="Test\FrontBundle\Repository\voitureRepository")
 */
class voiture
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
     * @var int
     *
     * @ORM\Column(name="id_marca", type="integer", nullable=true)
     */
    private $idMarca;

    /**
     * @var int
     *
     * @ORM\Column(name="id_modelo", type="integer", nullable=true)
     */
    private $idModelo;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255, nullable=true)
     */
    private $version;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="d_fabrication", type="date", nullable=true)
     */
    private $dFabrication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="d_matriculation", type="date", nullable=true)
     */
    private $dMatriculation;

    /**
     * @var int
     *
     * @ORM\Column(name="km", type="integer", nullable=true)
     */
    private $km;

    /**
     * @var int
     *
     * @ORM\Column(name="id_transmission", type="decimal", nullable=true)
     */
    private $idTransmission;

    /**
     * @var string
     *
     * @ORM\Column(name="puissance", type="string", length=255, nullable=true)
     */
    private $puissance;

    /**
     * @var int
     *
     * @ORM\Column(name="carburant", type="integer", nullable=true)
     */
    private $carburant;

    /**
     * @var int
     *
     * @ORM\Column(name="carrosserie", type="integer", nullable=true)
     */
    private $carrosserie;

    /**
     * @var int
     *
     * @ORM\Column(name="portes", type="integer", nullable=true)
     */
    private $portes;

    /**
     * @var int
     *
     * @ORM\Column(name="sieges", type="integer", nullable=true)
     */
    private $sieges;

    /**
     * @var int
     *
     * @ORM\Column(name="color_ext", type="integer", nullable=true)
     */
    private $colorExt;

    /**
     * @var int
     *
     * @ORM\Column(name="tapisserie", type="integer", nullable=true)
     */
    private $tapisserie;

    /**
     * @var int
     *
     * @ORM\Column(name="color_int", type="integer", nullable=true)
     */
    private $colorInt;

    /**
     * @var int
     *
     * @ORM\Column(name="aduana", type="integer", nullable=true)
     */
    private $aduana;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="t_voiture", type="string", length=255, nullable=true)
     */
    private $tVoiture;

    /**
     * @var string
     *
     * @ORM\Column(name="t_moteur", type="string", length=255, nullable=true)
     */
    private $tMoteur;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_vitesses", type="integer", nullable=true)
     */
    private $nbVitesses;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_cylindres", type="integer", nullable=true)
     */
    private $nbCylindres;

    /**
     * @var int
     *
     * @ORM\Column(name="poids", type="integer", nullable=true)
     */
    private $poids;

    /**
     * @var int
     *
     * @ORM\Column(name="consommation", type="integer", nullable=true)
     */
    private $consommation;

    /**
     * @var int
     *
     * @ORM\Column(name="cons_urbain", type="integer", nullable=true)
     */
    private $consUrbain;

    /**
     * @var int
     *
     * @ORM\Column(name="cons_extra_urbain", type="integer", nullable=true)
     */
    private $consExtraUrbain;

    /**
     * @var bool
     *
     * @ORM\Column(name="metallisee", type="boolean", nullable=true)
     */
    private $metallisee;

    /**
     * @var string
     *
     * @ORM\Column(name="securite", type="string", length=255, nullable=true)
     */
    private $securite;

    /**
     * @var string
     *
     * @ORM\Column(name="confort", type="string", length=255, nullable=true)
     */
    private $confort;

    /**
     * @var string
     *
     * @ORM\Column(name="info_divertissement", type="string", length=255, nullable=true)
     */
    private $infoDivertissement;

    /**
     * @var string
     *
     * @ORM\Column(name="autres", type="string", length=255, nullable=true)
     */
    private $autres;






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
     * Set idMarca
     *
     * @param integer $idMarca
     * @return voiture
     */
    public function setIdMarca($idMarca)
    {
        $this->idMarca = $idMarca;

        return $this;
    }

    /**
     * Get idMarca
     *
     * @return integer 
     */
    public function getIdMarca()
    {
        return $this->idMarca;
    }

    /**
     * Set idModelo
     *
     * @param integer $idModelo
     * @return voiture
     */
    public function setIdModelo($idModelo)
    {
        $this->idModelo = $idModelo;

        return $this;
    }

    /**
     * Get idModelo
     *
     * @return integer 
     */
    public function getIdModelo()
    {
        return $this->idModelo;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return voiture
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set dFabrication
     *
     * @param \DateTime $dFabrication
     * @return voiture
     */
    public function setDFabrication($dFabrication)
    {
        $this->dFabrication = $dFabrication;

        return $this;
    }

    /**
     * Get dFabrication
     *
     * @return \DateTime 
     */
    public function getDFabrication()
    {
        return $this->dFabrication;
    }

    /**
     * Set dMatriculation
     *
     * @param \DateTime $dMatriculation
     * @return voiture
     */
    public function setDMatriculation($dMatriculation)
    {
        $this->dMatriculation = $dMatriculation;

        return $this;
    }

    /**
     * Get dMatriculation
     *
     * @return \DateTime 
     */
    public function getDMatriculation()
    {
        return $this->dMatriculation;
    }

    /**
     * Set km
     *
     * @param integer $km
     * @return voiture
     */
    public function setKm($km)
    {
        $this->km = $km;

        return $this;
    }

    /**
     * Get km
     *
     * @return integer 
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * Set idTransmission
     *
     * @param integer $idTransmission
     * @return voiture
     */
    public function setIdTransmission($idTransmission)
    {
        $this->idTransmission = $idTransmission;

        return $this;
    }

    /**
     * Get $idTransmission
     *
     * @return integer
     */
    public function getIdTransmission()
    {
        return $this->idTransmission;
    }


    /**
     * Set puissance
     *
     * @param string $puissance
     * @return voiture
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return string 
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set carburant
     *
     * @param integer $carburant
     * @return voiture
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;

        return $this;
    }

    /**
     * Get carburant
     *
     * @return integer
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * Set carrosserie
     *
     * @param integer $carrosserie
     * @return voiture
     */
    public function setCarrosserie($carrosserie)
    {
        $this->carrosserie = $carrosserie;

        return $this;
    }

    /**
     * Get carrosserie
     *
     * @return integer
     */
    public function getCarrosserie()
    {
        return $this->carrosserie;
    }

    /**
     * Set portes
     *
     * @param integer $portes
     * @return voiture
     */
    public function setPortes($portes)
    {
        $this->portes = $portes;

        return $this;
    }

    /**
     * Get portes
     *
     * @return integer 
     */
    public function getPortes()
    {
        return $this->portes;
    }

    /**
     * Set sieges
     *
     * @param integer $sieges
     * @return voiture
     */
    public function setSieges($sieges)
    {
        $this->sieges = $sieges;

        return $this;
    }

    /**
     * Get sieges
     *
     * @return integer 
     */
    public function getSieges()
    {
        return $this->sieges;
    }

    /**
     * Set colorExt
     *
     * @param integer $colorExt
     * @return voiture
     */
    public function setColorExt($colorExt)
    {
        $this->colorExt = $colorExt;

        return $this;
    }

    /**
     * Get colorExt
     *
     * @return integer
     */
    public function getColorExt()
    {
        return $this->colorExt;
    }

    /**
     * Set tapisserie
     *
     * @param integer $tapisserie
     * @return voiture
     */
    public function setTapisserie($tapisserie)
    {
        $this->tapisserie = $tapisserie;

        return $this;
    }

    /**
     * Get tapisserie
     *
     * @return integer
     */
    public function getTapisserie()
    {
        return $this->tapisserie;
    }

    /**
     * Set colorInt
     *
     * @param integer $colorInt
     * @return voiture
     */
    public function setColorInt($colorInt)
    {
        $this->colorInt = $colorInt;

        return $this;
    }

    /**
     * Get colorInt
     *
     * @return integer
     */
    public function getColorInt()
    {
        return $this->colorInt;
    }

    /**
     * Set aduana
     *
     * @param integer $aduana
     * @return voiture
     */
    public function setAduana($aduana)
    {
        $this->aduana = $aduana;

        return $this;
    }

    /**
     * Get aduana
     *
     * @return integer 
     */
    public function getAduana()
    {
        return $this->aduana;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     * @return voiture
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat;
    }


    /**
     * Set tVoiture
     *
     * @param string $tVoiture
     * @return voiture
     */
    public function setTVoiture($tVoiture)
    {
        $this->tVoiture = $tVoiture;

        return $this;
    }

    /**
     * Get tVoiture
     *
     * @return string
     */
    public function getTVoiture()
    {
        return $this->tVoiture;
    }

    /**
     * Set tMoteur
     *
     * @param string $tMoteur
     * @return voiture
     */
    public function setTMoteur($tMoteur)
    {
        $this->tMoteur = $tMoteur;

        return $this;
    }

    /**
     * Get tMoteur
     *
     * @return string
     */
    public function getTMoteur()
    {
        return $this->tMoteur;
    }

    /**
     * Set securite
     *
     * @param string $securite
     * @return voiture
     */
    public function setSecurite($securite)
    {
        $this->securite = $securite;

        return $this;
    }

    /**
     * Get securite
     *
     * @return string
     */
    public function getSecurite()
    {
        return $this->securite;
    }

    /**
     * Set confort
     *
     * @param string $confort
     * @return voiture
     */
    public function setConfort($confort)
    {
        $this->confort = $confort;

        return $this;
    }

    /**
     * Get confort
     *
     * @return string
     */
    public function getConfort()
    {
        return $this->confort;
    }

    /**
     * Set infoDivertissement
     *
     * @param string $infoDivertissement
     * @return voiture
     */
    public function setInfoDivertissement($infoDivertissement)
    {
        $this->infoDivertissement = $infoDivertissement;

        return $this;
    }

    /**
     * Get infoDivertissement
     *
     * @return string
     */
    public function getInfoDivertissement()
    {
        return $this->infoDivertissement;
    }

    /**
     * Set autres
     *
     * @param string $autres
     * @return voiture
     */
    public function setAutres($autres)
    {
        $this->autres = $autres;

        return $this;
    }

    /**
     * Get autres
     *
     * @return string
     */
    public function getAutres()
    {
        return $this->autres;
    }

    /**
     * Set nbVitesses
     *
     * @param integer $nbVitesses
     * @return voiture
     */
    public function setNbVitesses($nbVitesses)
    {
        $this->nbVitesses = $nbVitesses;

        return $this;
    }

    /**
     * Get nbVitesses
     *
     * @return integer
     */
    public function getNbVitesses()
    {
        return $this->nbVitesses;
    }

    /**
     * Set nbCylindres
     *
     * @param integer $nbCylindres
     * @return voiture
     */
    public function setNbCylindres($nbCylindres)
    {
        $this->nbCylindres = $nbCylindres;

        return $this;
    }

    /**
     * Get nbCylindres
     *
     * @return integer
     */
    public function getNbCylindres()
    {
        return $this->nbCylindres;
    }

    /**
     * Set poids
     *
     * @param integer $poids
     * @return voiture
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return integer
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set consommation
     *
     * @param integer $consommation
     * @return voiture
     */
    public function setConsommation($consommation)
    {
        $this->consommation = $consommation;

        return $this;
    }

    /**
     * Get consommation
     *
     * @return integer
     */
    public function getConsommation()
    {
        return $this->consommation;
    }

    /**
     * Set consUrbain
     *
     * @param integer $consUrbain
     * @return voiture
     */
    public function setConsUrbain($consUrbain)
    {
        $this->consUrbain = $consUrbain;

        return $this;
    }

    /**
     * Get consUrbain
     *
     * @return integer
     */
    public function getConsUrbain()
    {
        return $this->consUrbain;
    }

    /**
     * Set consExtraUrbain
     *
     * @param integer $consExtraUrbain
     * @return voiture
     */
    public function setConsExtraUrbain($consExtraUrbain)
    {
        $this->consExtraUrbain = $consExtraUrbain;

        return $this;
    }

    /**
     * Get consExtraUrbain
     *
     * @return integer
     */
    public function getConsExtraUrbain()
    {
        return $this->consExtraUrbain;
    }

    /**
     * Set metallisee
     *
     * @param boolean $metallisee
     * @return voiture
     */
    public function setMetallisee($metallisee)
    {
        $this->metallisee = $metallisee;

        return $this;
    }

    /**
     * Get metallisee
     *
     * @return boolean
     */
    public function getMetallisee()
    {
        return $this->metallisee;
    }

}
