<?php

namespace DomiGestion\RhBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Class HostessType
 * @package DomiGestion\RhBundle\Form\Type
 */
class HostessType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('anniversaire', DateType::class, array(
                "widget" => "single_text",
                "label" => "DomiGestionRhBundle.customers.page_new_edit.birthday",
                "format" => "dd/MM/yyyy"
                )
            )

            ->add('km', TextType::class, array(
                    "label" => "DomiGestionRhBundle.customers.page_new_edit.km",
                    'required' => false
                )
            )
            ->add('comment', TextType::class, array(
                    "label" => "DomiGestionRhBundle.customers.page_new_edit.comment",
                    'required' => false
                )
            )
            ->add('preference', TextType::class, array(
                    "label" => "DomiGestionRhBundle.customers.page_new_edit.preference",
                    'required' => false
                )
            );
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return CustomerType::class;
    }
}
