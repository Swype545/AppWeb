<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/note')) {
            // notepad_default_index
            if (rtrim($pathinfo, '/') === '/note') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'notepad_default_index');
                }

                return array (  '_controller' => 'NotepadBundle\\Controller\\DefaultController::indexAction',  '_route' => 'notepad_default_index',);
            }

            if (0 === strpos($pathinfo, '/note/notelist')) {
                // notelist
                if ($pathinfo === '/note/notelist') {
                    return array (  '_controller' => 'NotepadBundle\\Controller\\DefaultController::notelistAction',  '_route' => 'notelist',);
                }

                // categorylist
                if ($pathinfo === '/note/notelist/categorylist') {
                    return array (  '_controller' => 'NotepadBundle\\Controller\\DefaultController::categorylistAction',  '_route' => 'categorylist',);
                }

                // newnote
                if ($pathinfo === '/note/notelist/newnote') {
                    return array (  '_controller' => 'NotepadBundle\\Controller\\DefaultController::newnoteAction',  '_route' => 'newnote',);
                }

                // editnote
                if (0 === strpos($pathinfo, '/note/notelist/editnote') && preg_match('#^/note/notelist/editnote/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editnote')), array (  '_controller' => 'NotepadBundle\\Controller\\DefaultController::editnoteAction',));
                }

                // deletenote
                if (0 === strpos($pathinfo, '/note/notelist/deletenote') && preg_match('#^/note/notelist/deletenote/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletenote')), array (  '_controller' => 'NotepadBundle\\Controller\\DefaultController::deletenoteAction',));
                }

                // newcategory
                if ($pathinfo === '/note/notelist/newcategory') {
                    return array (  '_controller' => 'NotepadBundle\\Controller\\DefaultController::newcategoryAction',  '_route' => 'newcategory',);
                }

                // editcategory
                if (0 === strpos($pathinfo, '/note/notelist/editcategory') && preg_match('#^/note/notelist/editcategory/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editcategory')), array (  '_controller' => 'NotepadBundle\\Controller\\DefaultController::editcategoryAction',));
                }

                // deletecategory
                if (0 === strpos($pathinfo, '/note/notelist/deletecategory') && preg_match('#^/note/notelist/deletecategory/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletecategory')), array (  '_controller' => 'NotepadBundle\\Controller\\DefaultController::deletecategoryAction',));
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
