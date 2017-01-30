<?php

namespace Stanhome\RhBundle\Form\Type;

use Doctrine\ORM\EntityManager;
use Stanhome\RhBundle\Form\DataTransformer\UsersToIdsTransformer;
use Stanhome\RhBundle\Form\DataTransformer\UserToIdTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class UserSelectorType
 * @package Stanhome\RhBundle\Form
 */
class UserSelectorType extends AbstractType {
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * UserSelectorType constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        if ($options['multiple'])
            $transformer = new UsersToIdsTransformer($this->em);
        else
            $transformer = new UserToIdTransformer($this->em);

        $builder->addModelTransformer($transformer);
    }

    /**
     * @param FormView $view
     * @param FormInterface $form
     * @param array $options
     */
    public function buildView(FormView $view, FormInterface $form, array $options) {
        $view->vars['label_attr']['for'] = $view->vars['id'] . "_selector";
        $view->vars['multiple'] = $options['multiple'];
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver
            ->setDefaults(array(
                'multiple' => false
            ))
            ->setOptional(array(
                'multiple'
            ))
            ->setAllowedTypes(array(
                'multiple' => 'bool'
            ));
    }

    /**
     * @return string
     */
    public function getParent() {
        return 'text';
    }

    /**
     * @return string
     */
    public function getName() {
        return 'stanhome_rhbundle_user_selector';
    }
}
