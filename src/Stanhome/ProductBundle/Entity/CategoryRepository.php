<?php

namespace Stanhome\ProductBundle\Entity;

use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

/**
 * Class CategoryRepository
 * @package Stanhome\ProductBundle\Entity
 */
class CategoryRepository extends EntityRepository {

    public function findByCategorysByBrand($id) {
        $qb = $this->createQueryBuilder("c")
            ->select('libelle')
            ->where('c.brand_id', $id)
            ->setParameter("brand_id", $id);

        return (string) $qb->getQuery()->getResult();
    }

    public function getUnusedToken() {
        do {
            $token = Tools::getRandomString(15, "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789");
        } while ($this->tokenExists($token));

        return $token;
    }
}
