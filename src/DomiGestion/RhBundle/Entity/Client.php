<?php

namespace DomiGestion\RhBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="DomiGestion\RhBundle\Repository\ClientRepository")
 * @ORM\Table(name="client")
 */
class Client extends Customer
{
    /**
     * @ORM\ManyToOne(targetEntity="DomiGestion\RhBundle\Entity\Hostess", inversedBy="client")
     */
    protected $clientToHostess;

    /**
     * Set clientToHostess
     *
     * @param \DomiGestion\RhBundle\Entity\Hostess $clientToHostess
     *
     * @return Client
     */
    public function setClientToHostess(\DomiGestion\RhBundle\Entity\Hostess $clientToHostess = null)
    {
        $this->clientToHostess = $clientToHostess;

        return $this;
    }

    /**
     * Get clientToHostess
     *
     * @return \DomiGestion\RhBundle\Entity\Hostess
     */
    public function getClientToHostess()
    {
        return $this->clientToHostess;
    }
}
