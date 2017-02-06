<?php

namespace DomiGestion\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Class DashboardController
 * @package DomiGestion\PortalBundle\Controller
 */
class DashboardController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')) {

            $meetings = $em->getRepository('DomiGestionMeetingBundle:Meeting')->nextMeeting($this->get('security.token_storage')->getToken()->getUser());

            $meetingskm = $em->getRepository('DomiGestionMeetingBundle:Meeting')->findMontantKmByUser($this->get('security.token_storage')->getToken()->getUser());
//            echo '<pre>';\Doctrine\Common\Util\Debug::dump($meetingskm, 3);die;
            $salary = $this->get('security.token_storage')->getToken()->getUser()->getSalary();

            $montantKm = 0;
            foreach ($meetingskm as $value) {
                $montantKm += $value->getMontantKm();
            }

            $salary -= $montantKm;
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $meetings,
                $request->query->get('page', 1),
                10
            );
            return $this->render('DomiGestionPortalBundle:Dashboard:index.html.twig',
                array(
                    'pagination' => $pagination,
                    'salary' => $salary,
                )
            );
        } else {
            throw new AccessDeniedException('Accès limité aux utilisateurs connectés.');

        }


    }
}
