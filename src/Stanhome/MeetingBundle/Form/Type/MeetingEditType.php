<?php

namespace Stanhome\MeetingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class MeetingEditType
 * @package Stanhome\MeetingBundle\Form
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
            ->add('date', 'date', array("widget" => "single_text", "label" => "StanhomeMeetingBundle.meetings.page_new_edit.date", "format" => "dd/MM/yyyy"))
            ->add('customer','entity', array ('class' => 'Stanhome\RhBundle\Entity\Customer', 'empty_value' => 'Choisissez une hôtesse...', 'required' => true, "label" => "StanhomeMeetingBundle.meetings.page_new_edit.customer" ))
            ->add('address', 'text', array("label" => "StanhomeMeetingBundle.meetings.page_new_edit.address"))
            ->add('cp', 'text', array("label" => "StanhomeMeetingBundle.meetings.page_new_edit.cp"))
            ->add('city', 'text', array("label" => "StanhomeMeetingBundle.meetings.page_new_edit.city"))
            ->add('nbPersons', 'text', array("label" => "StanhomeMeetingBundle.meetings.page_new_edit.nbPersons", "required" => false))
            ->add('nbKm', 'text', array("label" => "StanhomeMeetingBundle.meetings.page_new_edit.km"))
            ->add('montantTtc', 'text', array("label" => "StanhomeMeetingBundle.meetings.page_new_edit.montantTtc", "required" => false))
            ->add('montantHt', 'text', array("label" => "StanhomeMeetingBundle.meetings.page_new_edit.montantHt", "required" => false));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Stanhome\MeetingBundle\Entity\Meeting'
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
