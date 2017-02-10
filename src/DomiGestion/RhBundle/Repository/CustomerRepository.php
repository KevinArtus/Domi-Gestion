<?php

namespace DomiGestion\RhBundle\Repository;

use Doctrine\ORM\EntityRepository as EntityRepository;

/**
 * Class CustomerRepository
 * @package DomiGestion\RhBundle\Repository
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
            ->where('c INSTANCE OF :status')
            ->andWhere('c.user = :user')
            ->setParameter('user', $user)
            ->setParameter('status', $status)
            ->orderBy('c.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
