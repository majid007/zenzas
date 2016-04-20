<?php

namespace Test\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * modelo_moto
 *
 * @ORM\Table(name="modelo_moto")
 * @ORM\Entity(repositoryClass="Test\FrontBundle\Repository\modelo_motoRepository")
 */
class modelo_moto
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
     * @ORM\Column(name="id_marca", type="integer")
     */
    private $idMarca;

    /**
     * @var int
     *
     * @ORM\Column(name="id_carroseria", type="integer")
     */
    private $idCarroseria;

    /**
     * @var int
     *
     * @ORM\Column(name="cilindros", type="integer")
     */
    private $cilindros;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


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
     * Set idMarca
     *
     * @param integer $idMarca
     * @return modelo_moto
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
     * Set idCarroseria
     *
     * @param integer $idCarroseria
     * @return modelo_moto
     */
    public function setIdCarroseria($idCarroseria)
    {
        $this->idCarroseria = $idCarroseria;

        return $this;
    }

    /**
     * Get idCarroseria
     *
     * @return integer 
     */
    public function getIdCarroseria()
    {
        return $this->idCarroseria;
    }

    /**
     * Set cilindros
     *
     * @param integer $cilindros
     * @return modelo_moto
     */
    public function setCilindros($cilindros)
    {
        $this->cilindros = $cilindros;

        return $this;
    }

    /**
     * Get cilindros
     *
     * @return integer 
     */
    public function getCilindros()
    {
        return $this->cilindros;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return modelo_moto
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
}
