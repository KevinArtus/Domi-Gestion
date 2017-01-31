<?php

namespace DomiGestion\RhBundle\Form\DataTransformer;

use Doctrine\Common\Persistence\ObjectManager;
use DomiGestion\RhBundle\Entity\Customer;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\Form\Exception\UnexpectedTypeException;

/**
 * Class UserToIdTransformer
 * @package DomiGestion\RhBundle\Form\DataTransformer
 */
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

        $user = $this->om->getRepository('DomiGestionRhBundle:Customer')->findOneBy(array('id' => $id));

        if (null === $user) {
            throw new TransformationFailedException("Customer not found");
        }

        return $user;
    }
}
