<?php

namespace DomiGestion\RHBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DomiGestion\RHBundle\Entity\Customer;

/**
 * Class LoadCustomerData
 * @package DomiGestion\RHBundle\DataFixtures\ORM
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
        $customer1->setPortable('0600000000');
        $customer1->setEmail('kevinar9@hotmail.fr');
        $customer1->setAddress('46 rue Jules Ferry');
        $customer1->setCp('14120');
        $customer1->setCity('Mondeville');
        $manager->persist($customer1);


        $customer2 = new Customer();
        $customer2->setSexe('Homme');
        $customer2->setNom('Artus');
        $customer2->setPrenom('Quentin');
        $customer2->setPortable('0699999999');
        $customer2->setEmail('quentinar@hotmail.fr');
        $customer2->setAddress('76 allée des charmilles');
        $customer2->setCp('86130');
        $customer2->setCity('Dissay');
        $manager->persist($customer2);


        $customer3 = new Customer();
        $customer3->setSexe('Femme');
        $customer3->setNom('Van Wynsberghe');
        $customer3->setPrenom('Charlène');
        $customer3->setPortable('0610101010');
        $customer3->setEmail('vw.charlene@live.fr');
        $customer3->setAddress('46 rue Jules Ferry');
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