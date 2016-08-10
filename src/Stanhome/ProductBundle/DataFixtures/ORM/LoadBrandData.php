<?php

namespace Stanhome\ProductBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Stanhome\ProductBundle\Entity\Brand;

/**
 * Class LoadBrandData
 * @package Stanhome\ProductBundle\DataFixtures\ORM
 */
class LoadBrandData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $brand1 = new Brand();
        $brand1->setLibelle('Stanhome Produits d\'entretien ménager');
        $manager->persist($brand1);

        $brand2 = new Brand();
        $brand2->setLibelle('Stanhome Family Expert');
        $manager->persist($brand2);

        $brand3 = new Brand();
        $brand3->setLibelle('Kiotis');
        $manager->persist($brand3);

        $manager->flush();

        $this->addReference('stanhome-produit', $brand1);
        $this->addReference('stanhome-family', $brand2);
        $this->addReference('kiotis', $brand3);
    }

    public function getOrder()
    {
        return 1;
    }
}
