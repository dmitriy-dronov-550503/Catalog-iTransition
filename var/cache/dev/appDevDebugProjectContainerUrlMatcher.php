<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // app_admin_admin
        if ('/admin' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\AdminController::adminAction',  '_route' => 'app_admin_admin',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // human_editor
        if ('/human' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\HumanController::createAction',  '_route' => 'human_editor',);
        }

        if (0 === strpos($pathinfo, '/register')) {
            // user_registration
            if ('/register' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
            }

            // user_registration_success
            if ('/register/success' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::successAction',  '_route' => 'user_registration_success',);
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_oauth
            if ('/login/oauth' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::addAction',  '_route' => 'login_oauth',);
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        // student_create
        if ('/student_create' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\StudentCreateController::createAction',  '_route' => 'student_create',);
        }

        // student_edit
        if ('/student_edit' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\StudentEditController::createAction',  '_route' => 'student_edit',);
        }

        // teacher_create
        if ('/teacher_create' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TeacherCreateController::createAction',  '_route' => 'teacher_create',);
        }

        if (0 === strpos($pathinfo, '/userslist')) {
            // users_list
            if ('/userslist' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersListController::listAction',  '_route' => 'users_list',);
            }

            // users_list_block
            if (0 === strpos($pathinfo, '/userslist/block') && preg_match('#^/userslist/block/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_list_block')), array (  '_controller' => 'AppBundle\\Controller\\UsersListController::blockAction',));
            }

            // delete
            if ('/userslist/delete' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersListController::deleteAction',  '_route' => 'delete',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
