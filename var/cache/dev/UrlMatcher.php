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
        '/admin' => [
            [['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null],
            [['_route' => 'admin', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null],
        ],
        '/admin/chef' => [[['_route' => 'admin_chef', '_controller' => 'App\\Controller\\AdminController::show'], null, null, null, false, false, null]],
        '/admin/showUsers' => [[['_route' => 'admin_showUsers', '_controller' => 'App\\Controller\\AdminController::showUsers'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie', '_controller' => 'App\\Controller\\CategorieController::indexFront'], null, null, null, false, false, null]],
        '/chef' => [[['_route' => 'chef_index', '_controller' => 'App\\Controller\\ChefController::index'], null, null, null, true, false, null]],
        '/client/profil' => [[['_route' => 'client_profil', '_controller' => 'App\\Controller\\ClientController::profile'], null, null, null, false, false, null]],
        '/evenements' => [[['_route' => 'event', '_controller' => 'App\\Controller\\EvenementController::indexFront'], null, null, null, false, false, null]],
        '/admin-evenements' => [[['_route' => 'evenement', '_controller' => 'App\\Controller\\EvenementController::indexBack'], null, null, null, false, false, null]],
        '/admin-addEvenement' => [[['_route' => 'addEvenement', '_controller' => 'App\\Controller\\EvenementController::addEvenement'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/livreur' => [[['_route' => 'livreur', '_controller' => 'App\\Controller\\LivreurController::index'], null, null, null, false, false, null]],
        '/planning' => [[['_route' => 'planning', '_controller' => 'App\\Controller\\PlanningController::index'], null, null, null, false, false, null]],
        '/ajouterplanning' => [[['_route' => 'ajouterplanning', '_controller' => 'App\\Controller\\PlanningController::ajouterplanning'], null, null, null, false, false, null]],
        '/promotions' => [[['_route' => 'deal', '_controller' => 'App\\Controller\\PromotionController::indexFront'], null, null, null, false, false, null]],
        '/admin-promotions' => [[['_route' => 'promotion', '_controller' => 'App\\Controller\\PromotionController::indexBack'], null, null, null, false, false, null]],
        '/admin-addPromotion' => [[['_route' => 'addPromotion', '_controller' => 'App\\Controller\\PromotionController::addPromotion'], null, null, null, false, false, null]],
        '/admin-recette' => [[['_route' => 'recette', '_controller' => 'App\\Controller\\RecetteController::index'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/access_denied' => [[['_route' => 'access_denied', '_controller' => 'App\\Controller\\SecurityController::accessDenied'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|ModifierUser/([^/]++)(*:203)'
                        .'|deleteUser/([^/]++)(*:230)'
                    .')'
                    .'|ctivation/([^/]++)(*:257)'
                .')'
                .'|/client/(?'
                    .'|profilup/([^/]++)(*:294)'
                    .'|editPass/([^/]++)(*:319)'
                .')'
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
        203 => [[['_route' => 'admin_ModifierUser', '_controller' => 'App\\Controller\\AdminController::ModifierUser'], ['id'], null, null, false, true, null]],
        230 => [[['_route' => 'admin_deleteUser', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'activation', '_controller' => 'App\\Controller\\SecurityController::activation'], ['token'], null, null, false, true, null]],
        294 => [[['_route' => 'client_profilup', '_controller' => 'App\\Controller\\ClientController::modifier'], ['id'], null, null, false, true, null]],
        319 => [
            [['_route' => 'client_editPass', '_controller' => 'App\\Controller\\ClientController::modifierMotdepasse'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
