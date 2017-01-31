<?php

namespace DomiGestion\MeetingBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Class MeetingType
 * @package DomiGestion\MeetingBundle\Form
 */
class MeetingType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class, array("widget" => "single_text", "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.date", "format" => "dd/MM/yyyy"))
            ->add('customer',EntityType::class, array (
                    'class' => 'DomiGestion\RhBundle\Entity\Customer',
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                            ->orderBy('c.nom', 'ASC');
                    },
                    'empty_data' => 'Choisissez une hôtesse...',
                'required' => true,
                "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.customer" )
            )
            ->add('address', TextType::class, array(
                "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.address",
                'required' => false
                )
            )
            ->add('cp', TextType::class, array(
                "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.cp",
                'required' => false,
                )
            )
            ->add('city', TextType::class, array(
                "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.city",
                'required' => false,
                )
            )
            ->add('nbKm', TextType::class, array(
                "label" => "DomiGestionMeetingBundle.meetings.page_new_edit.km",
                'required' => false,
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
            'data_class' => 'DomiGestion\MeetingBundle\Entity\Meeting'
        ));
    }
}
