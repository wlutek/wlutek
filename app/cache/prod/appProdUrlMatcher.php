<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // app_homepage
        if (preg_match('#^/(?P<_locale>en|pl)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_homepage')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',));
        }

        // app_about_us
        if ($pathinfo === '/about-us') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::about_usAction',  '_route' => 'app_about_us',);
        }

        // app_news
        if ($pathinfo === '/news') {
            return array (  '_controller' => 'AppBundle\\Controller\\NewsController::indexAction',  '_route' => 'app_news',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
