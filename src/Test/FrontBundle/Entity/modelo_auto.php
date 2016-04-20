<?php

namespace Test\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * modelo_auto
 *
 * @ORM\Table(name="modelo_auto")
 * @ORM\Entity(repositoryClass="Test\FrontBundle\Repository\modelo_autoRepository")
 */
class modelo_auto
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
     * @return modelo_auto
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
     * Set description
     *
     * @param string $description
     * @return modelo_auto
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
