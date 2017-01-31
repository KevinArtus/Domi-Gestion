<?php

namespace DomiGestion\RhBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class CustomerEditType
 * @package DomiGestion\RhBundle\Form
 */
class CustomerEditType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return CustomerType::class;
    }
}
