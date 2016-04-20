<?php

namespace Test\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * t_barrio
 *
 * @ORM\Table(name="t_barrio")
 * @ORM\Entity(repositoryClass="Test\FrontBundle\Repository\t_barrioRepository")
 */
class t_barrio
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
     * @ORM\Column(name="distrito_ciudad", type="integer")
     */
    private $distritoCiudad;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ciudad", type="integer")
     */
    private $idCiudad;

    /**
     * @var int
     *
     * @ORM\Column(name="id_distrito", type="integer")
     */
    private $idDistrito;

    /**
     * @var string
     *
     * @ORM\Column(name="barrio_fr", type="string", length=255)
     */
    private $barrioFr;

    /**
     * @var string
     *
     * @ORM\Column(name="barrio_ar", type="string", length=255)
     */
    private $barrioAr;


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
     * Set distritoCiudad
     *
     * @param integer $distritoCiudad
     * @return t_barrio
     */
    public function setDistritoCiudad($distritoCiudad)
    {
        $this->distritoCiudad = $distritoCiudad;

        return $this;
    }

    /**
     * Get distritoCiudad
     *
     * @return integer 
     */
    public function getDistritoCiudad()
    {
        return $this->distritoCiudad;
    }

    /**
     * Set idCiudad
     *
     * @param integer $idCiudad
     * @return t_barrio
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
     * @return t_barrio
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
     * Set barrioFr
     *
     * @param string $barrioFr
     * @return t_barrio
     */
    public function setBarrioFr($barrioFr)
    {
        $this->barrioFr = $barrioFr;

        return $this;
    }

    /**
     * Get barrioFr
     *
     * @return string 
     */
    public function getBarrioFr()
    {
        return $this->barrioFr;
    }

    /**
     * Set barrioAr
     *
     * @param string $barrioAr
     * @return t_barrio
     */
    public function setBarrioAr($barrioAr)
    {
        $this->barrioAr = $barrioAr;

        return $this;
    }

    /**
     * Get barrioAr
     *
     * @return string 
     */
    public function getBarrioAr()
    {
        return $this->barrioAr;
    }
}
