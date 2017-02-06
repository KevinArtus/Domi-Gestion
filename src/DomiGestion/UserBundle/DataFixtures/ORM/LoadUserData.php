<?php

namespace src\DomiGestion\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
/**
 * Class LoadUserData
 * @package src\DomiGestion\UserBundle\DataFixtures\ORM
 */
class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $test_password = 'test';

        $userManager = $this->container->get('fos_user.user_manager');
        $factory = $this->container->get('security.encoder_factory');

        $user = $userManager->createUser();
        $user->setSalary(0.00);
        $user->setTauxKm(0.5610);
        $user->setUsername('Test');
        $user->setEmail('test@gmail.com');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_USER'));
        $encoder = $factory->getEncoder($user);
        $password = $encoder->encodePassword($test_password, $user->getSalt());
        $user->setPassword($password);

        $manager->persist($user);
        $manager->flush();

        $this->addReference('user', $user);
    }

    /**
     * Sets the container.
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }
}
