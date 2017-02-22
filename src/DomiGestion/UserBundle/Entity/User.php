<?php

namespace DomiGestion\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity(repositoryClass="DomiGestion\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $prenom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $incentive;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $salary;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $totalKm;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $totalAmountKm;

    /**
     * @ORM\Column(type="decimal", scale=4, nullable=true)
     */
    private $tauxKm;

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
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
     *
     * @return User
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
     * Get incentive
     *
     * @return string
     */
    public function getIncentive()
    {
        return $this->incentive;
    }

    /**
     * Set incentive
     * @param integer $incentive
     * @return integer
     */
    public function setIncentive($incentive)
    {
        $this->incentive = $incentive;

        return $this;
    }

    /**
     * Get salary
     *
     * @return string
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set salary
     * @param integer $salary
     * @return integer
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get totalKm
     *
     * @return string
     */
    public function getTotalKm()
    {
        return $this->totalKm;
    }

    /**
     * Set totalKm
     * @param integer $totalKm
     * @return integer
     */
    public function setTotalKm($totalKm)
    {
        $this->totalKm = $totalKm;

        return $this;
    }

    /**
     * Get $totalAmountKm
     *
     * @return string
     */
    public function getTotalAmountKm()
    {
        return $this->totalAmountKm;
    }

    /**
     * @param $totalAmountKm
     * @return $this
     */
    public function setTotalAmountKm($totalAmountKm)
    {
        $this->totalAmountKm = $totalAmountKm;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTauxKm()
    {
        return $this->tauxKm;
    }

    /**
     * Set tauxKm
     * @param decimal $tauxKm
     * @return decimal
     */
    public function setTauxKm($tauxKm)
    {
        $this->tauxKm = $tauxKm;

        return $this;
    }

    // OVERRIDE USERNAME
    public function setEmail($email)
    {
        $email = is_null($email) ? '' : $email;
        parent::setEmail($email);
        $this->setUsername($email);

        return $this;
    }
}
