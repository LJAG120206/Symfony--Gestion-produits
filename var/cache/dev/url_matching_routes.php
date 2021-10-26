<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/product' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/product/show/([^/]++)(*:29)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:64)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'longDescription', '_controller' => 'App\\Controller\\ProductController::one'], ['id'], null, null, false, true, null]],
        64 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
