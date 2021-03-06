<?php

namespace DomiGestion\RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="DomiGestion\RhBundle\Repository\HostessRepository")
 * @ORM\Table(name="hostess")
 */
class Hostess extends Customer
{
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $km;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $comment;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $preference;

    /**
     * @ORM\OneToMany(targetEntity="DomiGestion\MeetingBundle\Entity\Meeting", mappedBy="hostess")
     */
    protected $meeting;

    /**
     * @ORM\OneToMany(targetEntity="DomiGestion\RhBundle\Entity\Client", mappedBy="clientToHostess")
     */
    protected $client;

    /**
     * @ORM\ManyToOne(targetEntity="DomiGestion\RhBundle\Entity\Hostess", inversedBy="hostess")
     */
    protected $hostesstoHostess;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default":0})
     */
    protected $pointCadeaux;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $anniversaire;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->meeting = new \Doctrine\Common\Collections\ArrayCollection();
        $this->client = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set km
     *
     * @param integer $km
     *
     * @return Hostess
     */
    public function setKm($km)
    {
        $this->km = $km;

        return $this;
    }

    /**
     * Get km
     *
     * @return integer
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Hostess
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
     * Set preference
     *
     * @param string $preference
     *
     * @return Hostess
     */
    public function setPreference($preference)
    {
        $this->preference = $preference;

        return $this;
    }

    /**
     * Get preference
     *
     * @return string
     */
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     * Set pointCadeaux
     *
     * @param integer $pointCadeaux
     *
     * @return Hostess
     */
    public function setPointCadeaux($pointCadeaux)
    {
        $this->pointCadeaux = $pointCadeaux;

        return $this;
    }

    /**
     * Get pointCadeaux
     *
     * @return integer
     */
    public function getPointCadeaux()
    {
        return $this->pointCadeaux;
    }

    /**
     * Set anniversaire
     *
     * @param \DateTime $anniversaire
     *
     * @return Hostess
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
     * Add meeting
     *
     * @param \DomiGestion\MeetingBundle\Entity\Meeting $meeting
     *
     * @return Hostess
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
     * Add client
     *
     * @param \DomiGestion\RhBundle\Entity\Client $client
     *
     * @return Hostess
     */
    public function addClient(\DomiGestion\RhBundle\Entity\Client $client)
    {
        $this->client[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \DomiGestion\RhBundle\Entity\Client $client
     */
    public function removeClient(\DomiGestion\RhBundle\Entity\Client $client)
    {
        $this->client->removeElement($client);
    }

    /**
     * Get client
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set hostesstoHostess
     *
     * @param \DomiGestion\RhBundle\Entity\Hostess $hostesstoHostess
     *
     * @return Hostess
     */
    public function setHostesstoHostess(\DomiGestion\RhBundle\Entity\Hostess $hostesstoHostess = null)
    {
        $this->hostesstoHostess = $hostesstoHostess;

        return $this;
    }

    /**
     * Get hostesstoHostess
     *
     * @return \DomiGestion\RhBundle\Entity\Hostess
     */
    public function getHostesstoHostess()
    {
        return $this->hostesstoHostess;
    }
}
