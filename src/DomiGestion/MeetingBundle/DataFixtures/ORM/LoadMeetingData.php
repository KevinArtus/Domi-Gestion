<?php

namespace src\DomiGestion\MeetingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DomiGestion\MeetingBundle\Entity\Meeting;

/**
 * Class LoadMeetingData
 * @package src\DomiGestion\MeetingBundle\DataFixtures\ORM
 */
class LoadMeetingData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $meeting1 = new Meeting();
        $meeting1->setDate(new \DateTime('2016/11/16'));
        $meeting1->setAddress($this->getReference('customer1')->getAddress());
        $meeting1->setCp($this->getReference('customer1')->getCp());
        $meeting1->setCity($this->getReference('customer1')->getCity());
        $meeting1->setNbPersons(15);
        $meeting1->setNbKm(93);
        $meeting1->setMontantKm($this->getReference('user')->getTauxKm()*$meeting1->getNbKm());
        $meeting1->setMontantTtc(1854.80);
        $meeting1->setMontantHt(1516.78);
        $meeting1->setProfit(338.02);
        $meeting1->setHostess($this->getReference('customer1'));
        $meeting1->setUser($this->getReference('user'));
        $this->getReference('user')->setSalary($this->getReference('user')->getSalary() + $meeting1->getProfit());
        $manager->persist($meeting1);
        $manager->persist($this->getReference('user'));
        $manager->flush();

        $meeting2 = new Meeting();
        $meeting2->setDate(new \DateTime('2012/11/12'));
        $meeting2->setAddress($this->getReference('customer1')->getAddress());
        $meeting2->setCp($this->getReference('customer1')->getCp());
        $meeting2->setCity($this->getReference('customer1')->getCity());
        $meeting2->setNbPersons(12);
        $meeting2->setNbKm(93);
        $meeting2->setMontantKm($this->getReference('user')->getTauxKm()*$meeting2->getNbKm());
        $meeting2->setMontantTtc(1097.10);
        $meeting2->setMontantHt(920.72);
        $meeting2->setProfit(176.38);
        $meeting2->setHostess($this->getReference('customer1'));
        $meeting2->setUser($this->getReference('user'));
        $this->getReference('user')->setSalary($this->getReference('user')->getSalary() + $meeting2->getProfit());
        $manager->persist($meeting2);
        $manager->flush();

        $meeting3 = new Meeting();
        $meeting3->setDate(new \DateTime('2016/12/09'));
        $meeting3->setAddress($this->getReference('customer2')->getAddress());
        $meeting3->setCp($this->getReference('customer2')->getCp());
        $meeting3->setCity($this->getReference('customer2')->getCity());
        $meeting3->setNbPersons(9);
        $meeting3->setNbKm(4);
        $meeting3->setMontantKm($this->getReference('user')->getTauxKm()*$meeting3->getNbKm());
        $meeting3->setMontantTtc(718.40);
        $meeting3->setMontantHt(338.36);
        $meeting3->setProfit(380.04);
        $meeting3->setHostess($this->getReference('customer2'));
        $meeting3->setUser($this->getReference('user'));
        $this->getReference('user')->setSalary($this->getReference('user')->getSalary() + $meeting3->getProfit());
        $manager->persist($meeting3);
        $manager->flush();

        $meeting4 = new Meeting();
        $meeting4->setDate(new \DateTime('2016/12/09'));
        $meeting4->setAddress($this->getReference('customer3')->getAddress());
        $meeting4->setCp($this->getReference('customer3')->getCp());
        $meeting4->setCity($this->getReference('customer3')->getCity());
        $meeting4->setNbPersons(3);
        $meeting4->setNbKm(14);
        $meeting4->setMontantKm($this->getReference('user')->getTauxKm()*$meeting4->getNbKm());
        $meeting4->setMontantTtc(435.60);
        $meeting4->setMontantHt(366.00);
        $meeting4->setProfit(69.60);
        $meeting4->setHostess($this->getReference('customer3'));
        $meeting4->setUser($this->getReference('user'));
        $this->getReference('user')->setSalary($this->getReference('user')->getSalary() + $meeting4->getProfit());
        $manager->persist($meeting4);
        $manager->flush();

        $meeting5 = new Meeting();
        $meeting5->setDate(new \DateTime('2017/01/14'));
        $meeting5->setAddress($this->getReference('customer4')->getAddress());
        $meeting5->setCp($this->getReference('customer4')->getCp());
        $meeting5->setCity($this->getReference('customer4')->getCity());
        $meeting5->setNbPersons(5);
        $meeting5->setNbKm(16);
        $meeting5->setMontantKm($this->getReference('user')->getTauxKm()*$meeting5->getNbKm());
        $meeting5->setMontantTtc(629.20);
        $meeting5->setMontantHt(537.86);
        $meeting5->setProfit(91.34);
        $meeting5->setHostess($this->getReference('customer4'));
        $meeting5->setUser($this->getReference('user'));
        $this->getReference('user')->setSalary($this->getReference('user')->getSalary() + $meeting5->getProfit());
        $manager->persist($meeting5);
        $manager->flush();

        $meeting6 = new Meeting();
        $meeting6->setDate(new \DateTime('2017/01/17'));
        $meeting6->setAddress($this->getReference('customer5')->getAddress());
        $meeting6->setCp($this->getReference('customer5')->getCp());
        $meeting6->setCity($this->getReference('customer5')->getCity());
        $meeting6->setNbPersons(7);
        $meeting6->setNbKm(22);
        $meeting6->setMontantKm($this->getReference('user')->getTauxKm()*$meeting6->getNbKm());
        $meeting6->setMontantTtc(652.80);
        $meeting6->setMontantHt(478.77);
        $meeting6->setProfit(174.03);
        $meeting6->setHostess($this->getReference('customer5'));
        $meeting6->setUser($this->getReference('user'));
        $this->getReference('user')->setSalary($this->getReference('user')->getSalary() + $meeting6->getProfit());
        $manager->persist($meeting6);
        $manager->flush();

    }

    public function getOrder()
    {
        return 3;
    }
}
