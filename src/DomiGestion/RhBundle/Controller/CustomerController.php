<?php

namespace DomiGestion\RhBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DomiGestion\RhBundle\Entity\Customer;
use DomiGestion\RhBundle\Form\Type\CustomerType;
use DomiGestion\RhBundle\Form\Type\CustomerEditType;

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

        $customers = $em->getRepository('DomiGestionRhBundle:Customer')->findAllOrderByNom($this->get('security.token_storage')->getToken()->getUser());

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
     * @Template("DomiGestionRhBundle:Customer:list.html.twig")
     */
    public function listAction($id, $cat)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DomiGestionRhBundle:Customer')->findBy(array('category' => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Aucun produit trouvé pour cette catégorie.');
        }

        return array(
            'entity' => $entity,
            'cat' => $cat,
        );
    }

    /**
     * Displays a form to create a new Customer entity.
     *
     * @Template()
     */
    public function addAction(Request $request)
    {
        $customer = new Customer();
        $form = $this->createForm(CustomerType::class, $customer);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $customer->setUser($this->get('security.token_storage')->getToken()->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();

            return $this->redirectToRoute('stanhome_rh_customer_show', array('id' => $customer->getId()));
        }

        return array(
            'entity' => $customer,
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

        $customer = $em->getRepository('DomiGestionRhBundle:Customer')->find($id);
        $meetings = $em->getRepository('DomiGestionMeetingBundle:Meeting')->findAllMeetingByCustomerOrderByDate($this->get('security.token_storage')->getToken()->getUser(), $id);
        if (!$customer) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $adress = str_replace(" ", "_",$customer->getAddress());
        $adress = utf8_encode($adress);
        $adress = urlencode($adress);
        $cp = $customer->getCp();

        $coordpolaire = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$adress."".$cp."&key=AIzaSyCL6CN-w4FFCJ26udqHyMVX21rTbm7gVNc");
        $json = json_decode($coordpolaire);

        if ($json->status != 'ZERO_RESULTS') {
            $customer->setLatitude($json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'});
            $customer->setLongitude($json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'});
        }


        $paginator2 = $this->get('knp_paginator');
        $pagination2 = $paginator2->paginate(
            $meetings,
            $request->query->get('page', 1),
            5
        );

        //$deleteForm = $this->createDeleteForm($id);

        return array(
            'customer' => $customer,
            'pagination2' => $pagination2,
            //'delete_form' => $deleteForm->createView(),
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

        $customer = $em->getRepository('DomiGestionRhBundle:Customer')->find($id);

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
        $form = $this->get('form.factory')->create(CustomerEditType::class, $entity);

        return $form;
    }
    /**
     * Edits an existing Customer entity.
     *
     * @Method("PUT")
     * @Template("DomiGestionRhBundle:Customer:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DomiGestionRhBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

//        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

//        if ($editForm->isValid()) {
            $em->flush();

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
        $entity = $em->getRepository('DomiGestionRhBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('stanhome_rh_customer_index'));
    }

    /**
     * Search customers
     */
    public function searchAction(Request $request) {
        $searchString = $request->get("text", "");
        $customers = $this->get("stanhome.rh.search.customer_Search")->search($searchString, 15);

        return $this->render("DomiGestionRhBundle:Customer:searchLi.html.twig", array("customers" => $customers));
    }
}
