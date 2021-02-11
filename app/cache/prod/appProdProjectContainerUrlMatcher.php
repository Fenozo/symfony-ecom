<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        // acme_test_default_index
        if ('/test' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_acme_test_default_index;
            } else {
                return $this->redirect($rawPathinfo.'/', 'acme_test_default_index');
            }

            return array (  '_controller' => 'Acme\\TestBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_test_default_index',);
        }
        not_acme_test_default_index:

        if (0 === strpos($pathinfo, '/blog')) {
            // acme_blog_default_index
            if ('/blog' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_acme_blog_default_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'acme_blog_default_index');
                }

                return array (  '_controller' => 'Acme\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_blog_default_index',);
            }
            not_acme_blog_default_index:

            // acme_blog_default_otherction
            if ('/blog/other' === $pathinfo) {
                return array (  '_controller' => 'Acme\\BlogBundle\\Controller\\DefaultController::otherction',  '_route' => 'acme_blog_default_otherction',);
            }

        }

        // homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }
        not_homepage:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
