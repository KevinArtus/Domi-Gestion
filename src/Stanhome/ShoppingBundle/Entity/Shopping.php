<?php
namespace Stanhome\ShoppingBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="shopping")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Stanhome\ShoppingBundle\Entity\ShoppingRepository")
 */
class Shopping
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $totalPrice;

    /**
     * @ORM\Column(type="date")
     */
    private $dateorder;

    /**
     * @ORM\ManyToOne(targetEntity="Stanhome\RhBundle\Entity\Customer", inversedBy="shopping")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    protected $customer;

    /**
     * @ORM\ManyToOne(targetEntity="Stanhome\MeetingBundle\Entity\Meeting", inversedBy="meeting")
     * @ORM\JoinColumn(name="meeting_id", referencedColumnName="id", nullable=true)
     */
    protected $meeting;

    /**
     * @ORM\OneToMany(targetEntity="ShoppingProduct", mappedBy="shopping", cascade={"persist", "remove"})
     */
    private $shoppingProducts;

    /**
     * @ORM\ManyToOne(targetEntity="Stanhome\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    public function prePersist($total)
    {
        $this->setTotalPrice($total);
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->shoppingProducts = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set totalPrice
     *
     * @param decimal $totalPrice
     * @return decimal
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return string 
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set date
     *
     * @param Date $date
     * @return Order
     */
    public function setDateOrder($dateorder)
    {
        $this->dateorder = $dateorder;

        return $this;
    }

    /**
     * Get date
     *
     * @return Date
     */
    public function getDateOrder()
    {
        return $this->dateorder;
    }

    /**
     * Add orderProducts
     *
     * @param \Stanhome\ShoppingBundle\Entity\ShoppingProduct $shoppingProducts
     * @return Shopping
     */
    public function addShoppingProduct(\Stanhome\ShoppingBundle\Entity\ShoppingProduct $shoppingProducts)
    {
        $this->shoppingProducts[] = $shoppingProducts;
        $shoppingProducts->setShopping($this);

        return $this;
    }

    /**
     * Remove orderProducts
     *
     * @param \Stanhome\ShoppingBundle\Entity\ShoppingProduct $orderProducts
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
        return $this->shoppingProducts->toArray();
    }

    /**
     * Set customer
     *
     * @param \Stanhome\RhBundle\Entity\Customer $customer
     * @return Order
     */
    public function setCustomer(\Stanhome\RhBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \Stanhome\RhBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set user
     *
     * @param \Stanhome\UserBundle\Entity\User $user
     * @return User
     */
    public function setUser(\Stanhome\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Stanhome\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set meeting
     *
     * @param \Stanhome\MeetingBundle\Entity\Meeting $meeting
     * @return Meeting
     */
    public function setMeeting(\Stanhome\MeetingBundle\Entity\Meeting $meeting = null)
    {
        $this->meeting = $meeting;

        return $this;
    }

    /**
     * Get meeting
     *
     * @return \Stanhome\UserBundle\Entity\User
     */
    public function getMeeting()
    {
        return $this->meeting;
    }
}
