<?php

namespace Test\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * t_carroceria_moto
 *
 * @ORM\Table(name="t_carroceria_moto")
 * @ORM\Entity(repositoryClass="Test\FrontBundle\Repository\t_carroceria_motoRepository")
 */
class t_carroceria_moto
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
     * @ORM\Column(name="descripcion_fr", type="string", length=255)
     */
    private $descripcionFr;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_en", type="string", length=255)
     */
    private $descripcionEn;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_es", type="string", length=255)
     */
    private $descripcionEs;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_ar", type="string", length=255)
     */
    private $descripcionAr;


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
     * Set descripcionFr
     *
     * @param string $descripcionFr
     * @return t_carroceria_moto
     */
    public function setDescripcionFr($descripcionFr)
    {
        $this->descripcionFr = $descripcionFr;

        return $this;
    }

    /**
     * Get descripcionFr
     *
     * @return string 
     */
    public function getDescripcionFr()
    {
        return $this->descripcionFr;
    }

    /**
     * Set descripcionEn
     *
     * @param string $descripcionEn
     * @return t_carroceria_moto
     */
    public function setDescripcionEn($descripcionEn)
    {
        $this->descripcionEn = $descripcionEn;

        return $this;
    }

    /**
     * Get descripcionEn
     *
     * @return string 
     */
    public function getDescripcionEn()
    {
        return $this->descripcionEn;
    }

    /**
     * Set descripcionEs
     *
     * @param string $descripcionEs
     * @return t_carroceria_moto
     */
    public function setDescripcionEs($descripcionEs)
    {
        $this->descripcionEs = $descripcionEs;

        return $this;
    }

    /**
     * Get descripcionEs
     *
     * @return string 
     */
    public function getDescripcionEs()
    {
        return $this->descripcionEs;
    }

    /**
     * Set descripcionAr
     *
     * @param string $descripcionAr
     * @return t_carroceria_moto
     */
    public function setDescripcionAr($descripcionAr)
    {
        $this->descripcionAr = $descripcionAr;

        return $this;
    }

    /**
     * Get descripcionAr
     *
     * @return string 
     */
    public function getDescripcionAr()
    {
        return $this->descripcionAr;
    }
}
