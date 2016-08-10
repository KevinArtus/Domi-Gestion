<?php

namespace Stanhome\ShoppingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class ShoppingProductType
 * @package Stanhome\ShoppingBundle\Form
 */
class ShoppingProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('quantity', 'integer', array("label" => "StanhomeShoppingBundle.shoppings.page_new_edit.quantity"))
            ->add('product','entity', array ('class' => 'Stanhome\ProductBundle\Entity\Product',
                                             'empty_value' => 'Choisissez un produit...',
                                             'required' => true,
                                             "label" => "StanhomeShoppingBundle.shoppings.page_new_edit.product"));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Stanhome\ShoppingBundle\Entity\ShoppingProduct'
        ));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'shoppingProduct';
    }
}
