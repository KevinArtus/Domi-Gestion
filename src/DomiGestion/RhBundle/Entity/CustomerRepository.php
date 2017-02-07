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
    public function findCustomerByStatus($user, $status)
    {
        return $this->createQueryBuilder('c')
            ->where('c.user = :user')
            ->andWhere('c.status = :status')
            ->setParameter('user', $user)
            ->setParameter('status', $status)
            ->orderBy('c.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
