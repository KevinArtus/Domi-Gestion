<?php

namespace DomiGestion\RhBundle\Controller;

use DomiGestion\RhBundle\Entity\Client;
use DomiGestion\RhBundle\Entity\Hostess;
use DomiGestion\RhBundle\Form\Type\ClientType;
use DomiGestion\RhBundle\Form\Type\HostessType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class CustomerController
 * @package DomiGestion\RhBundle\Controller
 * 
 * @author Kévin A.
 */
class CustomerController extends Controller
{
    /**
     * Liste toutes les clientes
     *
     * @Method("GET")
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
     * Displays a form to create a new Hostess.
     *
     * @Template("DomiGestionRhBundle:Customer:addHostess.html.twig")
     */
    public function addHostessAction(Request $request)
    {
        $hostess = new Hostess();
        $form = $this->createForm(HostessType::class, $hostess);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hostess->setUser($this->get('security.token_storage')->getToken()->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($hostess);
            $em->flush();

            return $this->redirectToRoute('stanhome_rh_customer_show', array('id' => $hostess->getId()));
        }

        return array(
            'entity' => $hostess,
            'form' => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Client.
     *
     * @Template("DomiGestionRhBundle:Customer:addClient.html.twig")
     */
    public function addClientAction(Request $request)
    {
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $client->setUser($this->get('security.token_storage')->getToken()->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            return $this->redirectToRoute('stanhome_rh_customer_show', array('id' => $client->getId()));
        }

        return array(
            'entity' => $client,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Customer entity.
     *
     * @Method("GET")
     * @Template("DomiGestionRhBundle:Customer:show.html.twig")
     */
    public function showAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $customer = $em->getRepository('DomiGestionRhBundle:Customer')->find($id);
        $meetings = $em->getRepository('DomiGestionMeetingBundle:Meeting')->findAllMeetingByCustomerOrderByDate($this->get('security.token_storage')->getToken()->getUser(), $id);
        if (!$customer) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        if ($customer->getAddress()) {
            $adress = str_replace(" ", "_", $customer->getAddress());
            $adress = utf8_encode($adress);
            $adress = urlencode($adress);
            $cp = $customer->getCp();

            $coordpolaire = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=" . $adress . "" . $cp . "&key=AIzaSyCL6CN-w4FFCJ26udqHyMVX21rTbm7gVNc");
            $json = json_decode($coordpolaire);

            if ($json->status != 'ZERO_RESULTS') {
                $customer->setLatitude($json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'});
                $customer->setLongitude($json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'});
            }
        }


        return array(
            'customer' => $customer,
            'meetings' => $meetings,
        );
    }

    /**
     * Displays a form to edit an existing Customer entity.
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $customer = $em->getRepository('DomiGestionRhBundle:Customer')->find($id);
        if (!$customer) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        if ($customer instanceof Client) {
            $form = $this->createForm(ClientType::class, $customer);
        } else {
            $form = $this->createForm(HostessType::class, $customer);
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($customer);
            $em->flush();

            return $this->redirect($this->generateUrl('stanhome_rh_customer_show', array('id' => $customer->getId())));
        }

        if ($customer instanceof Client) {
            return $this->render('@DomiGestionRh/Customer/addClient.html.twig', array('customer' => $customer, 'form' => $form->createView()));
        } else {
            return $this->render('@DomiGestionRh/Customer/addHostess.html.twig', array('customer' => $customer, 'form' => $form->createView()));
        }
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
