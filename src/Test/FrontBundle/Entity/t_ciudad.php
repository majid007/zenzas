<?php

namespace Test\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * t_ciudad
 *
 * @ORM\Table(name="t_ciudad")
 * @ORM\Entity(repositoryClass="Test\FrontBundle\Repository\t_ciudadRepository")
 */
class t_ciudad
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
     * @var int
     *
     * @ORM\Column(name="id_provincia", type="integer")
     */
    private $idProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad_fr", type="string", length=255)
     */
    private $ciudadFr;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad_ar", type="string", length=255)
     */
    private $ciudadAr;

    /**
     * @var string
     *
     * @ORM\Column(name="extencion", type="string", length=255)
     */
    private $extencion;


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
     * Set idProvincia
     *
     * @param integer $idProvincia
     * @return t_ciudad
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
     * Set ciudadFr
     *
     * @param string $ciudadFr
     * @return t_ciudad
     */
    public function setCiudadFr($ciudadFr)
    {
        $this->ciudadFr = $ciudadFr;

        return $this;
    }

    /**
     * Get ciudadFr
     *
     * @return string 
     */
    public function getCiudadFr()
    {
        return $this->ciudadFr;
    }

    /**
     * Set ciudadAr
     *
     * @param string $ciudadAr
     * @return t_ciudad
     */
    public function setCiudadAr($ciudadAr)
    {
        $this->ciudadAr = $ciudadAr;

        return $this;
    }

    /**
     * Get ciudadAr
     *
     * @return string 
     */
    public function getCiudadAr()
    {
        return $this->ciudadAr;
    }

    /**
     * Set extencion
     *
     * @param string $extencion
     * @return t_ciudad
     */
    public function setExtencion($extencion)
    {
        $this->extencion = $extencion;

        return $this;
    }

    /**
     * Get extencion
     *
     * @return string 
     */
    public function getExtencion()
    {
        return $this->extencion;
    }
}
