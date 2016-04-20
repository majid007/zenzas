<?php

namespace Test\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * t_distrito
 *
 * @ORM\Table(name="t_distrito")
 * @ORM\Entity(repositoryClass="Test\FrontBundle\Repository\t_distritoRepository")
 */
class t_distrito
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
     * @ORM\Column(name="id_ciudad", type="integer")
     */
    private $idCiudad;

    /**
     * @var string
     *
     * @ORM\Column(name="distrito_fr", type="string", length=255)
     */
    private $distritoFr;

    /**
     * @var string
     *
     * @ORM\Column(name="distrito_ar", type="string", length=255)
     */
    private $distritoAr;

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
     * Set idCiudad
     *
     * @param integer $idCiudad
     * @return t_distrito
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
     * Set distritoFr
     *
     * @param string $distritoFr
     * @return t_distrito
     */
    public function setDistritoFr($distritoFr)
    {
        $this->distritoFr = $distritoFr;

        return $this;
    }

    /**
     * Get distritoFr
     *
     * @return string 
     */
    public function getDistritoFr()
    {
        return $this->distritoFr;
    }

    /**
     * Set distritoAr
     *
     * @param string $distritoAr
     * @return t_distrito
     */
    public function setDistritoAr($distritoAr)
    {
        $this->distritoAr = $distritoAr;

        return $this;
    }

    /**
     * Get distritoAr
     *
     * @return string 
     */
    public function getDistritoAr()
    {
        return $this->distritoAr;
    }

    /**
     * Set extencion
     *
     * @param string $extencion
     * @return t_distrito
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
