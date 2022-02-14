<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'back_index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/back/']], [], []],
    'back_chef' => [[], ['_controller' => 'App\\Controller\\AdminController::show'], [], [['text', '/back/chef']], [], []],
    'back_showEmployes' => [[], ['_controller' => 'App\\Controller\\AdminController::showEmployes'], [], [['text', '/back/showEmployes']], [], []],
    'back_ModifierEmploye' => [['id'], ['_controller' => 'App\\Controller\\AdminController::ModifierEmploye'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/back/ModifierEmploye']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\BackController::index'], [], [['text', '/admin']], [], []],
    'categorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::indexFront'], [], [['text', '/categorie']], [], []],
    'profil' => [[], ['_controller' => 'App\\Controller\\ClientController::prfile'], [], [['text', '/profil']], [], []],
    'profilup' => [[], ['_controller' => 'App\\Controller\\ClientController::update'], [], [['text', '/profilup']], [], []],
    'showClients' => [[], ['_controller' => 'App\\Controller\\ClientController::show'], [], [['text', '/showClients']], [], []],
    'deleteClient' => [['id'], ['_controller' => 'App\\Controller\\ClientController::deleteUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/deleteClient']], [], []],
    'event' => [[], ['_controller' => 'App\\Controller\\EvenementController::indexFront'], [], [['text', '/evenements']], [], []],
    'evenement' => [[], ['_controller' => 'App\\Controller\\EvenementController::indexBack'], [], [['text', '/admin-evenements']], [], []],
    'addEvenement' => [[], ['_controller' => 'App\\Controller\\EvenementController::addEvenement'], [], [['text', '/admin-addEvenement']], [], []],
    'front' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/']], [], []],
    'planning' => [[], ['_controller' => 'App\\Controller\\PlanningController::index'], [], [['text', '/planning']], [], []],
    'ajouterplanning' => [[], ['_controller' => 'App\\Controller\\PlanningController::ajouterplanning'], [], [['text', '/ajouterplanning']], [], []],
    'deal' => [[], ['_controller' => 'App\\Controller\\PromotionController::indexFront'], [], [['text', '/promotions']], [], []],
    'promotion' => [[], ['_controller' => 'App\\Controller\\PromotionController::indexBack'], [], [['text', '/admin-promotions']], [], []],
    'addPromotion' => [[], ['_controller' => 'App\\Controller\\PromotionController::addPromotion'], [], [['text', '/admin-addPromotion']], [], []],
    'recette' => [[], ['_controller' => 'App\\Controller\\RecetteController::index'], [], [['text', '/admin-recette']], [], []],
    'reservation' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation']], [], []],
    'registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/registration']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
