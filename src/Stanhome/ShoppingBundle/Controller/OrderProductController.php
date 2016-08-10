<?php

namespace Stanhome\ShoppingBundle\Controller;

use Stanhome\ShoppingBundle\Entity\ShoppingProduct;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Stanhome\ShoppingBundle\Form\Type\ShoppingProductType;

/**
 * Product controller.
 *
 * @Route("/product")
 */
class ShippingProductController extends Controller
{
     /**
     * Creates a form to create a Product entity.
     *
     * @param Product $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ShoppingProduct $entity)
    {
        $form = $this->createForm(new ShoppingProductType(), $entity, array(
            'action' => $this->generateUrl('stanhome_order_orderproduct_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Product entity.
     *
     * @Route("/new", name="order_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ShoppingProduct();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }
}
