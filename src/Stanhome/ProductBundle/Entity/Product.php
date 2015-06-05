<?php
namespace Stanhome\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product
{
    /**
     * @ORM\Column(name="reference", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $reference;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $libelle;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $price;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

    /**
     * @ORM\OneToMany(targetEntity="Stanhome\ShoppingBundle\Entity\ShoppingProduct", mappedBy="product")
     */
    private $shoppingProducts;

    public function __toString()
    {
        return sprintf("%s (%s)", $this->getReference(), $this->getLibelle());
    }


    /**
     * Set reference
     *
     * @param \String $reference
     * @return Product
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return integer 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set libelle
     *
     * @param \String $libelle
     * @return Product
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
     * Set price
     *
     * @param string $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set category
     *
     * @param \Stanhome\ProductBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\Stanhome\ProductBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Stanhome\ProductBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->shoppingProducts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add shoppingProducts
     *
     * @param \Stanhome\ShoppingBundle\Entity\ShoppingProduct $shoppingProducts
     * @return Product
     */
    public function addShoppingProduct(\Stanhome\ShoppingBundle\Entity\ShoppingProduct $shoppingProducts)
    {
        $this->shoppingProducts[] = $shoppingProducts;

        return $this;
    }

    /**
     * Remove shoppingProducts
     *
     * @param \Stanhome\ShoppingBundle\Entity\ShoppingProduct $shoppingProducts
     */
    public function removeShoppingProduct(\Stanhome\ShoppingBundle\Entity\ShoppingProduct $shoppingProducts)
    {
        $this->shoppingProducts->removeElement($shoppingProducts);
    }

    /**
     * Get shoppingProducts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getShoppingProducts()
    {
        return $this->shoppingProducts;
    }
}
