<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/item' => [[['_route' => 'app_item_index', '_controller' => 'App\\Controller\\ItemController::index'], null, ['GET' => 0], null, false, false, null]],
            '/api/item' => [
                [['_route' => 'item', '_controller' => 'App\\Controller\\ItemController::getItems'], null, ['GET' => 0], null, false, false, null],
                [['_route' => 'create', '_controller' => 'App\\Controller\\ItemController::create'], null, ['POST' => 0], null, false, false, null],
            ],
            '/test1' => [[['_route' => 'app_test1_index', '_controller' => 'App\\Controller\\Test1Controller::index'], null, ['GET' => 0], null, false, false, null]],
            '/test1/results' => [[['_route' => 'app_test1_results', '_controller' => 'App\\Controller\\Test1Controller::results'], null, ['GET' => 0], null, false, false, null]],
            '/api/test1' => [[['_route' => 'app_test1_insert', '_controller' => 'App\\Controller\\Test1Controller::insert'], null, ['POST' => 0], null, false, false, null]],
            '/test2' => [[['_route' => 'app_test2_index', '_controller' => 'App\\Controller\\Test2Controller::index'], null, ['GET' => 0], null, false, false, null]],
            '/test2/import' => [[['_route' => 'app_test2_import', '_controller' => 'App\\Controller\\Test2Controller::import'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                    .'|/api/item/([^/]++)(?'
                        .'|(*:63)'
                        .'|/delete(*:77)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            63 => [[['_route' => 'update', '_controller' => 'App\\Controller\\ItemController::update'], ['id'], ['POST' => 0], null, false, true, null]],
            77 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\ItemController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        ];
    }
}
