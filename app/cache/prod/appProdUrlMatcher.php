<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/meeting')) {
            // stanhome_meeting_meeting_index
            if (rtrim($pathinfo, '/') === '/meeting') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'stanhome_meeting_meeting_index');
                }

                return array (  '_controller' => 'Stanhome\\MeetingBundle\\Controller\\MeetingController::indexAction',  'sortable' => true,  '_route' => 'stanhome_meeting_meeting_index',);
            }

            // stanhome_meeting_meeting_new
            if ($pathinfo === '/meeting/new') {
                return array (  '_controller' => 'Stanhome\\MeetingBundle\\Controller\\MeetingController::newAction',  '_route' => 'stanhome_meeting_meeting_new',);
            }

            // stanhome_meeting_meeting_create
            if ($pathinfo === '/meeting/create') {
                return array (  '_controller' => 'Stanhome\\MeetingBundle\\Controller\\MeetingController::createAction',  '_route' => 'stanhome_meeting_meeting_create',);
            }

            // stanhome_meeting_meeting_show
            if (0 === strpos($pathinfo, '/meeting/show') && preg_match('#^/meeting/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stanhome_meeting_meeting_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_meeting_meeting_show')), array (  '_controller' => 'Stanhome\\MeetingBundle\\Controller\\MeetingController::showAction',));
            }
            not_stanhome_meeting_meeting_show:

            // stanhome_meeting_meeting_edit
            if (0 === strpos($pathinfo, '/meeting/edit') && preg_match('#^/meeting/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stanhome_meeting_meeting_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_meeting_meeting_edit')), array (  '_controller' => 'Stanhome\\MeetingBundle\\Controller\\MeetingController::editAction',));
            }
            not_stanhome_meeting_meeting_edit:

            // stanhome_meeting_meeting_update
            if (0 === strpos($pathinfo, '/meeting/update') && preg_match('#^/meeting/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_meeting_meeting_update')), array (  '_controller' => 'Stanhome\\MeetingBundle\\Controller\\MeetingController::updateAction',));
            }

            // stanhome_meeting_meeting_delete
            if (0 === strpos($pathinfo, '/meeting/delete') && preg_match('#^/meeting/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stanhome_meeting_meeting_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_meeting_meeting_delete')), array (  '_controller' => 'Stanhome\\MeetingBundle\\Controller\\MeetingController::deleteAction',));
            }
            not_stanhome_meeting_meeting_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
