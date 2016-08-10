<?php

namespace Stanhome\ProductBundle\Entity;

use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

/**
 * Class BrandRepository
 * @package Stanhome\ProductBundle\Entity
 */
class BrandRepository extends EntityRepository {

    private function brandCategory($id)
    {
        $qb = $this->createQueryBuilder("b")
            ->select('COUNT(b)')
            ->where("b. = :token")
            ->setMaxResults(1)
            ->setParameter("id", $id);

        return (bool) $qb->getQuery()->getSingleScalarResult();
    }

    public function getUnusedToken()
    {
        do {
            $token = Tools::getRandomString(15, "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789");
        } while ($this->tokenExists($token));

        return $token;
    }
}
