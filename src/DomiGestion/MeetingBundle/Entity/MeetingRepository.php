<?php

namespace DomiGestion\MeetingBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Class MeetingRepository
 * @package DomiGestion\MeetingBundle\Entity
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
     * FInd pasted meetings
     * @param User $user
     * @return array
     */
    public function findPastMeeting($user)
    {
        return $this->createQueryBuilder('m')
            ->where('m.user >= :user')
            ->andWhere('m.date < :date')
            ->setParameter('user', $user)
            ->setParameter('date', date('y-m-d'))
            ->orderBy('m.date', 'desc')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find meetings to come
     * @param User $user
     * @return array
     */
    public function findMeetingToCome($user)
    {
        return $this->createQueryBuilder('m')
            ->where('m.user >= :user')
            ->andWhere('m.date >= :date')
            ->setParameter('user', $user)
            ->setParameter('date', date('y-m-d'))
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
