<?php
namespace Stanhome\MeetingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="meeting")
 * @ORM\Entity(repositoryClass="Stanhome\MeetingBundle\Entity\MeetingRepository")
 */
class Meeting
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $date;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $address;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    protected $cp;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $city;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nbPersons;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nbKm;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    protected $montantKm;


    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    protected $montantTtc;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    protected $montantHt;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    protected $profit;

    /**
     * @ORM\ManyToOne(targetEntity="Stanhome\RhBundle\Entity\Customer", inversedBy="meeting")
     */
    protected $customer;

    /**
     * @ORM\OneToMany(targetEntity="Stanhome\ShoppingBundle\Entity\Shopping", mappedBy="shopping")
     */
    private $shopping;


    /**
     * @ORM\ManyToOne(targetEntity="Stanhome\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    public function __toString()
    {
        return sprintf("(%s) - %s %s", date_format($this->getDate(), 'd-m-Y'),$this->getCustomer()->getNom(), $this->getCustomer()->getPrenom());

//        try {
//            return sprintf("%s", $this->getDate());
//        } catch (\Exception $e){
//            return '';
//        }
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
     * Set date
     *
     * @param \DateTime $date
     * @return Meeting
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Meeting
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Meeting
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Meeting
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set nbPersons
     *
     * @param integer $nbPersons
     * @return integer
     */
    public function setNbPersons($nbPersons)
    {
        $this->nbPersons = $nbPersons;

        return $this;
    }

    /**
     * Get nbPersons
     *
     * @return integer
     */
    public function getNbPersons()
    {
        return $this->nbPersons;
    }

    /**
     * Set nbKm
     *
     * @param integer $nbKm
     * @return integer
     */
    public function setNbKm($nbKm)
    {
        $this->nbKm = $nbKm;

        return $this;
    }

    /**
     * Get nbKm
     *
     * @return integer
     */
    public function getNbKm()
    {
        return $this->nbKm;
    }

    /**
     * Set montantKm
     *
     * @param decimal montantKm
     * @return decimal
     */
    public function setMontantKm($montantKm)
    {
        $this->montantKm = $montantKm;

        return $this;
    }

    /**
     * Get v
     *
     * @return decimal
     */
    public function getMontantKm()
    {
        return $this->montantKm;
    }



    /**
     * Set montantTtc
     *
     * @param decimal $montantTtc
     * @return decimal
     */
    public function setMontantTtc($montantTtc)
    {
        $this->montantTtc = $montantTtc;

        return $this;
    }

    /**
     * Get montantTtc
     *
     * @return decimal
     */
    public function getMontantTtc()
    {
        return $this->montantTtc;
    }

    /**
     * Set montantHt
     *
     * @param decimal $montantHt
     * @return decimal
     */
    public function setMontantHt($montantHt)
    {
        $this->montantHt = $montantHt;

        return $this;
    }

    /**
     * Get montantTtc
     *
     * @return decimal
     */
    public function getMontantHt()
    {
        return $this->montantHt;
    }

    /**
     * Set profit
     *
     * @param decimal $profit
     * @return decimal
     */
    public function setProfit($profit)
    {
        $this->profit = $profit;

        return $this;
    }

    /**
     * Get profit
     *
     * @return decimal
     */
    public function getProfit()
    {
        return $this->profit;
    }

    /**
     * Set customer
     *
     * @param \Stanhome\RhBundle\Entity\Customer $customer
     * @return Meeting
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

    public function getInlineAddress()
    {
        return sprintf("%s %s %s", $this->getAddress(), $this->getCp(), $this->getCity());
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->meeting = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Add shopping
     *
     * @param \Stanhome\ShoppingBundle\Entity\Shopping $shopping
     * @return Meeting
     */
    public function addShopping(\Stanhome\ShoppingBundle\Entity\Shopping $shopping)
    {
        $this->shopping[] = $shopping;

        return $this;
    }

    /**
     * Remove shopping
     *
     * @param \Stanhome\ShoppingBundle\Entity\Shopping $shopping
     */
    public function removeShopping(\Stanhome\ShoppingBundle\Entity\Shopping $shopping)
    {
        $this->shopping->removeElement($shopping);
    }

    /**
     * Get shopping
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getShopping()
    {
        return $this->shopping;
    }
}
