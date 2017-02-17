<?php

namespace DomiGestion\MeetingBundle\Controller;

use DomiGestion\RhBundle\Entity\Client;
use DomiGestion\RhBundle\Entity\Hostess;
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
     * List all the meetings past and to come
     *
     * @Route("/", name="meeting")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')) {

            $pastMeeting   = $em->getRepository('DomiGestionMeetingBundle:Meeting')->findPastMeeting($this->get('security.token_storage')->getToken()->getUser());
            $meetingToCome = $em->getRepository('DomiGestionMeetingBundle:Meeting')->findMeetingToCome($this->get('security.token_storage')->getToken()->getUser());

            return array(
                'pastMeetings'  => $pastMeeting,
                'meetingToCome' => $meetingToCome,
            );
        } else {
            throw new AccessDeniedException('Accès limité aux utilisateurs connectés.');
        }
    }

    /**
     * Affiche le formulaire de création d'une entité Meeting
     *
     * @Template()
     */
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $meeting = new Meeting();
        $form = $this->createForm(MeetingType::class, $meeting);

        $customerId = $request->get('meeting')['hostess'];
        if(!empty($customerId)) {
            if ($em->getRepository('DomiGestionRhBundle:Customer')->find($customerId) instanceof Client) {
                $client = $em->getRepository('DomiGestionRhBundle:Customer')->find($customerId);

                $hostess = new Hostess();
                $hostess->setSexe($client->getSexe());
                $hostess->setNom($client->getNom());
                $hostess->setPrenom($client->getPrenom());
                $hostess->setFixe($client->getFixe());
                $hostess->setPortable($client->getPortable());
                $hostess->setEmail($client->getEmail());
                $hostess->setAddress($client->getAddress());
                $hostess->setCp($client->getCp());
                $hostess->setCity($client->getCity());
                $hostess->setUser($client->getUser());
                $hostess->setLatitude($client->getLatitude());
                $hostess->setLongitude($client->getLongitude());
                $em->remove($client);
                $em->persist($hostess);
                $em->flush();

                $data = $request->get('meeting');
                $data['hostess']= $hostess->getId();
                $request->request->set('meeting', $data);

            }

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $user = $this->get('security.token_storage')->getToken()->getUser();
                $meeting->setUser($user);

                $em->persist($meeting);
                $em->flush();

                return $this->redirectToRoute('domiGestion_meeting_meeting_show', array('id' => $meeting->getId()));
            }
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

        if (!$meeting) {
            throw $this->createNotFoundException('Unable to find Meeting entity.');
        }

        return array(
            'meeting' => $meeting
        );
    }

    /**
     * Displays a form to edit an existing Customer entity.
     *
r     * @Template()
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $meeting = $em->getRepository('DomiGestionMeetingBundle:Meeting')->find($id);
        if (!$meeting) {
            throw $this->createNotFoundException('Unable to find Meeting entity.');
        }
        $form = $this->createForm(MeetingEditType::class, $meeting);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user   = $this->get('security.token_storage')->getToken()->getUser();
            $tauxKm = $user->getTauxKm();

            $meeting->setUser($user);
            $meeting->setMontantKm($meeting->getNbKm()*$tauxKm);
            $meeting->setProfit($meeting->getMontantTtc()-$meeting->getMontantHt());

            $user->setSalary($user->getSalary() + $meeting->getProfit());
            $user->setTotalAmountKm($user->getTotalAmountKm() + $meeting->getMontantKm());
            $user->setTotalKm($user->getTotalKm() + $meeting->getNbKm());

            $em->persist($user);
            $em->persist($meeting);
            $em->flush();

            return $this->redirectToRoute('domiGestion_meeting_meeting_show', array('id' => $meeting->getId()));
        }

        return array(
            'meeting' => $meeting,
            'form'   => $form->createView(),
        );
    }

    /**
     * Deletes a Meeting entity.
     *
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $meeting = $em->getRepository('DomiGestionMeetingBundle:Meeting')->find($id);
        $user   = $this->get('security.token_storage')->getToken()->getUser();

        if (!$meeting) {
            throw $this->createNotFoundException('Unable to find Meeting entity.');
        }

        $user->setSalary($user->getSalary() - $meeting->getProfit());
        $user->setTotalAmountKm($user->getTotalAmountKm() - $meeting->getMontantKm());
        $user->setTotalKm($user->getTotalKm() - $meeting->getNbKm());

        $em->persist($user);
        $em->remove($meeting);
        $em->flush();

        return $this->redirect($this->generateUrl('domiGestion_meeting_meeting_index'));
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
