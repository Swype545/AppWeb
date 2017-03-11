<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notepad_api_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\APIController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/API/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_notes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\APIController::getNotesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/API/notes/showAll',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_note' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\APIController::getNoteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/API/notes/showOne',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_categories' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\APIController::getCategoriesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/API/categories/showAll',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'API_createNote' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\APIController::createNoteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/API/notes/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'API_editNote' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\APIController::editNoteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/API/notes/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'API_deleteNote' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\APIController::deleteNoteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/API/notes/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'API_createCategory' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\APIController::newCategoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/API/categories/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'API_editCategory' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\APIController::editCategoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/API/categories/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'API_deleteCategory' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\APIController::delCategoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/API/categories/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notepad_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notelist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\DefaultController::notelistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/notelist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorylist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\DefaultController::categorylistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/notelist/categorylist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newnote' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\DefaultController::newnoteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/notelist/newnote',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editnote' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\DefaultController::editnoteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/note/notelist/editnote',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deletenote' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\DefaultController::deletenoteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/note/notelist/deletenote',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newcategory' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\DefaultController::newcategoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/note/notelist/newcategory',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editcategory' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\DefaultController::editcategoryAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/note/notelist/editcategory',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deletecategory' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'NotepadBundle\\Controller\\DefaultController::deletecategoryAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/note/notelist/deletecategory',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
