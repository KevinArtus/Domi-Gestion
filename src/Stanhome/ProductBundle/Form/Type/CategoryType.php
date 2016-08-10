<?php

namespace Stanhome\ProductBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class CategoryType
 * @package Stanhome\ProductBundle\Form
 */
class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('libelle', 'text', array("label" => "StanhomeProductBundle.products.page_new_edit.libelle"))
            ->add('brand','entity', array ('class' => 'Stanhome\ProductBundle\Entity\Brand', 'property' => 'Libelle', 'required' => true));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Stanhome\ProductBundle\Entity\Category'
        ));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'category';
    }
}