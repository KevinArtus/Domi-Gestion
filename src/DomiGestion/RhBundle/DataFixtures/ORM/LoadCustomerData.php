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
        $customer1->setUser($this->getReference('user'));
        $customer1->setSexe('Femme');
        $customer1->setNom('Lefebvre');
        $customer1->setPrenom('Éloïse');
        $customer1->setPortable('0712167082');
        $customer1->setEmail('eloiselefebvre@yopmail.com');
        $customer1->setAddress('136 Rue Gauguet');
        $customer1->setCp('39800');
        $customer1->setCity('Le Viseney');
        $manager->persist($customer1);
        $manager->flush();

        $customer2 = new Customer();
        $customer2->setUser($this->getReference('user'));
        $customer2->setSexe('Homme');
        $customer2->setNom('Rocher');
        $customer2->setPrenom('Dimitri');
        $customer2->setPortable('0716187177');
        $customer2->setEmail('dimitrirocher@yopmail.com');
        $customer2->setAddress('267 Rue Greffulhe');
        $customer2->setCp('54119');
        $customer2->setCity('Domgermain');
        $manager->persist($customer2);
        $manager->flush();

        $customer3 = new Customer();
        $customer3->setUser($this->getReference('user'));
        $customer3->setSexe('Homme');
        $customer3->setNom('Berthelot');
        $customer3->setPrenom('Noah');
        $customer3->setPortable('0782079224');
        $customer3->setEmail('noahberthelot@yopmail.com');
        $customer3->setAddress('9 Avenue du Général-Dodds');
        $customer3->setCp('12150');
        $customer3->setCity('Sévérac-le-Château');
        $manager->persist($customer3);
        $manager->flush();

        $customer4 = new Customer();
        $customer4->setUser($this->getReference('user'));
        $customer4->setSexe('Femme');
        $customer4->setNom('Bouvier');
        $customer4->setPrenom('Élise');
        $customer4->setPortable('0779493539');
        $customer4->setEmail('elisebouvier@yopmail.com');
        $customer4->setAddress('248 Rue Alasseur');
        $customer4->setCp('02360');
        $customer4->setCity('Saint-Clément');
        $manager->persist($customer4);
        $manager->flush();

        $customer5 = new Customer();
        $customer5->setUser($this->getReference('user'));
        $customer5->setSexe('Femme');
        $customer5->setNom('Petit');
        $customer5->setPrenom('Julia');
        $customer5->setPortable('0792524210');
        $customer5->setEmail('juliapetit@yopmail.com');
        $customer5->setAddress('66 Rue Gabriel-Vicaire');
        $customer5->setCp('01280');
        $customer5->setCity('Prévessin-Moens');
        $manager->persist($customer5);
        $manager->flush();

        $customer6 = new Customer();
        $customer6->setUser($this->getReference('user'));
        $customer6->setSexe('Homme');
        $customer6->setNom('Marques');
        $customer6->setPrenom('Baptiste');
        $customer6->setPortable('0729840498');
        $customer6->setEmail('baptistemarques@yopmail.com');
        $customer6->setAddress('135 Rue Jacques-Offenbach');
        $customer6->setCp('74320');
        $customer6->setCity('Sévrier');
        $manager->persist($customer6);
        $manager->flush();

        $customer7 = new Customer();
        $customer7->setUser($this->getReference('user'));
        $customer7->setSexe('Homme');
        $customer7->setNom('Fortin');
        $customer7->setPrenom('Roméo');
        $customer7->setPortable('0722741066');
        $customer7->setEmail('romeofortin@yopmail.com');
        $customer7->setAddress('296 Rue Dulac');
        $customer7->setCp('63260');
        $customer7->setCity('Chazelles');
        $manager->persist($customer7);
        $manager->flush();

        $customer8 = new Customer();
        $customer8->setUser($this->getReference('user'));
        $customer8->setSexe('Femme');
        $customer8->setNom('Legendre');
        $customer8->setPrenom('Margaux');
        $customer8->setPortable('0770760982');
        $customer8->setEmail('margauxlegendre@yopmail.com');
        $customer8->setAddress('116 Rue du Dessous-des-Berges');
        $customer8->setCp('26500');
        $customer8->setCity('Bourg-lès-Valence');
        $manager->persist($customer8);
        $manager->flush();

        $customer9 = new Customer();
        $customer9->setUser($this->getReference('user'));
        $customer9->setSexe('Femme');
        $customer9->setNom('Dubois');
        $customer9->setPrenom('Laura');
        $customer9->setPortable('0749292420');
        $customer9->setEmail('lauradubois@yopmail.com');
        $customer9->setAddress('145 Rue des Carmes');
        $customer9->setCp('31850');
        $customer9->setCity('Montrabé');
        $manager->persist($customer9);
        $manager->flush();

        $customer10 = new Customer();
        $customer10->setUser($this->getReference('user'));
        $customer10->setSexe('Femme');
        $customer10->setNom('Lebreton');
        $customer10->setPrenom('Françoise');
        $customer10->setPortable('0781425371');
        $customer10->setEmail('francoiselebreton@yopmail.com');
        $customer10->setAddress('108 Rue Fernand-Pelloutier');
        $customer10->setCp('50630');
        $customer10->setCity('Videcosville');
        $manager->persist($customer10);
        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}
