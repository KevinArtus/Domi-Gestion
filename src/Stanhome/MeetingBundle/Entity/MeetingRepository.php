<?php

namespace Stanhome\MeetingBundle\Entity;

use Doctrine\ORM\EntityRepository;

class MeetingRepository extends EntityRepository
{
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

    public function findMontantKmByUser($user)
    {
        return $this->createQueryBuilder('m')
            ->where('m.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }

    public function findAllMeetingOrderByDate($user)
    {
        return $this->createQueryBuilder('m')
            ->where('m.user >= :user')
            ->setParameter('user', $user)
            ->orderBy('m.date', 'desc')
            ->getQuery()
            ->getResult();
    }

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
