<?php

namespace DomiGestion\MeetingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class MeetingEditType
 * @package DomiGestion\MeetingBundle\Form
 */
class MeetingEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', 'date', array("widget" => "single_text", "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.date", "format" => "dd/MM/yyyy"))
            ->add('customer','entity', array ('class' => 'DomiGestion\RhBundle\Entity\Customer', 'empty_value' => 'Choisissez une hôtesse...', 'required' => true, "label" => "StanhomeMeetingBundle.meetings.page_new_edit.customer" ))
            ->add('address', 'text', array("label" => "DomiGestionMeetingBundle.meetings.page_new_edit.address"))
            ->add('cp', 'text', array("label" => "DomiGestionMeetingBundle.meetings.page_new_edit.cp"))
            ->add('city', 'text', array("label" => "DomiGestionMeetingBundle.meetings.page_new_edit.city"))
            ->add('nbPersons', 'text', array("label" => "DomiGestionMeetingBundle.meetings.page_new_edit.nbPersons", "required" => false))
            ->add('nbKm', 'text', array("label" => "DomiGestionMeetingBundle.meetings.page_new_edit.km"))
            ->add('montantTtc', 'text', array("label" => "DomiGestionMeetingBundle.meetings.page_new_edit.montantTtc", "required" => false))
            ->add('montantHt', 'text', array("label" => "DomiGestionMeetingBundle.meetings.page_new_edit.montantHt", "required" => false));
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
