<?php

namespace Stanhome\RHBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Stanhome\RHBundle\Entity\Customer;

/**
 * Class LoadCustomerData
 * @package Stanhome\RHBundle\DataFixtures\ORM
 */
class LoadCustomerData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
    * {@inheritDoc}
    */
    public function load(ObjectManager $manager)
    {
        $customer1 = new Customer();
        $customer1->setSexe('Homme');
        $customer1->setNom('Artus');
        $customer1->setPrenom('Kévin');
        $customer1->setTel('0600000000');
        $customer1->setEmail('kevinar9@hotmail.fr');
        $customer1->setaddress('46 rue Jules Ferry');
        $customer1->setCp('14120');
        $customer1->setCity('Mondeville');
        $manager->persist($customer1);


        $customer2 = new Customer();
        $customer2->setSexe('Homme');
        $customer2->setNom('Artus');
        $customer2->setPrenom('Quentin');
        $customer2->setTel('0699999999');
        $customer2->setEmail('quentinar@hotmail.fr');
        $customer2->setaddress('76 allée des charmilles');
        $customer2->setCp('86130');
        $customer2->setCity('Dissay');
        $manager->persist($customer2);


        $customer3 = new Customer();
        $customer3->setSexe('Femme');
        $customer3->setNom('Van Wynsberghe');
        $customer3->setPrenom('Charlène');
        $customer3->setTel('0610101010');
        $customer3->setEmail('vw.charlene@live.fr');
        $customer3->setaddress('46 rue Jules Ferry');
        $customer3->setCp('14120');
        $customer3->setCity('Mondeville');
        $manager->persist($customer3);

        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}
