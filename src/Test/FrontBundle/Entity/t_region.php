<?php

namespace Test\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * t_region
 *
 * @ORM\Table(name="t_region")
 * @ORM\Entity(repositoryClass="Test\FrontBundle\Repository\t_regionRepository")
 */
class t_region
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
     * @ORM\Column(name="region_fr", type="string", length=255)
     */
    private $regionFr;

    /**
     * @var string
     *
     * @ORM\Column(name="region_ar", type="string", length=255)
     */
    private $regionAr;


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
     * Set regionFr
     *
     * @param string $regionFr
     * @return t_region
     */
    public function setRegionFr($regionFr)
    {
        $this->regionFr = $regionFr;

        return $this;
    }

    /**
     * Get regionFr
     *
     * @return string 
     */
    public function getRegionFr()
    {
        return $this->regionFr;
    }

    /**
     * Set regionAr
     *
     * @param string $regionAr
     * @return t_region
     */
    public function setRegionAr($regionAr)
    {
        $this->regionAr = $regionAr;

        return $this;
    }

    /**
     * Get regionAr
     *
     * @return string 
     */
    public function getRegionAr()
    {
        return $this->regionAr;
    }

    /*
     *
     */
    public function __toString(){
        return $this->regionFr;
    }
}
