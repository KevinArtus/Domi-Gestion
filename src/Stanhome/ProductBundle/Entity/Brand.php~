<?php

namespace Stanhome\ProductBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="brand")
 * @ORM\Entity
 */
class Brand
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="Category", mappedBy="brand")
     */
    private $categorys;


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
     * Set libelle
     *
     * @param string $libelle
     * @return Category
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categorys = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add categorys
     *
     * @param \Stanhome\ProductBundle\Entity\Category $categorys
     * @return Brand
     */
    public function addCategory(\Stanhome\ProductBundle\Entity\Category $categorys)
    {
        $this->categorys[] = $categorys;
        $categorys->setBrand($this);

        return $this;
    }

    /**
     * Remove categorys
     *
     * @param \Stanhome\ProductBundle\Entity\Category $categorys
     */
    public function removeCategory(\Stanhome\ProductBundle\Entity\Category $categorys)
    {
        $this->categorys->removeElement($categorys);
    }

    /**
     * Get categorys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategorys()
    {
        return $this->categorys;
    }
}
