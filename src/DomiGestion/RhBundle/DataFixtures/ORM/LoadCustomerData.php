<?php

namespace DomiGestion\RHBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DomiGestion\RhBundle\Entity\Client;
use DomiGestion\RHBundle\Entity\Customer;
use DomiGestion\RhBundle\Entity\Hostess;

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
        $customer1 = new Hostess();
        $customer1->setUser($this->getReference('user'));
        $customer1->setAnniversaire(new \DateTime('1974/11/16'));
        $customer1->setSexe('Femme');
        $customer1->setNom('Lefebvre');
        $customer1->setPrenom('Éloïse');
        $customer1->setPortable('0712167082');
        $customer1->setEmail('eloiselefebvre@yopmail.com');
        $customer1->setAddress('136 Rue Gauguet');
        $customer1->setCp('39800');
        $customer1->setCity('Le Viseney');
        $customer1->setComment('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sem dolor. Praesent pretium a dui non condimentum. Donec vel vestibulum ligula.');
        $manager->persist($customer1);
        $manager->flush();
        $this->addReference('customer1', $customer1);


        $customer2 = new Hostess();
        $customer2->setUser($this->getReference('user'));
        $customer2->setAnniversaire(new \DateTime('1945/02/22'));
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
        $this->addReference('customer2', $customer2);


        $customer3 = new Hostess();
        $customer3->setUser($this->getReference('user'));
        $customer3->setAnniversaire(new \DateTime('1955/11/09'));
        $customer3->setSexe('Homme');
        $customer3->setNom('Berthelot');
        $customer3->setPrenom('Noah');
        $customer3->setPortable('0782079224');
        $customer3->setEmail('noahberthelot@yopmail.com');
        $customer3->setAddress('9 Avenue du Général-Dodds');
        $customer3->setCp('12150');
        $customer3->setCity('Sévérac-le-Château');
        $customer3->setComment('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sem dolor. Praesent pretium a dui non condimentum. Donec vel vestibulum ligula.');
        $manager->persist($customer3);
        $manager->flush();
        $this->addReference('customer3', $customer3);

        $customer4 = new Hostess();
        $customer4->setUser($this->getReference('user'));
        $customer4->setAnniversaire(new \DateTime('1959/01/18'));
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
        $this->addReference('customer4', $customer4);

        $customer5 = new Hostess();
        $customer5->setUser($this->getReference('user'));
        $customer5->setAnniversaire(new \DateTime('1982/12/03'));
        $customer5->setSexe('Femme');
        $customer5->setNom('Petit');
        $customer5->setPrenom('Julia');
        $customer5->setPortable('0792524210');
        $customer5->setEmail('juliapetit@yopmail.com');
        $customer5->setAddress('66 Rue Gabriel-Vicaire');
        $customer5->setCp('01280');
        $customer5->setCity('Prévessin-Moens');
        $customer5->setComment('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sem dolor. Praesent pretium a dui non condimentum. Donec vel vestibulum ligula.');
        $manager->persist($customer5);
        $manager->flush();
        $this->addReference('customer5', $customer5);

        $customer6 = new Client();
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

        $customer7 = new Client();
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

        $customer8 = new Client();
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

        $customer9 = new Client();
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

        $customer10 = new Client();
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
