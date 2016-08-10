<?php

namespace Stanhome\ShoppingBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ShoppingRepository extends EntityRepository
{
    public function findAllShoppingByCustomerOrderByDate($user, $customer)
    {
        return $this->createQueryBuilder('s')
            ->where('s.user >= :user')
            ->andWhere('s.customer = :customer')
            ->setParameter('user', $user)
            ->setParameter('customer', $customer)
            ->orderBy('s.dateorder', 'desc')
            ->getQuery()
            ->getResult();
    }
}
