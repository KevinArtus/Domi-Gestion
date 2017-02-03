<?php

namespace DomiGestion\MeetingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DomiGestion\MeetingBundle\Entity\Meeting;
use DomiGestion\MeetingBundle\Form\Type\MeetingType;
use DomiGestion\MeetingBundle\Form\Type\MeetingEditType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Class MeetingController
 * @package DomiGestion\MeetingBundle\Controller
 */
class MeetingController extends Controller
{
    /**
     * Liste toutes les réunions
     *
     * @Route("/", name="meeting")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')) {

            $customers = $em->getRepository('DomiGestionMeetingBundle:Meeting')->findAllMeetingOrderByDate($this->get('security.token_storage')->getToken()->getUser());

            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $customers,
                $request->query->get('page', 1),
                10
            );

            return array(
                'pagination' => $pagination,
            );
        } else {
            throw new AccessDeniedException('Accès limité aux utilisateurs connectés.');
        }

    }

    /**
     * Liste les informations d'une catégorie
     *
     * @Template("DomiGestionMeetingBundle:Meeting:list.html.twig")
     */
    public function listAction($id, $cat)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DomiGestionMeetingBundle:Meeting')->findBy(array('id' => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Aucune réunion trouvée.');
        }

        return array(
            'entity' => $entity,
            'cat' => $cat,
        );
    }

    /**
     * Affiche le formulaire de création d'une entité Meeting
     *
     * @Template()
     */
    public function addAction(Request $request)
    {
        $meeting = new Meeting();
        $form = $this->createForm(MeetingType::class, $meeting);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $meeting->setUser($this->get('security.token_storage')->getToken()->getUser());

            $tauxKm = $this->get('security.token_storage')->getToken()->getUser()->getTauxKm();
            $meeting->setMontantKm($meeting->getNbKm()*$tauxKm);
            $meeting->setProfit($meeting->getMontantTtc()-$meeting->getMontantHt());

            $em = $this->getDoctrine()->getManager();
            $em->persist($meeting);
            $em->flush();

            return $this->redirectToRoute('stanhome_rh_customer_show', array('id' => $meeting->getId()));
        }

        return array(
            'entity' => $meeting,
            'form'   => $form->createView(),
        );
    }

    /**
     * Trouve et affiche les informations d'une entitée Meeting
     *
     * @Method("GET")
     * @Template()
     */
    public function showAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $meeting = $em->getRepository('DomiGestionMeetingBundle:Meeting')->find($id);
//        $shoppings = $em->getRepository('StanhomeShoppingBundle:Shopping')->findBy(array('meeting' => $id));

        if (!$meeting) {
            throw $this->createNotFoundException('Unable to find Meeting entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'meeting' => $meeting,
//            'shopping' => $shoppings,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Customer entity.
     *
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $meeting = $em->getRepository('DomiGestionMeetingBundle:Meeting')->find($id);

        if (!$meeting) {
            throw $this->createNotFoundException('Unable to find Meeting entity.');
        }

        $editForm = $this->createEditForm($meeting);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'meeting'      => $meeting,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a Customer entity.
     *
     * @param Customer $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Meeting $entity)
    {
        $form = $this->createForm(new MeetingEditType(), $entity, array(
            'action' => $this->generateUrl('stanhome_meeting_meeting_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Customer entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DomiGestionMeetingBundle:Meeting')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Meeting entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);


        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('stanhome_meeting_meeting_show', array('id' => $entity->getId())));
        }
        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
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
        $entity = $em->getRepository('DomiGestionMeetingBundle:Meeting')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Meeting entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('stanhome_meeting_meeting_index'));
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
            ->setAction($this->generateUrl('stanhome_meeting_meeting_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

    /**
     * Search meeting
     */
    public function searchAction(Request $request) {
        $searchString = $request->get("text", "");
        $customers = $this->get("stanhome.rh.search.customer_Search")->search($searchString, 15);

        return $this->render("DomiGestionMeetingBundle:Meeting:searchLi.html.twig", array("customers" => $customers));
    }
}
