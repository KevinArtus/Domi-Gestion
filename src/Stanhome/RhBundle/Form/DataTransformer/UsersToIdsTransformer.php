<?php

namespace Stanhome\RhBundle\Form\DataTransformer;


use Doctrine\Common\Persistence\ObjectManager;
use Stanhome\RhBundle\Entity\Customer;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\Form\Exception\UnexpectedTypeException;

class UsersToIdsTransformer implements DataTransformerInterface {
    /**
     * @var ObjectManager
     */
    private $om;

    /**
     * @param ObjectManager $om
     */
    public function __construct(ObjectManager $om) {
        $this->om = $om;
    }

    public function transform($users) {
        if (null === $users)
            return "";

        if (!is_array($users) && !is_a($users, "Doctrine\ORM\PersistentCollection"))
            throw new UnexpectedTypeException($users, 'Array users');

        $usersString = "";
        foreach ($users as $user) {
            if (!$user instanceof Customer)
                throw new UnexpectedTypeException($user, 'Entity User');

            if (empty($usersString))
                $usersString .= $user->getId();
            else
                $usersString .= '-'.$user->getId();
        }

        return $usersString;
    }

    public function reverseTransform($ids) {
        if (!$ids)
            return null;

        if (!is_string($ids))
            throw new UnexpectedTypeException($ids, 'String ids');

        $idsArray = explode('-', $ids);

        $users = array();
        foreach ($idsArray as $id) {
            $user = $this->om->getRepository('StanhomeRhBundle:Customer')->findOneBy(array('id' => $id));

            if (null === $user)
                throw new TransformationFailedException("Customer not found");

            $users[] = $user;
        }

        return $users;
    }
}