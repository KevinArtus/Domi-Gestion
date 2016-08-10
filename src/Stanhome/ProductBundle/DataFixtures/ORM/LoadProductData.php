<?php

namespace Stanhome\ProductBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Stanhome\ProductBundle\Entity\Product;

/**
 * Class LoadProductData
 * @package Stanhome\ProductBundle\DataFixtures\ORM
 */
class LoadProductData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
    * {@inheritDoc}
    */
    public function load(ObjectManager $manager)
    {
        $product1 = new Product();
        $product1->setReference('20368');
        $product1->setLibelle('Aquilaun 1000ml');
        $product1->setPrice('13.80');
        $product1->setCategory($this->getReference('mon-linge'));
        $manager->persist($product1);

        $product1 = new Product();
        $product1->setReference('20094');
        $product1->setLibelle('Aquilaun 750ml');
        $product1->setPrice('11.50');
        $product1->setCategory($this->getReference('mon-linge'));
        $manager->persist($product1);

        $product1 = new Product();
        $product1->setReference('42266');
        $product1->setLibelle('Black Wash 750ml');
        $product1->setPrice('11.50');
        $product1->setCategory($this->getReference('mon-linge'));
        $manager->persist($product1);

        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}
