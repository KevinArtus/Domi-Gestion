<?php

namespace Stanhome\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class ProductType
 * @package Stanhome\ProductBundle\Form
 */
class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('libelle', 'text', array("label" => "StanhomeProductBundle.products.page_new_edit.libelle"))
            ->add('reference', 'text', array("label" => "StanhomeProductBundle.products.page_new_edit.reference"))
            ->add('price', 'text', array("label" => "StanhomeProductBundle.products.page_new_edit.price"))
            ->add('category','entity', array ('class' => 'Stanhome\ProductBundle\Entity\Category', 'property' => 'Libelle', 'required' => true));

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Stanhome\ProductBundle\Entity\Product'
        ));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'product';
    }
}
