<?php
namespace Stanhome\ShoppingBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ShoppingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('totalPrice', 'text', array("label" => "StanhomeRhBundle.customers.page_new_edit.sexe"))
            ->add('meeting', 'entity', array(
                'class' => 'Stanhome\MeetingBundle\Entity\Meeting',
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('m')
                            ->where('m.date <= :date')
                            ->setParameter('date', new \DateTime(('now')))
                            ->orderBy('m.date', 'DESC');
                    },
                'empty_value' => 'Choisissez une date...',
                    'required' => false,
                "label" => "StanhomeMeetingBundle.meetings.page_new_edit.meeting"
                )
            )
            ->add('dateorder', 'date', array(
                "widget" => "single_text",
                "label" => "StanhomeMeetingBundle.meetings.page_new_edit.date",
                "format" => "dd/MM/yyyy"
                )
            )
            ->add('customer','entity', array ('class' => 'Stanhome\RhBundle\Entity\Customer',
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                            ->orderBy('c.nom', 'ASC');
                    },
                    'empty_value' => 'Choisissez un(e) client(e)...',
                    'required' => true,
                    "label" => "StanhomeShoppingBundle.shoppings.page_new_edit.customer" )
            )
            ->add('shoppingProducts', 'collection', array(
                    'type' => new ShoppingProductType(),
                    'allow_add' => true,
                    'allow_delete' => true,
                    "label" =>"StanhomeShoppingBundle.shoppings.page_new_edit.products"
                )
            );
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Stanhome\ShoppingBundle\Entity\Shopping',
            'cascade_validation' => true,
        ));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'shopping';
    }
}