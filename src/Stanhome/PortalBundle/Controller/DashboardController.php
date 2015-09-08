<?php
namespace Stanhome\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DashboardController extends Controller
{
    public function indexAction(Request $request)
    {
        if (!$this->get('security.context')->isGranted('ROLE_USER')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux utilisateurs connectés.');
        }

        $em = $this->getDoctrine()->getManager();

        $meetings = $em->getRepository('StanhomeMeetingBundle:Meeting')->nextMeeting($this->get('security.token_storage')->getToken()->getUser());
        $meetingskm = $em->getRepository('StanhomeMeetingBundle:Meeting')->findMontantKmByUser($this->get('security.token_storage')->getToken()->getUser());
        $salary = $this->get('security.token_storage')->getToken()->getUser()->getSalary();

        $montantKm = 0;
        foreach($meetingskm as $value) {
            $montantKm += $value->getMontantKm();
        }

        $salary -= $montantKm;

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $meetings,
            $request->query->get('page', 1),
            10
        );
        return $this->render('StanhomePortalBundle:Dashboard:index.html.twig',
            array(
                'pagination' => $pagination,
                'salary' => $salary,
            )
        );

    }

}
