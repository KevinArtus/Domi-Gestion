<?php

namespace Stanhome\MeetingBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Class MeetingRepository
 * @package Stanhome\MeetingBundle\Entity
 */
class MeetingRepository extends EntityRepository
{
    /**
     * @param User $user
     * @return array
     */
    public function nextMeeting($user)
    {
        return $this->createQueryBuilder('m')
            ->where('m.date >= :date')
            ->andWhere('m.user = :user')
            ->setParameter('date', date('y-m-d'))
            ->setParameter('user', $user)
            ->orderBy('m.date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @param User $user
     * @return array
     */
    public function findMontantKmByUser($user)
    {
        return $this->createQueryBuilder('m')
            ->where('m.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param User $user
     * @return array
     */
    public function findAllMeetingOrderByDate($user)
    {
        return $this->createQueryBuilder('m')
            ->where('m.user >= :user')
            ->setParameter('user', $user)
            ->orderBy('m.date', 'desc')
            ->getQuery()
            ->getResult();
    }

    /**
     * @param User $user
     * @param Customer $customer
     * @return array
     */
    public function findAllMeetingByCustomerOrderByDate($user, $customer)
    {
        return $this->createQueryBuilder('m')
            ->where('m.user >= :user')
            ->andWhere('m.customer = :customer')
            ->setParameter('user', $user)
            ->setParameter('customer', $customer)
            ->orderBy('m.date', 'desc')
            ->getQuery()
            ->getResult();
    }
}
