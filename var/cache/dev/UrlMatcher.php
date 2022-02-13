<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie', '_controller' => 'App\\Controller\\CategorieController::indexFront'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\ClientController::prfile'], null, null, null, false, false, null]],
        '/profilup' => [[['_route' => 'profilup', '_controller' => 'App\\Controller\\ClientController::update'], null, null, null, false, false, null]],
        '/showClients' => [[['_route' => 'showClients', '_controller' => 'App\\Controller\\ClientController::show'], null, null, null, false, false, null]],
        '/evenements' => [[['_route' => 'event', '_controller' => 'App\\Controller\\EvenementController::indexFront'], null, null, null, false, false, null]],
        '/admin-evenements' => [[['_route' => 'evenement', '_controller' => 'App\\Controller\\EvenementController::indexBack'], null, null, null, false, false, null]],
        '/admin-addEvenement' => [[['_route' => 'addEvenement', '_controller' => 'App\\Controller\\EvenementController::addEvenement'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/planning' => [[['_route' => 'planning', '_controller' => 'App\\Controller\\PlanningController::index'], null, null, null, false, false, null]],
        '/ajouterplanning' => [[['_route' => 'ajouterplanning', '_controller' => 'App\\Controller\\PlanningController::ajouterplanning'], null, null, null, false, false, null]],
        '/promotions' => [[['_route' => 'deal', '_controller' => 'App\\Controller\\PromotionController::indexFront'], null, null, null, false, false, null]],
        '/admin-promotions' => [[['_route' => 'promotion', '_controller' => 'App\\Controller\\PromotionController::indexBack'], null, null, null, false, false, null]],
        '/admin-addPromotion' => [[['_route' => 'addPromotion', '_controller' => 'App\\Controller\\PromotionController::addPromotion'], null, null, null, false, false, null]],
        '/admin-recette' => [[['_route' => 'recette', '_controller' => 'App\\Controller\\RecetteController::index'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/deleteClient/([^/]++)(*:191)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [
            [['_route' => 'deleteClient', '_controller' => 'App\\Controller\\ClientController::deleteUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
