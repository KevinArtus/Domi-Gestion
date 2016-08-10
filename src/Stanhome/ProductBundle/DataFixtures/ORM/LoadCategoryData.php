<?php

namespace Stanhome\ProductBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Stanhome\ProductBundle\Entity\Category;

/**
 * Class LoadCategoryData
 * @package Stanhome\ProductBundle\DataFixtures\ORM
 */
class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $cat1 = new Category();
        $cat1->setLibelle('Mon linge');
        $cat1->setBrand($this->getReference('stanhome-produit'));
        $manager->persist($cat1);

        $cat2 = new Category();
        $cat2->setLibelle('Ma cuisine');
        $cat2->setBrand($this->getReference('stanhome-produit'));
        $manager->persist($cat2);

        $cat3 = new Category();
        $cat3->setLibelle('Ma salle de bains');
        $cat3->setBrand($this->getReference('stanhome-produit'));
        $manager->persist($cat3);

        $cat4 = new Category();
        $cat4->setLibelle('Mes sols');
        $cat4->setBrand($this->getReference('stanhome-produit'));
        $manager->persist($cat4);

        $cat5 = new Category();
        $cat5->setLibelle('Mes vitres');
        $cat5->setBrand($this->getReference('stanhome-produit'));
        $manager->persist($cat5);

        $cat6 = new Category();
        $cat6->setLibelle('Mon ambiance');
        $cat6->setBrand($this->getReference('stanhome-produit'));
        $manager->persist($cat6);

        $cat7 = new Category();
        $cat7->setLibelle('Mes matériaux');
        $cat7->setBrand($this->getReference('stanhome-produit'));
        $manager->persist($cat7);

        $cat8 = new Category();
        $cat8->setLibelle('Ma poussière');
        $cat8->setBrand($this->getReference('stanhome-produit'));
        $manager->persist($cat8);

        $cat9 = new Category();
        $cat9->setLibelle('Ma désinfection');
        $cat9->setBrand($this->getReference('stanhome-produit'));
        $manager->persist($cat9);

        $cat10 = new Category();
        $cat10->setLibelle('Mes gros travaux');
        $cat10->setBrand($this->getReference('stanhome-produit'));
        $manager->persist($cat10);

        $cat11 = new Category();
        $cat11->setLibelle('Mon respect +');
        $cat11->setBrand($this->getReference('stanhome-produit'));
        $manager->persist($cat11);

        $cat12 = new Category();
        $cat12->setLibelle('Derma Care');
        $cat12->setBrand($this->getReference('stanhome-family'));
        $manager->persist($cat12);

        $cat13 = new Category();
        $cat13->setLibelle('Derma Care Sun');
        $cat13->setBrand($this->getReference('stanhome-family'));
        $manager->persist($cat13);

        $cat14 = new Category();
        $cat14->setLibelle('SOS');
        $cat14->setBrand($this->getReference('stanhome-family'));
        $manager->persist($cat14);

        $cat15 = new Category();
        $cat15->setLibelle('Hand Care');
        $cat15->setBrand($this->getReference('stanhome-family'));
        $manager->persist($cat15);

        $cat16 = new Category();
        $cat16->setLibelle('Feet Care');
        $cat16->setBrand($this->getReference('stanhome-family'));
        $manager->persist($cat16);

        $cat17 = new Category();
        $cat17->setLibelle('Oral Care');
        $cat17->setBrand($this->getReference('stanhome-family'));
        $manager->persist($cat17);

        $cat18 = new Category();
        $cat18->setLibelle('Hair Care');
        $cat18->setBrand($this->getReference('stanhome-family'));
        $manager->persist($cat18);

        $cat19 = new Category();
        $cat19->setLibelle('Respect +');
        $cat19->setBrand($this->getReference('stanhome-family'));
        $manager->persist($cat19);

        $cat20 = new Category();
        $cat20->setLibelle('Soins premium');
        $cat20->setBrand($this->getReference('kiotis'));
        $manager->persist($cat20);

        $cat21 = new Category();
        $cat21->setLibelle('Hydratation Jeunesse');
        $cat21->setBrand($this->getReference('kiotis'));
        $manager->persist($cat21);

        $cat22 = new Category();
        $cat22->setLibelle('Vitamine Jeunesse');
        $cat22->setBrand($this->getReference('kiotis'));
        $manager->persist($cat22);

        $cat23 = new Category();
        $cat23->setLibelle('Contrôle Jeunesse');
        $cat23->setBrand($this->getReference('kiotis'));
        $manager->persist($cat23);

        $cat24 = new Category();
        $cat24->setLibelle('Contrôle Jeunesse +');
        $cat24->setBrand($this->getReference('kiotis'));
        $manager->persist($cat24);

        $cat25 = new Category();
        $cat25->setLibelle('Kiotis White');
        $cat25->setBrand($this->getReference('kiotis'));
        $manager->persist($cat25);

        $cat26 = new Category();
        $cat26->setLibelle('SpecificJeunesse');
        $cat26->setBrand($this->getReference('kiotis'));
        $manager->persist($cat26);

        $cat27 = new Category();
        $cat27->setLibelle('Nettoyants');
        $cat27->setBrand($this->getReference('kiotis'));
        $manager->persist($cat27);

        $cat28 = new Category();
        $cat28->setLibelle('Gestes d\'institut');
        $cat28->setBrand($this->getReference('kiotis'));
        $manager->persist($cat28);

        $cat29 = new Category();
        $cat29->setLibelle('Maquillage');
        $cat29->setBrand($this->getReference('kiotis'));
        $manager->persist($cat29);

        $cat30 = new Category();
        $cat30->setLibelle('Parfums');
        $cat30->setBrand($this->getReference('kiotis'));
        $manager->persist($cat30);

        $cat31 = new Category();
        $cat31->setLibelle('Soins hommes');
        $cat31->setBrand($this->getReference('kiotis'));
        $manager->persist($cat31);

        $cat32 = new Category();
        $cat32->setLibelle('Rituels aromatiques');
        $cat32->setBrand($this->getReference('kiotis'));
        $manager->persist($cat32);

        $cat33 = new Category();
        $cat33->setLibelle('Jeunesse soleil');
        $cat33->setBrand($this->getReference('kiotis'));
        $manager->persist($cat33);

        $cat34 = new Category();
        $cat34->setLibelle('Soin corps');
        $cat34->setBrand($this->getReference('kiotis'));
        $manager->persist($cat34);

        $manager->flush();

        $this->addReference('mon-linge', $cat1);
        $this->addReference('ma-cuisine', $cat2);
        $this->addReference('ma-salle-de-bains', $cat3);
        $this->addReference('mes-sols', $cat4);
        $this->addReference('mes-vitres', $cat5);
        $this->addReference('mon-ambiance', $cat6);
        $this->addReference('mes-matériaux', $cat7);
        $this->addReference('ma-poussière', $cat8);
        $this->addReference('ma-désinfection', $cat9);
        $this->addReference('mes-gros-travaux', $cat10);
        $this->addReference('mon-respect+', $cat11);


    }

    public function getOrder()
    {
        return 2;
    }
}
