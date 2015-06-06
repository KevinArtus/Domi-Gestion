<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

        if (0 === strpos($pathinfo, '/product')) {
            // stanhome_product_product_index
            if (rtrim($pathinfo, '/') === '/product') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stanhome_product_product_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'stanhome_product_product_index');
                }

                return array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\ProductController::indexAction',  '_route' => 'stanhome_product_product_index',);
            }
            not_stanhome_product_product_index:

            // stanhome_product_product_new
            if ($pathinfo === '/product/new') {
                return array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\ProductController::newAction',  '_route' => 'stanhome_product_product_new',);
            }

            // stanhome_product_product_create
            if ($pathinfo === '/product/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_stanhome_product_product_create;
                }

                return array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\ProductController::createAction',  '_route' => 'stanhome_product_product_create',);
            }
            not_stanhome_product_product_create:

            // stanhome_product_product_show
            if (0 === strpos($pathinfo, '/product/show') && preg_match('#^/product/show/(?P<reference>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_product_product_show')), array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\ProductController::showAction',));
            }

            // stanhome_product_product_listbycat
            if (0 === strpos($pathinfo, '/product/list') && preg_match('#^/product/list/(?P<idcat>[^/]++)/(?P<catlibelle>[^/]++)/(?P<idbrand>[^/]++)/(?P<brandlibelle>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_product_product_listbycat')), array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\ProductController::listAction',));
            }

            // stanhome_product_product_edit
            if (0 === strpos($pathinfo, '/product/edit') && preg_match('#^/product/edit/(?P<reference>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_product_product_edit')), array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\ProductController::editAction',));
            }

            // stanhome_product_product_update
            if (0 === strpos($pathinfo, '/product/update') && preg_match('#^/product/update/(?P<reference>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_stanhome_product_product_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_product_product_update')), array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\ProductController::updateAction',));
            }
            not_stanhome_product_product_update:

            // stanhome_product_product_delete
            if (0 === strpos($pathinfo, '/product/delete') && preg_match('#^/product/delete/(?P<reference>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_stanhome_product_product_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_product_product_delete')), array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\ProductController::deleteAction',));
            }
            not_stanhome_product_product_delete:

        }

        if (0 === strpos($pathinfo, '/brand')) {
            // stanhome_product_brand_index
            if (rtrim($pathinfo, '/') === '/brand') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'stanhome_product_brand_index');
                }

                return array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\BrandController::indexAction',  '_route' => 'stanhome_product_brand_index',);
            }

            // stanhome_product_brand_new
            if ($pathinfo === '/brand/new') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_stanhome_product_brand_new;
                }

                return array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\BrandController::newAction',  '_route' => 'stanhome_product_brand_new',);
            }
            not_stanhome_product_brand_new:

            // stanhome_product_brand_create
            if ($pathinfo === '/brand/create') {
                return array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\BrandController::createAction',  '_route' => 'stanhome_product_brand_create',);
            }

            // stanhome_product_brand_show
            if (0 === strpos($pathinfo, '/brand/show') && preg_match('#^/brand/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stanhome_product_brand_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_product_brand_show')), array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\BrandController::showAction',));
            }
            not_stanhome_product_brand_show:

            // stanhome_product_brand_edit
            if (0 === strpos($pathinfo, '/brand/edit') && preg_match('#^/brand/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stanhome_product_brand_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_product_brand_edit')), array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\BrandController::editAction',));
            }
            not_stanhome_product_brand_edit:

            // stanhome_product_brand_update
            if (0 === strpos($pathinfo, '/brand/update') && preg_match('#^/brand/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_stanhome_product_brand_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_product_brand_update')), array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\BrandController::updateAction',));
            }
            not_stanhome_product_brand_update:

            // stanhome_product_brand_delete
            if (0 === strpos($pathinfo, '/brand/delete') && preg_match('#^/brand/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stanhome_product_brand_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_product_brand_delete')), array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\BrandController::deleteAction',));
            }
            not_stanhome_product_brand_delete:

        }

        if (0 === strpos($pathinfo, '/category')) {
            // stanhome_product_category_index
            if (rtrim($pathinfo, '/') === '/category') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stanhome_product_category_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'stanhome_product_category_index');
                }

                return array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\CategoryController::indexAction',  '_route' => 'stanhome_product_category_index',);
            }
            not_stanhome_product_category_index:

            // stanhome_product_category_new
            if ($pathinfo === '/category/new') {
                return array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\CategoryController::newAction',  '_route' => 'stanhome_product_category_new',);
            }

            // stanhome_product_category_create
            if ($pathinfo === '/category/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_stanhome_product_category_create;
                }

                return array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\CategoryController::createAction',  '_route' => 'stanhome_product_category_create',);
            }
            not_stanhome_product_category_create:

            // stanhome_product_category_edit
            if (0 === strpos($pathinfo, '/category/edit') && preg_match('#^/category/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_product_category_edit')), array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\CategoryController::editAction',));
            }

            // stanhome_product_category_update
            if (0 === strpos($pathinfo, '/category/update') && preg_match('#^/category/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_stanhome_product_category_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_product_category_update')), array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\CategoryController::updateAction',));
            }
            not_stanhome_product_category_update:

            // stanhome_product_category_delete
            if (0 === strpos($pathinfo, '/category/delete') && preg_match('#^/category/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stanhome_product_category_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_product_category_delete')), array (  '_controller' => 'Stanhome\\ProductBundle\\Controller\\CategoryController::deleteAction',));
            }
            not_stanhome_product_category_delete:

        }

        // stanhome_portal_dashboard_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'stanhome_portal_dashboard_index');
            }

            return array (  '_controller' => 'Stanhome\\PortalBundle\\Controller\\DashboardController::indexAction',  '_route' => 'stanhome_portal_dashboard_index',);
        }

        if (0 === strpos($pathinfo, '/shopping')) {
            // stanhome_shopping_shopping_index
            if (rtrim($pathinfo, '/') === '/shopping') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'stanhome_shopping_shopping_index');
                }

                return array (  '_controller' => 'Stanhome\\ShoppingBundle\\Controller\\ShoppingController::indexAction',  '_route' => 'stanhome_shopping_shopping_index',);
            }

            // stanhome_shopping_shopping_new
            if ($pathinfo === '/shopping/new') {
                return array (  '_controller' => 'Stanhome\\ShoppingBundle\\Controller\\ShoppingController::newAction',  '_route' => 'stanhome_shopping_shopping_new',);
            }

            // stanhome_shopping_shopping_create
            if ($pathinfo === '/shopping/create') {
                return array (  '_controller' => 'Stanhome\\ShoppingBundle\\Controller\\ShoppingController::createAction',  '_route' => 'stanhome_shopping_shopping_create',);
            }

            // stanhome_shopping_shopping_show
            if (0 === strpos($pathinfo, '/shopping/show') && preg_match('#^/shopping/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stanhome_shopping_shopping_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_shopping_shopping_show')), array (  '_controller' => 'Stanhome\\ShoppingBundle\\Controller\\ShoppingController::showAction',));
            }
            not_stanhome_shopping_shopping_show:

            // stanhome_shopping_shopping_edit
            if (0 === strpos($pathinfo, '/shopping/edit') && preg_match('#^/shopping/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stanhome_shopping_shopping_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_shopping_shopping_edit')), array (  '_controller' => 'Stanhome\\ShoppingBundle\\Controller\\ShoppingController::editAction',));
            }
            not_stanhome_shopping_shopping_edit:

            // stanhome_shopping_shopping_update
            if (0 === strpos($pathinfo, '/shopping/update') && preg_match('#^/shopping/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_stanhome_shopping_shopping_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_shopping_shopping_update')), array (  '_controller' => 'Stanhome\\ShoppingBundle\\Controller\\ShoppingController::updateAction',));
            }
            not_stanhome_shopping_shopping_update:

            // stanhome_shopping_shopping_delete
            if (0 === strpos($pathinfo, '/shopping/delete') && preg_match('#^/shopping/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stanhome_shopping_shopping_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stanhome_shopping_shopping_delete')), array (  '_controller' => 'Stanhome\\ShoppingBundle\\Controller\\ShoppingController::deleteAction',));
            }
            not_stanhome_shopping_shopping_delete:

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
