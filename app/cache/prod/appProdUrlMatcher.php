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

        if (0 === strpos($pathinfo, '/customer')) {
            // stanhome_rh_customer_index
            if (rtrim($pathinfo, '/') === '/customer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'stanhome_rh_customer_index');
                }

                return array (  '_controller' => 'Stanhome\\RhBundle\\Controller\\CustomerController::indexAction',  '_route' => 'stanhome_rh_customer_index',);
            }

            // stanhome_rh_customer_new
            if ($pathinfo === '/customer/new') {
                return array (  '_controller' => 'Stanhome\\RhBundle\\Controller\\CustomerController::newAction',  '_route' => 'stanhome_rh_customer_new',);
            }

            // stanhome_rh_customer_create
            if ($pathinfo === '/customer/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_stanhome_rh_customer_create;
                }

                return array (  '_controller' => 'Stanhome\\RhBundle\\Controller\\CustomerController::createAction',  '_route' => 'stanhome_rh_customer_create',);
            }
            not_stanhome_rh_customer_create:

            // stanhome_rh_customer_show
            if (0 === strpos($pathinfo, '/customer/show') && preg_match('#^/customer/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stanhome_rh_customer_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_rh_customer_show')), array (  '_controller' => 'Stanhome\\RhBundle\\Controller\\CustomerController::showAction',));
            }
            not_stanhome_rh_customer_show:

            // stanhome_rh_customer_edit
            if (0 === strpos($pathinfo, '/customer/edit') && preg_match('#^/customer/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stanhome_rh_customer_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_rh_customer_edit')), array (  '_controller' => 'Stanhome\\RhBundle\\Controller\\CustomerController::editAction',));
            }
            not_stanhome_rh_customer_edit:

            // stanhome_rh_customer_update
            if (0 === strpos($pathinfo, '/customer/update') && preg_match('#^/customer/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_stanhome_rh_customer_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_rh_customer_update')), array (  '_controller' => 'Stanhome\\RhBundle\\Controller\\CustomerController::updateAction',));
            }
            not_stanhome_rh_customer_update:

        }

        // portal_search
        if (0 === strpos($pathinfo, '/search') && preg_match('#^/search/(?P<fields>[^/]++)/(?P<modes>[^/]++)/(?P<searchString>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_portal_search;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'portal_search')), array (  '_controller' => 'Stanhome\\PortalBundle\\Controller\\SearchController::searchAction',));
        }
        not_portal_search:

        // stanhome_portal_dashboard_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'stanhome_portal_dashboard_index');
            }

            return array (  '_controller' => 'Stanhome\\PortalBundle\\Controller\\DashboardController::indexAction',  '_route' => 'stanhome_portal_dashboard_index',);
        }

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

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
