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
    'admin_index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], []],
    'admin_chef' => [[], ['_controller' => 'App\\Controller\\AdminController::show'], [], [['text', '/admin/chef']], [], []],
    'admin_showUsers' => [[], ['_controller' => 'App\\Controller\\AdminController::showUsers'], [], [['text', '/admin/showUsers']], [], []],
    'admin_ModifierUser' => [['id'], ['_controller' => 'App\\Controller\\AdminController::ModifierUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/ModifierUser']], [], []],
    'admin_blockUser' => [['id'], ['_controller' => 'App\\Controller\\AdminController::blockUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/blockUser']], [], []],
    'admin_unblockUser' => [['id'], ['_controller' => 'App\\Controller\\AdminController::unblockUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/unblockUser']], [], []],
    'admin_trierNomASC' => [[], ['_controller' => 'App\\Controller\\AdminController::trierNomASC'], [], [['text', '/admin/trierNomASC']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\BackController::index'], [], [['text', '/admin']], [], []],
    'categorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::indexFront'], [], [['text', '/categorie']], [], []],
    'chef_index' => [[], ['_controller' => 'App\\Controller\\ChefController::index'], [], [['text', '/chef/']], [], []],
    'client_profil' => [[], ['_controller' => 'App\\Controller\\ClientController::profile'], [], [['text', '/client/profil']], [], []],
    'client_profilup' => [['id'], ['_controller' => 'App\\Controller\\ClientController::modifier'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/client/profilup']], [], []],
    'client_editPass' => [['id'], ['_controller' => 'App\\Controller\\ClientController::modifierMotdepasse'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/client/editPass']], [], []],
    'event' => [[], ['_controller' => 'App\\Controller\\EvenementController::indexFront'], [], [['text', '/evenements']], [], []],
    'evenement' => [[], ['_controller' => 'App\\Controller\\EvenementController::indexBack'], [], [['text', '/admin-evenements']], [], []],
    'addEvenement' => [[], ['_controller' => 'App\\Controller\\EvenementController::addEvenement'], [], [['text', '/admin-addEvenement']], [], []],
    'front' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/']], [], []],
    'team' => [[], ['_controller' => 'App\\Controller\\FrontController::afficherChefs'], [], [['text', '/team']], [], []],
    'show_chef' => [['id'], ['_controller' => 'App\\Controller\\FrontController::afficherDetailsChef'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/show_chef']], [], []],
    'livreur' => [[], ['_controller' => 'App\\Controller\\LivreurController::index'], [], [['text', '/livreur']], [], []],
    'planning' => [[], ['_controller' => 'App\\Controller\\PlanningController::index'], [], [['text', '/planning']], [], []],
    'ajouterplanning' => [[], ['_controller' => 'App\\Controller\\PlanningController::ajouterplanning'], [], [['text', '/ajouterplanning']], [], []],
    'deal' => [[], ['_controller' => 'App\\Controller\\PromotionController::indexFront'], [], [['text', '/promotions']], [], []],
    'promotion' => [[], ['_controller' => 'App\\Controller\\PromotionController::indexBack'], [], [['text', '/admin-promotions']], [], []],
    'addPromotion' => [[], ['_controller' => 'App\\Controller\\PromotionController::addPromotion'], [], [['text', '/admin-addPromotion']], [], []],
    'recette' => [[], ['_controller' => 'App\\Controller\\RecetteController::index'], [], [['text', '/admin-recette']], [], []],
    'reservation' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation']], [], []],
    'registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/registration']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'login_success' => [[], ['_controller' => 'App\\Controller\\SecurityController::loginSuccess'], [], [['text', '/login_success']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'activation' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::activation'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/activation']], [], []],
    'oubliPass' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPass'], [], [['text', '/oubliPass']], [], []],
    'resetPassword' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::resetPass'], [], [['variable', '', '[^/]++', 'token'], ['text', '/resetPassword']], [], []],
    'gregwar_captcha.generate_captcha' => [['key'], ['_controller' => 'Gregwar\\CaptchaBundle\\Controller\\CaptchaController::generateCaptchaAction'], [], [['variable', '/', '[^/]++', 'key'], ['text', '/_gcb/generate-captcha']], [], []],
];
