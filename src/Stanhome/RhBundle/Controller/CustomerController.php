<?php

namespace Stanhome\RhBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Stanhome\RhBundle\Entity\Customer;
use Stanhome\RhBundle\Form\CustomerType;
use Stanhome\RhBundle\Form\CustomerEditType;

/**
 * Customer controller.
 *
 * @Route("/Customer")
 */
class CustomerController extends Controller
{

    /**
     * Liste tous les clients
     *
     * @Route("/", name="customer")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $customers = $em->getRepository('StanhomeRhBundle:Customer')->findAllOrderByNom($this->get('security.token_storage')->getToken()->getUser());

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $customers,
            $request->query->get('page', 1),
            10
        );

        return array(
            'pagination' => $pagination,
        );
    }

    /**
     * Liste tout les produits d'une catégorie
     *
     * @Template("StanhomeRhBundle:Customer:list.html.twig")
     */
    public function listAction($id, $cat)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StanhomeRhBundle:Customer')->findBy(array('category' => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Aucun produit trouvé pour cette catégorie.');
        }

        return array(
            'entity' => $entity,
            'cat' => $cat,
        );
    }

    /**
     * Creates a new Customer entity.
     *
     * @Route("/", name="customer_create")
     * @Method("POST")
     * @Template("StanhomeRhBundle:Customer:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Customer();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setUser($this->get('security.token_storage')->getToken()->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stanhome_rh_customer_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Customer entity.
     *
     * @param Customer $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Customer $entity)
    {
        $form = $this->createForm(new CustomerType(), $entity, array(
            'action' => $this->generateUrl('stanhome_rh_customer_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Customer entity.
     *
     * @Route("/new", name="customer_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Customer();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Customer entity.
     *
     * @Route("/{reference}", name="customer_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $customer = $em->getRepository('StanhomeRhBundle:Customer')->find($id);
//        $shoppings = $em->getRepository('StanhomeShoppingBundle:Shopping')->findAllShoppingByCustomerOrderByDate($this->get('security.token_storage')->getToken()->getUser(), $id);
        $meetings = $em->getRepository('StanhomeMeetingBundle:Meeting')->findAllMeetingByCustomerOrderByDate($this->get('security.token_storage')->getToken()->getUser(), $id);
        if (!$customer) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }


        $adress = str_replace(" ", "_",$customer->getAddress());
        $adress = utf8_encode($adress);
        $adress = urlencode($adress);
        $cp = $customer->getCp();

        $coordpolaire = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$adress."".$cp."&key=AIzaSyCL6CN-w4FFCJ26udqHyMVX21rTbm7gVNc");
        $json = json_decode($coordpolaire);

//        $customer->setLatitude($json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'});
//        $customer->setLongitude($json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'});

//        $paginator = $this->get('knp_paginator');
//        $pagination = $paginator->paginate(
//            $shoppings,
//            $request->query->get('page', 1),
//            5
//        );

        $paginator2 = $this->get('knp_paginator');
        $pagination2 = $paginator2->paginate(
            $meetings,
            $request->query->get('page', 1),
            5
        );

//        $deleteForm = $this->createDeleteForm($id);

        return array(
            'customer' => $customer,
//            'pagination' => $pagination,
            'pagination2' => $pagination2,
//            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Customer entity.
     *
     * @Route("/{id}/edit", name="customer_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $customer = $em->getRepository('StanhomeRhBundle:Customer')->find($id);

        if (!$customer) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $editForm = $this->createEditForm($customer);
//        $deleteForm = $this->createDeleteForm($id);

        return array(
            'customer'      => $customer,
            'form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a Customer entity.
     *
     * @param Customer $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Customer $entity)
    {
        $form = $this->createForm(new CustomerEditType(), $entity, array(
            'action' => $this->generateUrl('stanhome_rh_customer_update', array('id' => $entity->getId())),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Customer entity.
     *
     * @Method("PUT")
     * @Template("StanhomeRhBundle  :Customer:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StanhomeRhBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

//        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

//        if ($editForm->isValid()) {
            $em->flush();

//            var_dump($id);

            return $this->redirect($this->generateUrl('stanhome_rh_customer_show', array('id' => $entity->getId())));
//        }

//        return array(
//            'entity'      => $entity,
//            'edit_form'   => $editForm->createView(),
////            'delete_form' => $deleteForm->createView(),
//        );
    }

    /**
     * Deletes a Customer entity.
     *
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('StanhomeRhBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('stanhome_rh_customer_index'));
    }

    /**
     * Creates a form to delete a Customer entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('stanhome_rh_customer_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
            ;
    }

    /**
     * Search customers
     */
    public function searchAction(Request $request) {
        $searchString = $request->get("text", "");
        $customers = $this->get("stanhome.rh.search.customer_Search")->search($searchString, 15);

        return $this->render("StanhomeRhBundle:Customer:searchLi.html.twig", array("customers" => $customers));
    }
}
