<?php

namespace Stanhome\RhBundle\Form;

use Doctrine\ORM\EntityManager;
use Stanhome\RhBundle\Form\DataTransformer\UsersToIdsTransformer;
use Stanhome\RhBundle\Form\DataTransformer\UserToIdTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserSelectorType extends AbstractType {
    /**
     * @var EntityManager
     */
    private $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        if ($options['multiple'])
            $transformer = new UsersToIdsTransformer($this->em);
        else
            $transformer = new UserToIdTransformer($this->em);

        $builder->addModelTransformer($transformer);
    }

    public function buildView(FormView $view, FormInterface $form, array $options) {
        $view->vars['label_attr']['for'] = $view->vars['id'] . "_selector";
        $view->vars['multiple'] = $options['multiple'];
    }

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

    public function getParent() {
        return 'text';
    }

    public function getName() {
        return 'stanhome_rhbundle_user_selector';
    }
}