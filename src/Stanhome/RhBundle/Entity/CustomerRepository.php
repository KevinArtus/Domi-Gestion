<?php
namespace Stanhome\RhBundle\Entity;

use Doctrine\ORM\EntityRepository as EntityRepository;

class CustomerRepository extends EntityRepository
{
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