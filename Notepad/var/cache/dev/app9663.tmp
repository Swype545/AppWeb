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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
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

        if (0 === strpos($pathinfo, '/note')) {
            if (0 === strpos($pathinfo, '/note/API')) {
                // notepad_api_index
                if ($pathinfo === '/note/API/reset') {
                    return array (  '_controller' => 'NotepadBundle\\Controller\\APIController::indexAction',  '_route' => 'notepad_api_index',);
                }

                if (0 === strpos($pathinfo, '/note/API/notes/show')) {
                    // show_notes
                    if ($pathinfo === '/note/API/notes/showAll') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_show_notes;
                        }

                        return array (  '_controller' => 'NotepadBundle\\Controller\\APIController::getNotesAction',  '_route' => 'show_notes',);
                    }
                    not_show_notes:

                    // show_note
                    if ($pathinfo === '/note/API/notes/showOne') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_show_note;
                        }

                        return array (  '_controller' => 'NotepadBundle\\Controller\\APIController::getNoteAction',  '_route' => 'show_note',);
                    }
                    not_show_note:

                }

                // show_categories
                if ($pathinfo === '/note/API/categories/showAll') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_show_categories;
                    }

                    return array (  '_controller' => 'NotepadBundle\\Controller\\APIController::getCategoriesAction',  '_route' => 'show_categories',);
                }
                not_show_categories:

                if (0 === strpos($pathinfo, '/note/API/notes')) {
                    // API_createNote
                    if ($pathinfo === '/note/API/notes/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_API_createNote;
                        }

                        return array (  '_controller' => 'NotepadBundle\\Controller\\APIController::createNoteAction',  '_route' => 'API_createNote',);
                    }
                    not_API_createNote:

                    // API_editNote
                    if ($pathinfo === '/note/API/notes/edit') {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_API_editNote;
                        }

                        return array (  '_controller' => 'NotepadBundle\\Controller\\APIController::editNoteAction',  '_route' => 'API_editNote',);
                    }
                    not_API_editNote:

                    // API_deleteNote
                    if ($pathinfo === '/note/API/notes/delete') {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_API_deleteNote;
                        }

                        return array (  '_controller' => 'NotepadBundle\\Controller\\APIController::deleteNoteAction',  '_route' => 'API_deleteNote',);
                    }
                    not_API_deleteNote:

                }

                if (0 === strpos($pathinfo, '/note/API/categories')) {
                    // API_createCategory
                    if ($pathinfo === '/note/API/categories/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_API_createCategory;
                        }

                        return array (  '_controller' => 'NotepadBundle\\Controller\\APIController::newCategoryAction',  '_route' => 'API_createCategory',);
                    }
                    not_API_createCategory:

                    // API_editCategory
                    if ($pathinfo === '/note/API/categories/edit') {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_API_editCategory;
                        }

                        return array (  '_controller' => 'NotepadBundle\\Controller\\APIController::editCategoryAction',  '_route' => 'API_editCategory',);
                    }
                    not_API_editCategory:

                    // API_deleteCategory
                    if ($pathinfo === '/note/API/categories/delete') {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_API_deleteCategory;
                        }

                        return array (  '_controller' => 'NotepadBundle\\Controller\\APIController::delCategoryAction',  '_route' => 'API_deleteCategory',);
                    }
                    not_API_deleteCategory:

                }

            }

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
