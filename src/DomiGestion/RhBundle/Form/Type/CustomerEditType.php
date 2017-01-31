<?php

namespace DomiGestion\RhBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class CustomerEditType
 * @package DomiGestion\RhBundle\Form
 */
class CustomerEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sexe', 'choice', array("label" => "DomiGestionRhBundle.customers.page_new_edit.sexe", 'choices' => array('F' => "Femme", "H" => "Homme")))
            ->add('nom', 'text', array("label" => "DomiGestionRhBundle.customers.page_new_edit.firstName"))
            ->add('prenom', 'text', array("label" => "DomiGestionRhBundle.customers.page_new_edit.lastName"))
            ->add('fixe', 'text', array(
                "label" => "DomiGestionRhBundle.customers.page_new_edit.fixe",
                'required' => false
                )
            )
            ->add('portable', 'text', array(
                "label" => "DomiGestionRhBundle.customers.page_new_edit.mobile",
                'required' => false
                )
            )
            ->add('email', 'text', array(
                "label" => "DomiGestionRhBundle.customers.page_new_edit.email",
                'required' => false
                )
            )
            ->add('address', 'text', array(
                "label" => "DomiGestionRhBundle.customers.page_new_edit.address",
                'required' => false
                )
            )
            ->add('cp', 'text', array(
                "label" => "DomiGestionRhBundle.customers.page_new_edit.postalCode",
                'required' => false
                )
            )
            ->add('city', 'text', array(
                "label" => "DomiGestionRhBundle.customers.page_new_edit.city",
                'required' => false
                )
            );
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DomiGestion\RhBundle\Entity\Customer'
        ));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'customer';
    }
}
