<?php

namespace Stanhome\MeetingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Stanhome\MeetingBundle\Entity\Meeting;
use Stanhome\MeetingBundle\Form\Type\MeetingType;
use Stanhome\MeetingBundle\Form\Type\MeetingEditType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Class MeetingController
 * @package Stanhome\MeetingBundle\Controller
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
        if (!$this->get('security.context')->isGranted('ROLE_USER')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux utilisateurs connectés.');
        }
        $em = $this->getDoctrine()->getManager();

        $customers = $em->getRepository('StanhomeMeetingBundle:Meeting')->findAllMeetingOrderByDate($this->get('security.token_storage')->getToken()->getUser());

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
     * Liste les informations d'une catégorie
     *
     * @Template("StanhomeMeetingBundle:Meeting:list.html.twig")
     */
    public function listAction($id, $cat)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StanhomeMeetingBundle:Meeting')->findBy(array('id' => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Aucune réunion trouvée.');
        }

        return array(
            'entity' => $entity,
            'cat' => $cat,
        );
    }

    /**
     * Crée une nouvelle réunion
     *
     * @Method("POST")
     * @Template("StanhomeMeetingBundle:Meeting:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Meeting();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setUser($this->get('security.token_storage')->getToken()->getUser());

            $tauxKm = $this->get('security.token_storage')->getToken()->getUser()->getTauxKm();
            $entity->setMontantKm($entity->getNbKm()*$tauxKm);
            $entity->setProfit($entity->getMontantTtc()-$entity->getMontantHt());

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stanhome_meeting_meeting_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Crée un form afin de créer une nouvelle entité Meeting
     *
     * @param Meeting $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Meeting $entity)
    {
        $form = $this->createForm(new MeetingType(), $entity, array(
            'action' => $this->generateUrl('stanhome_meeting_meeting_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Affiche le formulaire de création d'une entité Meeting
     *
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Meeting();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
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

        $meeting = $em->getRepository('StanhomeMeetingBundle:Meeting')->find($id);
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

        $meeting = $em->getRepository('StanhomeMeetingBundle:Meeting')->find($id);

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

        $entity = $em->getRepository('StanhomeMeetingBundle:Meeting')->find($id);

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
        $entity = $em->getRepository('StanhomeMeetingBundle:Meeting')->find($id);

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
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
            ;
    }

    /**
     * Search meeting
     */
    public function searchAction(Request $request) {
        $searchString = $request->get("text", "");
        $customers = $this->get("stanhome.rh.search.customer_Search")->search($searchString, 15);

        return $this->render("StanhomeMeetingBundle:Meeting:searchLi.html.twig", array("customers" => $customers));
    }
}
