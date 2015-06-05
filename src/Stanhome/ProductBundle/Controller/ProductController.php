<?php

namespace Stanhome\ProductBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Stanhome\ProductBundle\Entity\Product;
use Stanhome\ProductBundle\Form\ProductType;
use Stanhome\ProductBundle\Form\ProductEditType;


/**
 * Product controller.
 *
 * @Route("/product")
 */
class ProductController extends Controller
{

    /**
     * Liste tout les produits
     *
     * @Route("/", name="product")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('StanhomeProductBundle:Product')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Liste tout les produits d'une catégorie
     *
     * @Template("StanhomeProductBundle:Product:list.html.twig")
     */
    public function listAction($idcat, $catlibelle, $idbrand, $brandlibelle)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StanhomeProductBundle:Product')->findBy(array('category' => $idcat));
        if (!$entity) {
            throw $this->createNotFoundException('Aucun produit trouvé pour cette catégorie.');
        }

        return array(
            'entity' => $entity,
            'idcat' => $idcat,
            'idbrand' => $idbrand,
            'catlibelle' => $catlibelle,
            'brandlibelle' => $brandlibelle,
        );
    }

    /**
     * Creates a new Product entity.
     *
     * @Route("/", name="product_create")
     * @Method("POST")
     * @Template("StanhomeProductBundle:Product:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Product();
        $form = $this->createCreateForm($entity);

        $form->handleRequest($request);


        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stanhome_product_product_show', array('reference' => $entity->getReference())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Product entity.
     *
     * @param Product $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Product $entity)
    {
        $form = $this->createForm(new ProductType(), $entity, array(
            'action' => $this->generateUrl('stanhome_product_product_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Product entity.
     *
     * @Route("/new", name="product_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Product();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Product entity.
     *
     * @Route("/{reference}", name="product_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($reference)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StanhomeProductBundle:Product')->find($reference);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $deleteForm = $this->createDeleteForm($reference);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Product entity.
     *
     * @Route("/{id}/edit", name="product_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($reference)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StanhomeProductBundle:Product')->find($reference);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($reference);

        return array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Product entity.
    *
    * @param Product $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Product $entity)
    {
        $form = $this->createForm(new ProductEditType(), $entity, array(
            'action' => $this->generateUrl('stanhome_product_product_update', array('reference' => $entity->getReference())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Product entity.
     *
     * @Method("PUT")
     * @Template("StanhomeProductBundle:Product:edit.html.twig")
     */
    public function updateAction(Request $request, $reference)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StanhomeProductBundle:Product')->find($reference);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $deleteForm = $this->createDeleteForm($reference);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('stanhome_product_product_show', array('reference' => $entity->getReference())));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Product entity.
     *
     * @Method("DELETE")
     */
    public function deleteAction($reference)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('StanhomeProductBundle:Product')->find($reference);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('stanhome_product_product_index'));
    }

    /**
     * Creates a form to delete a Product entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($reference)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('stanhome_product_product_delete', array('reference' => $reference)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
