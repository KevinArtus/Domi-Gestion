<?php

namespace Stanhome\RhBundle\Security;

use Stanhome\PortalBundle\Yaml\YamlRetriever;
use Symfony\Component\Validator\Exception\InvalidArgumentException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityManager;
use BeSimple\SsoAuthBundle\Security\Core\User\UserFactoryInterface;
use Stanhome\RhBundle\Entity\Customer;

/**
 * Class CustomerProvider
 * @package Stanhome\RhBundle\Security
 */
class CustomerProvider implements UserProviderInterface, UserFactoryInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * @var \Stanhome\PortalBundle\Yaml\YamlRetriever
     */
    private $yamlRetriever;

    /**
     * CustomerProvider constructor.
     * @param EntityManager $em
     * @param YamlRetriever $yamlRetriever
     */
    public function __construct(EntityManager $em, YamlRetriever $yamlRetriever)
    {
        $this->em = $em;
        $this->yamlRetriever = $yamlRetriever;
    }

    /**
     * @param string $nom
     * @return mixed
     */
    public function loadUserByUsername($nom)
    {
        $entity = $this->em
            ->createQueryBuilder()
            ->select('u')
            ->from("StanhomeRhBundle:Customer", "u")
            ->where('u.nom = :nom')
            ->setParameter('nom', $nom)
            ->getQuery()
            ->getOneOrNullResult();
        if ($entity === null)
            throw new UsernameNotFoundException('Unable to find the customer entity');

        return $entity;
    }

    /**
     * @param UserInterface $user
     * @return mixed
     */
    public function refreshUser(UserInterface $user)
    {
  	if (!$user instanceof Customer)
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));

        return $this->loadUserByUsername($user->getNom());
    }

    /**
     * @param string $class
     * @return bool
     */
    public function supportsClass($class)
    {
        return $class === "Stanhome/RhBundle/Security/CustomerProvider";
    }

    /**
     * @param $username
     * @param array $rolesStr
     * @param array $attributes
     * @return mixed
     */
    public function createUser($username, array $rolesStr, array $attributes)
    {
        if (!array_key_exists("cas:first_name", $attributes) || !array_key_exists("cas:last_name", $attributes) || !array_key_exists("cas:email", $attributes))
            throw new InvalidArgumentException("Missing CAS parameters (please check the AD structure)");

        if (array_key_exists("cas:language", $attributes))
            $language = $attributes["cas:language"];
        else
            $language = $this->yamlRetriever->getValueFromApp("parameters.yml", "parameters.fallback_locale", "en");

        $entity = $this->em->getRepository("StanhomeRhBundle:Customer")->createCustomer($username, $attributes["cas:first_name"], $attributes["cas:last_name"], $attributes["cas:email"], $rolesStr, $language);
        return $entity;
    }
}
