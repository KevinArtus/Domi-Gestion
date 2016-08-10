<?php

namespace Stanhome\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Class DashboardController
 * @package Stanhome\PortalBundle\Controller
 */
class DashboardController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        if (!$this->get('security.context')->isGranted('ROLE_USER')) {
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
