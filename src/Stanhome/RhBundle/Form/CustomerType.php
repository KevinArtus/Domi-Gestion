<?php
namespace Stanhome\RhBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('sexe', 'choice', array("label" => "StanhomeRhBundle.customers.page_new_edit.sexe", 'choices' => array('F' => "Femme", "H" => "Homme")))
            ->add('nom', 'text', array("label" => "StanhomeRhBundle.customers.page_new_edit.firstName"))
            ->add('prenom', 'text', array("label" => "StanhomeRhBundle.customers.page_new_edit.lastName"))
            ->add('fixe', 'text', array(
                "label" => "StanhomeRhBundle.customers.page_new_edit.fixe",
                'required' => false
                )
            )
            ->add('portable', 'text', array(
                "label" => "StanhomeRhBundle.customers.page_new_edit.mobile",
                'required' => false
                )
            )
            ->add('email', 'email', array(
                "label" => "StanhomeRhBundle.customers.page_new_edit.email",
                'required' => false
                )
            )
            ->add('address', 'text', array(
                "label" => "StanhomeRhBundle.customers.page_new_edit.address",
                'required' => false
                )
            )
            ->add('cp', 'text', array(
                "label" => "StanhomeRhBundle.customers.page_new_edit.postalCode",
                'required' => false
                )
            )
            ->add('city', 'text', array(
                "label" => "StanhomeRhBundle.customers.page_new_edit.city",
                'required' => false
                )
            );
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Stanhome\RhBundle\Entity\Customer'
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