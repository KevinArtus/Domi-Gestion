<?php

namespace DomiGestion\RhBundle\Entity;

use Doctrine\ORM\EntityRepository as EntityRepository;

/**
 * Class CustomerRepository
 * @package DomiGestion\RhBundle\Entity
 */
class CustomerRepository extends EntityRepository
{
    /**
     * @param User $user
     * @return array
     */
    public function findAllOrderByNom($user)
    {
        return $this->createQueryBuilder('c')
            ->where('c.user >= :user')
            ->setParameter('user', $user)
            ->orderBy('c.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
