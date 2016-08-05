<?php

namespace Stanhome\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity(repositoryClass="Stanhome\UserBundle\Entity\UserRepository")
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
     * @ORM\Column(name="incentive", type="integer", nullable=true)
     */
    private $incentive;

    /**
     * @ORM\Column(name="salary", type="decimal", scale=2, nullable=true)
     */
    private $salary;

    /**
     * @ORM\Column(name="tauxkm", type="decimal", scale=4)
     */
    private $tauxKm;

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
        $this->tauxkm = $salary;

        return $this;
    }

    /**
     * Get tauxKm
     *
     * @return decimal
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


//
//    /**
//     * @ORM\Column(name="username", type="string", length=255, unique=true)
//     */
//    private $username;
//
//    /**
//     * @ORM\Column(name="password", type="string", length=255)
//     */
//    private $password;
//
//    /**
//     * @ORM\Column(name="salt", type="string", length=255)
//     */
//    private $salt;
//
//    /**
//     * @ORM\Column(name="roles", type="array")
//     */
//    private $roles = array();
//
//    // Les getters et setters
//
//    public function eraseCredentials()
//    {
//    }
//
//    /**
//     * Get username
//     *
//     * @return string
//     */
//    public function getUsername()
//    {
//        return $this->username;
//    }
//
//    /**
//     * Get salt
//     *
//     * @return string
//     */
//    public function getSalt()
//    {
//        return $this->salt;
//    }
//
//    /**
//     * Get username
//     *
//     * @return string
//     */
//    public function getRoles()
//    {
//        return $this->roles;
//    }
//
//    /**
//     * Get username
//     *
//     * @return string
//     */
//    public function getPassword()
//    {
//        return $this->password;
//    }
//
//    /**
//     * Get id
//     *
//     * @return integer
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
//
//    /**
//     * Set username
//     *
//     * @param string $username
//     * @return User
//     */
//    public function setUsername($username)
//    {
//        $this->username = $username;
//
//        return $this;
//    }
//
//    /**
//     * Set password
//     *
//     * @param string $password
//     * @return User
//     */
//    public function setPassword($password)
//    {
//        $this->password = $password;
//
//        return $this;
//    }
//
//    /**
//     * Set salt
//     *
//     * @param string $salt
//     * @return User
//     */
//    public function setSalt($salt)
//    {
//        $this->salt = $salt;
//
//        return $this;
//    }
//
//    /**
//     * Set roles
//     *
//     * @param array $roles
//     * @return User
//     */
//    public function setRoles($roles)
//    {
//        $this->roles = $roles;
//
//        return $this;
//    }

}
