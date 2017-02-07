<?php

namespace DomiGestion\RhBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

/**
 * Class CustomerType
 * @package DomiGestion\RhBundle\Form
 */
class CustomerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sexe', ChoiceType::class, array(
                "label" => "DomiGestionRhBundle.customers.page_new_edit.sexe",
                'choices' => array(
                    'DomiGestionRhBundle.customers.page_new_edit.sexe_woman' => 'F',
                    "DomiGestionRhBundle.customers.page_new_edit.sexe_man"   => 'H')
                )
            )
            ->add('anniversaire', DateType::class, array("widget" => "single_text", "label" => "DomiGestionRhBundle.customers.page_new_edit.birthday", "format" => "dd/MM/yyyy"))
            ->add('status', TextType::class, array("label" => "DomiGestionRhBundle.customers.page_new_edit.status"))
            ->add('km', TextType::class, array("label" => "DomiGestionRhBundle.customers.page_new_edit.km"))
            ->add('comment', TextType::class, array("label" => "DomiGestionRhBundle.customers.page_new_edit.comment"))
            ->add('nom', TextType::class, array("label" => "DomiGestionRhBundle.customers.page_new_edit.firstName"))
            ->add('prenom', TextType::class, array("label" => "DomiGestionRhBundle.customers.page_new_edit.lastName"))
            ->add('fixe', TextType::class, array(
                "label" => "DomiGestionRhBundle.customers.page_new_edit.fixe",
                'required' => false
                )
            )
            ->add('portable', TextType::class, array(
                "label" => "DomiGestionRhBundle.customers.page_new_edit.mobile",
                'required' => false
                )
            )
            ->add('email', EmailType::class, array(
                "label" => "DomiGestionRhBundle.customers.page_new_edit.email",
                'required' => false
                )
            )
            ->add('address', TextType::class, array(
                "label" => "DomiGestionRhBundle.customers.page_new_edit.address",
                'required' => false
                )
            )
            ->add('cp', TextType::class, array(
                "label" => "DomiGestionRhBundle.customers.page_new_edit.postalCode",
                'required' => false
                )
            )
            ->add('city', TextType::class, array(
                "label" => "DomiGestionRhBundle.customers.page_new_edit.city",
                'required' => false
                )
            )
            ->add('save', SubmitType::class, array('label' => 'Create'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DomiGestion\RhBundle\Entity\Customer'
        ));
    }
}
