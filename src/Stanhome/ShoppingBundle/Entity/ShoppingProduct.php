<?php

namespace Stanhome\ShoppingBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="shoppingproduct")
 * @ORM\Entity
 */
class ShoppingProduct
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Shopping", inversedBy="shoppingProducts")
     * @ORM\JoinColumn(name="shopping_id", referencedColumnName="id")
     */
    private $shopping;

    /**
     * @ORM\ManyToOne(targetEntity="Stanhome\ProductBundle\Entity\Product", inversedBy="shoppingProducts")
     * @ORM\JoinColumn(name="product_reference", referencedColumnName="reference")
     */
    private $product;

    /**
     * @ORM\Column()
     */
    private $quantity;


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
     * Set quantity
     *
     * @param string $quantity
     * @return integer
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set order
     *
     * @param \Stanhome\ShoppingBundle\Entity\Shopping $shopping
     * @return ShoppingProduct
     */
    public function setShopping(\Stanhome\ShoppingBundle\Entity\Shopping $shopping)
    {
        $this->shopping = $shopping;

        return $this;
    }

    /**
     * Get shopping
     *
     * @return \Stanhome\ShoppingBundle\Entity\Shopping
     */
    public function getShopping()
    {
        return $this->shopping;
    }

    /**
     * Set product
     *
     * @param \Stanhome\ProductBundle\Entity\Product $product
     * @return Product
     */
    public function setProduct(\Stanhome\ProductBundle\Entity\Product $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Stanhome\ProductBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
