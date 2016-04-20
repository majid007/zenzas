<?php

namespace Test\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * t_provincia
 *
 * @ORM\Table(name="t_provincia")
 * @ORM\Entity(repositoryClass="Test\FrontBundle\Repository\t_provinciaRepository")
 */
class t_provincia
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
     * @ORM\Column(name="id_region", type="integer")
     */
    private $idRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia_fr", type="string", length=255)
     */
    private $provinciaFr;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia_ar", type="string", length=255)
     */
    private $provinciaAr;


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
     * Set idRegion
     *
     * @param integer $idRegion
     * @return t_provincia
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
     * Set provinciaFr
     *
     * @param string $provinciaFr
     * @return t_provincia
     */
    public function setProvinciaFr($provinciaFr)
    {
        $this->provinciaFr = $provinciaFr;

        return $this;
    }

    /**
     * Get provinciaFr
     *
     * @return string 
     */
    public function getProvinciaFr()
    {
        return $this->provinciaFr;
    }

    /**
     * Set provinciaAr
     *
     * @param string $provinciaAr
     * @return t_provincia
     */
    public function setProvinciaAr($provinciaAr)
    {
        $this->provinciaAr = $provinciaAr;

        return $this;
    }

    /**
     * Get provinciaAr
     *
     * @return string 
     */
    public function getProvinciaAr()
    {
        return $this->provinciaAr;
    }

    public function __toString(){
        return $this->provinciaFr;
    }
}
