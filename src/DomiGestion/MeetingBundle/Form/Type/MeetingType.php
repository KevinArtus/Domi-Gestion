<?php

namespace DomiGestion\MeetingBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class MeetingType
 * @package DomiGestion\MeetingBundle\Form
 */
class MeetingType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', 'date', array("widget" => "single_text", "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.date", "format" => "dd/MM/yyyy"))
            ->add('customer','entity', array (
                    'class' => 'DomiGestion\RhBundle\Entity\Customer',
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                            ->orderBy('c.nom', 'ASC');
                    },
                    'empty_value' => 'Choisissez une hôtesse...',
                'required' => true,
                "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.customer" )
            )
//            ->add('customer', 'stanhome_rhbundle_user_selector', array("label" => "DomiGestionMeetingBundle.meetings.page_new_edit.customers"))
            ->add('address', 'text', array(
                "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.address",
                'required' => false
                )
            )
            ->add('cp', 'text', array(
                "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.cp",
                'required' => false,
                )
            )
            ->add('city', 'text', array(
                "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.city",
                'required' => false,
                )
            )
            ->add('nbKm', 'text', array(
                "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.km",
                'required' => false,
                )
            );
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DomiGestion\MeetingBundle\Entity\Meeting'
        ));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'meeting';
    }
}
