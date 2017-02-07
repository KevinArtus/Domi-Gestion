<?php

namespace DomiGestion\RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="DomiGestion\RhBundle\Entity\CustomerRepository")
 * @ORM\Table(name="customer")
 */
class Customer
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $status;

    /**
     * @ORM\Column(type="string", length=5)
     */
    protected $sexe;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $prenom;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $anniversaire;

    /**
     * @ORM\Column(type="string", length=14, nullable=true)
     */
    protected $fixe;

    /**
     * @ORM\Column(type="string", length=14, nullable=true)
     */
    protected $portable;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $email;

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
    protected $km;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $comment;

    /**
     * @ORM\OneToMany(targetEntity="DomiGestion\ShoppingBundle\Entity\Shopping", mappedBy="customer")
     */
//    protected $shopping;

    /**
     * @ORM\OneToMany(targetEntity="DomiGestion\MeetingBundle\Entity\Meeting", mappedBy="customer")
     */
    protected $meeting;

    /**
     * @ORM\ManyToOne(targetEntity="DomiGestion\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", nullable=true)
     */
    public $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", nullable=true)
     */
    public $longitude;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default":0})
     */
    protected $pointCadeaux;

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf("%s %s", strtoupper($this->getNom()), $this->getPrenom());
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
     * Set status
     *
     * @param string status
     * @return Customer
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Customer
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Customer
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Customer
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set anniversaire
     *
     * @param \DateTime $anniversaire
     * @return Meeting
     */
    public function setAnniversaire($anniversaire)
    {
        $this->anniversaire = $anniversaire;

        return $this;
    }

    /**
     * Get anniversaire
     *
     * @return \DateTime
     */
    public function getAnniversaire()
    {
        return $this->anniversaire;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Customer
     */
    public function setFixe($fixe)
    {
        $this->fixe = $fixe;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getFixe()
    {
        return $this->fixe;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Customer
     */
    public function setPortable($portable)
    {
        $this->portable = $portable;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getPortable()
    {
        return $this->portable;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * Set km
     *
     * @param string $city
     * @return Customer
     */
    public function setKm($km)
    {
        $this->km = $km;

        return $this;
    }

    /**
     * Get km
     *
     * @return string
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Customer
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set pointCadeaux
     *
     * @param string $pointCadeaux
     * @return Customer
     */
    public function setPointCadeaux($pointCadeaux)
    {
        $this->pointCadeaux = $pointCadeaux;

        return $this;
    }

    /**
     * Get pointCadeaux

     *
     * @return string
     */
    public function getPointCadeaux()
    {
        return $this->pointCadeaux;
    }

    /**
     * Google Map Address
     *
     * @return string
     */
    public function getInlineAddress()
    {
        return sprintf("%s,%s %s", $this->getAddress(), $this->getCp(), $this->getCity());
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->shopping = new \Doctrine\Common\Collections\ArrayCollection();
        $this->meeting = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add meeting
     *
     * @param \DomiGestion\MeetingBundle\Entity\Meeting $meeting
     * @return Customer
     */
    public function addMeeting(\DomiGestion\MeetingBundle\Entity\Meeting $meeting)
    {
        $this->meeting[] = $meeting;

        return $this;
    }

    /**
     * Remove meeting
     *
     * @param \DomiGestion\MeetingBundle\Entity\Meeting $meeting
     */
    public function removeMeeting(\DomiGestion\MeetingBundle\Entity\Meeting $meeting)
    {
        $this->meeting->removeElement($meeting);
    }

    /**
     * Get meeting
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMeeting()
    {
        return $this->meeting;
    }

    /**
     * Set user
     *
     * @param \DomiGestion\UserBundle\Entity\User $user
     * @return Customer
     */
    public function setUser(\DomiGestion\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \DomiGestion\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Fiche
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Fiche
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}
