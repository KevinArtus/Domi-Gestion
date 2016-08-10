<?php

namespace Stanhome\RhBundle\Form\DataTransformer;


use Doctrine\Common\Persistence\ObjectManager;
use Stanhome\RhBundle\Entity\Customer;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\Form\Exception\UnexpectedTypeException;

class UserToIdTransformer implements DataTransformerInterface {
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

    public function transform($user) {
        if (null === $user)
            return "";

        if (!$user instanceof Customer)
            throw new UnexpectedTypeException($user, 'Entity Customer');

        return $user->getId();
    }

    public function reverseTransform($id) {
console.log($id);        if (!$id)
            return null;

        $user = $this->om->getRepository('StanhomeRhBundle:Customer')->findOneBy(array('id' => $id));

        if (null === $user) {
            throw new TransformationFailedException("Customer not found");
        }

        return $user;
    }
}