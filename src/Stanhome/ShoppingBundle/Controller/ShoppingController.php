<?php

namespace Stanhome\ShoppingBundle\Controller;

use Stanhome\ShoppingBundle\Entity\ShoppingProduct;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Stanhome\ShoppingBundle\Entity\Shopping;
use Stanhome\ShoppingBundle\Form\Type\ShoppingType;
use Stanhome\ShoppingBundle\Form\Type\ShoppingEditType;

/**
 * Product controller.
 *
 * @Route("/shopping")
 */
class ShoppingController extends Controller
{

    /**
     * Lists all Product entities.
     *
     * @Route("/", name="shopping")
     * @Method("GET")
     * @Template("StanhomeShoppingBundle:Shopping:index.html.twig")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $shoppings = $em->getRepository('StanhomeShoppingBundle:Shopping')->findBy(array('user' => $this->get('security.token_storage')->getToken()->getUser()));

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $shoppings,
            $request->query->get('page', 1),
            10
        );
        return array(
            'pagination' => $pagination,
        );
    }
    /**
     * Creates a new Shopping entity.
     *
     * @Method("POST")
     * @Template("StanhomeOrderBundle:Order:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $shopping = new Shopping();
        $shoppingProduct = new ShoppingProduct();

        $form = $this->createCreateForm($shopping);
        $shopping->addShoppingProduct($shoppingProduct);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            $total = 0;
            foreach ($shopping->getShoppingProducts() as $i => $value) {
                $price = $shopping->getShoppingProducts()[$i]->getProduct()->getPrice();
                $quantity = $shopping->getShoppingProducts()[$i]->getQuantity();
                $total += $price * $quantity;
            }
            $shopping->setTotalPrice($total);
            $shopping->setUser($this->get('security.token_storage')->getToken()->getUser());

            $amount = $this->get('security.token_storage')->getToken()->getUser()->getIncentive();
            $salary = $this->get('security.token_storage')->getToken()->getUser()->getSalary();
            $newsalary = $salary + ($total * ($amount/100));
            $this->get('security.token_storage')->getToken()->getUser()->setSalary($newsalary);

            $em = $this->getDoctrine()->getManager();
            $em->persist($shopping);
            $em->flush();

            return $this->redirect($this->generateUrl('stanhome_shopping_shopping_show', array('id' => $shopping->getId())));
        }

        return array(
            'entity' => $shopping,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Product entity.
     *
     * @param Shopping $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Shopping $entity)
    {
        $form = $this->createForm(new ShoppingType(), $entity, array(
            'action' => $this->generateUrl('stanhome_shopping_shopping_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Shopping entity.
     *
     * @Route("/new", name="shopping_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Shopping();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Shopping entity.
     *
     * @Route("/{id}", name="shopping_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StanhomeShoppingBundle:Shopping')->find($id);
        $shoppingproducts = $em->getRepository('StanhomeShoppingBundle:ShoppingProduct')->findBy(array('shopping' => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Shopping entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'shoppingproducts' => $shoppingproducts,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Shopping entity.
     *
     * @Route("/{id}/edit", name="shopping_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StanhomeShoppingBundle:Shopping')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Shopping entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a Shopping entity.
     *
     * @param Shopping $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Shopping $entity)
    {
        $form = $this->createForm(new ShoppingEditType(), $entity, array(
            'action' => $this->generateUrl('stanhome_shopping_shopping_update', array('id' => $entity->getId())),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Shopping entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StanhomeShoppingBundle:Shopping')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Shopping entity.');
        }
//        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        $total = 0;
        foreach ($entity->getShoppingProducts() as $i => $value) {
            $price = $entity->getShoppingProducts()[$i]->getProduct()->getPrice();
            $quantity = $entity->getShoppingProducts()[$i]->getQuantity();
            $total += $price * $quantity;
        }
        $entity->setTotalPrice($total);
        $entity->setUser($this->get('security.token_storage')->getToken()->getUser());

        $amount = $this->get('security.token_storage')->getToken()->getUser()->getIncentive();
        $salary = $this->get('security.token_storage')->getToken()->getUser()->getSalary();
        $newsalary = $salary + ($total * ($amount/100));
        $this->get('security.token_storage')->getToken()->getUser()->setSalary($newsalary);


        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('stanhome_shopping_shopping_show', array('id' => $entity->getId())));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Shopping entity.
     *
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('StanhomeShoppingBundle:Shopping')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Order entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('stanhome_shopping_shopping_index'));
    }

    /**
     * Creates a form to delete a Product entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('stanhome_shopping_shopping_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
            ;
    }
}
