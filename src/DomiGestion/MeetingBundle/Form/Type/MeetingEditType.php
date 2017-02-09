<?php

namespace DomiGestion\MeetingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;

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
            ->add('nbPersons', TextType::class, array(
                "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.nbPersons",
                'required' => false
                )
            )
            ->add('nbKm', TextType::class, array(
                "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.km",
                'required' => false
                )
            )
            ->add('montantTtc', TextType::class, array(
                    "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.montantTtc",
                    'required' => false
                )
            )
            ->add('montantHt', TextType::class, array(
                    "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.montantHt",
                    'required' => false
                )
            );
    }

    public function getParent()
    {
        return MeetingType::class;
    }
}
