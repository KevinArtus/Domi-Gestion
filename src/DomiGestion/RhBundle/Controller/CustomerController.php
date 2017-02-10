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
     * Liste toutes les clientes
     *
     * @Route("/", name="customer")
     * @Method("GET")
     * @Template()
     */
    public function listClientAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $customers = $em->getRepository('DomiGestionRhBundle:Customer')->findCustomerByStatus($this->get('security.token_storage')->getToken()->getUser(), 'client');

        return $this->render('@DomiGestionRh/Customer/listClients.html.twig', array(
            'customers' => $customers,
        ));
    }

    /**
     * Liste toutes les hôtesses
     *
     * @Method("GET")
     * @Template()
     */
    public function listHostessAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $customers = $em->getRepository('DomiGestionRhBundle:Customer')->findCustomerByStatus($this->get('security.token_storage')->getToken()->getUser(), 'hostess');

        return $this->render('@DomiGestionRh/Customer/listHostess.html.twig', array(
            'customers' => $customers,
        ));
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

        return array(
            'customer' => $customer,
            'meetings' => $meetings,
            //'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Customer entity.
     *
     * @Route("/{id}/edit", name="customer_edit")
     * @Template()
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $customer = $em->getRepository('DomiGestionRhBundle:Customer')->find($id);
        if (!$customer) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $form = $this->createForm(CustomerEditType::class, $customer);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($customer);
            $em->flush();

            return $this->redirect($this->generateUrl('stanhome_rh_customer_show', array('id' => $customer->getId())));
        }

        return array(
            'customer' => $customer,
            'form'     => $form->createView(),
        );
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

        return $this->redirect($this->generateUrl('domiGestion_rh_customer_client'));
    }

//    /**
//     * Search customers
//     */
//    public function searchAction(Request $request) {
//        $searchString = $request->get("text", "");
//        $customers = $this->get("stanhome.rh.search.customer_Search")->search($searchString, 15);
//
//        return $this->render("DomiGestionRhBundle:Customer:searchLi.html.twig", array("customers" => $customers));
//    }
}
