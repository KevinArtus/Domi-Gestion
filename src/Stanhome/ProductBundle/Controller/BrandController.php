<?php

namespace Stanhome\ProductBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Stanhome\ProductBundle\Entity\Brand;
use Stanhome\ProductBundle\Form\Type\BrandEditType;

/**
 * Class BrandController
 * @package Stanhome\ProductBundle\Controller
 */
class BrandController extends Controller
{

    /**
     * List of all product
     * @return array
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('StanhomeProductBundle:Brand')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * show spécific product
     * @param integer $id
     * @return array
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('StanhomeProductBundle:Brand')->find($id);
        if (!$article) {
            throw $this->createNotFoundException('Unable to find Brand entity.');
        }

        $cat = $em->getRepository('StanhomeProductBundle:Category')->findBy(array('brand' => $id));
        if (!$cat) {
            throw $this->createNotFoundException('Unable to find Category entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'brand'      => $article,
            'category' => $cat,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * edit a specific product
     * @param integer $id
     * @return array
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StanhomeProductBundle:Brand')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Brand entity.');
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
     * Creates a form to edit a Product entity.
     *
     * @param Brand $entity
     * @return \Symfony\Component\Form\Form
     */
    private function createEditForm(Brand $entity)
    {
        $form = $this->createForm(new BrandEditType(), $entity, array(
            'action' => $this->generateUrl('stanhome_product_brand_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Deletes a Brand entity.
     *
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('StanhomeProductBundle:Brand')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Brand entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('stanhome_product_brand_index'));
    }

    /**
     * Creates a form to delete a Brand entity by id.
     *
     * @param $id
     * @return \Symfony\Component\Form\Form|\Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('stanhome_product_brand_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
            ;
    }
}
