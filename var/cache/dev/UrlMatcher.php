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
        '/admin/showNotif' => [[['_route' => 'admin_showNotif', '_controller' => 'App\\Controller\\AdminController::showNotification'], null, null, null, false, false, null]],
        '/adminreadNotif' => [[['_route' => 'admin_readNotif', '_controller' => 'App\\Controller\\AdminController::readNotifications'], null, null, null, false, false, null]],
        '/admin/searchBack' => [[['_route' => 'admin_searchBack', '_controller' => 'App\\Controller\\AdminController::search'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie', '_controller' => 'App\\Controller\\CategorieController::indexFront'], null, null, null, false, false, null]],
        '/chef' => [[['_route' => 'chef_index', '_controller' => 'App\\Controller\\ChefController::index'], null, null, null, true, false, null]],
        '/client/profil' => [[['_route' => 'client_profil', '_controller' => 'App\\Controller\\ClientController::profile'], null, null, null, false, false, null]],
        '/evenements' => [[['_route' => 'event', '_controller' => 'App\\Controller\\EvenementController::indexFront'], null, null, null, false, false, null]],
        '/admin-evenements' => [[['_route' => 'evenement', '_controller' => 'App\\Controller\\EvenementController::indexBack'], null, null, null, false, false, null]],
        '/admin-addEvenement' => [[['_route' => 'addEvenement', '_controller' => 'App\\Controller\\EvenementController::addEvenement'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team', '_controller' => 'App\\Controller\\FrontController::afficherChefs'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\FrontController::search'], null, null, null, false, false, null]],
        '/showReview' => [[['_route' => 'showReview', '_controller' => 'App\\Controller\\FrontController::showReviews'], null, null, null, false, false, null]],
        '/addReview' => [[['_route' => 'addReview', '_controller' => 'App\\Controller\\FrontController::ajouterReview'], null, null, null, false, false, null]],
        '/calculer' => [[['_route' => 'calculer', '_controller' => 'App\\Controller\\FrontController::calculer'], null, null, null, false, false, null]],
        '/addRevJson' => [[['_route' => 'addRevJson', '_controller' => 'App\\Controller\\FrontController::addRevJson'], null, null, null, false, false, null]],
        '/showRevJson' => [[['_route' => 'showRevJson', '_controller' => 'App\\Controller\\FrontController::allReviewsJson'], null, null, null, false, false, null]],
        '/livreur' => [[['_route' => 'livreur_index', '_controller' => 'App\\Controller\\LivreurController::index'], null, null, null, true, false, null]],
        '/planning' => [[['_route' => 'planning', '_controller' => 'App\\Controller\\PlanningController::index'], null, null, null, false, false, null]],
        '/ajouterplanning' => [[['_route' => 'ajouterplanning', '_controller' => 'App\\Controller\\PlanningController::ajouterplanning'], null, null, null, false, false, null]],
        '/promotions' => [[['_route' => 'deal', '_controller' => 'App\\Controller\\PromotionController::indexFront'], null, null, null, false, false, null]],
        '/admin-promotions' => [[['_route' => 'promotion', '_controller' => 'App\\Controller\\PromotionController::indexBack'], null, null, null, false, false, null]],
        '/admin-addPromotion' => [[['_route' => 'addPromotion', '_controller' => 'App\\Controller\\PromotionController::addPromotion'], null, null, null, false, false, null]],
        '/admin-recette' => [[['_route' => 'recette', '_controller' => 'App\\Controller\\RecetteController::index'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/add_rec' => [[['_route' => 'add_rec', '_controller' => 'App\\Controller\\ReclamationController::add'], null, null, null, false, false, null]],
        '/show_rec' => [[['_route' => 'show_rec', '_controller' => 'App\\Controller\\ReclamationController::showReclamation'], null, null, null, false, false, null]],
        '/addRecJson' => [[['_route' => 'addRecJson', '_controller' => 'App\\Controller\\ReclamationController::addRecJson'], null, null, null, false, false, null]],
        '/showRecJson' => [[['_route' => 'showRecJson', '_controller' => 'App\\Controller\\ReclamationController::allReclamationJson'], null, null, null, false, false, null]],
        '/reponseJson' => [[['_route' => 'reponseJson', '_controller' => 'App\\Controller\\ReclamationController::reponseJson'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/login_success' => [[['_route' => 'login_success', '_controller' => 'App\\Controller\\SecurityController::loginSuccess'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/oubliPass' => [[['_route' => 'oubliPass', '_controller' => 'App\\Controller\\SecurityController::forgottenPass'], null, null, null, false, false, null]],
        '/signUpJson' => [[['_route' => 'signUpJson', '_controller' => 'App\\Controller\\SecurityController::signUpAction'], null, null, null, false, false, null]],
        '/signInJson' => [[['_route' => 'signInJson', '_controller' => 'App\\Controller\\SecurityController::signInAction'], null, null, null, false, false, null]],
        '/editUserJson' => [[['_route' => 'editUserJson', '_controller' => 'App\\Controller\\SecurityController::editUser'], null, null, null, false, false, null]],
        '/oubliPassJSON' => [[['_route' => 'oubliPassJSON', '_controller' => 'App\\Controller\\SecurityController::forgottenPassJSON'], null, null, null, false, false, null]],
        '/showUserJson' => [[['_route' => 'showUserJson', '_controller' => 'App\\Controller\\SecurityController::allUsersJson'], null, null, null, false, false, null]],
        '/deleteUserJson' => [[['_route' => 'deleteUserJson', '_controller' => 'App\\Controller\\SecurityController::deleteUserJson'], null, null, null, false, false, null]],
        '/roleJson' => [[['_route' => 'roleJson', '_controller' => 'App\\Controller\\SecurityController::ModifierUser'], null, null, null, false, false, null]],
        '/updatePassJson' => [[['_route' => 'updatePassJson', '_controller' => 'App\\Controller\\SecurityController::updatePass'], null, null, null, false, false, null]],
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
                    .'|gcb/generate\\-captcha/([^/]++)(*:198)'
                .')'
                .'|/a(?'
                    .'|dmin(?'
                        .'|/(?'
                            .'|ModifierUser/([^/]++)(*:244)'
                            .'|blockUser/([^/]++)(*:270)'
                            .'|unblockUser/([^/]++)(*:298)'
                        .')'
                        .'|deleteReview/([^/]++)(*:328)'
                    .')'
                    .'|ctivation/([^/]++)(*:355)'
                .')'
                .'|/client/(?'
                    .'|profilup/([^/]++)(*:392)'
                    .'|editPass/([^/]++)(*:417)'
                .')'
                .'|/show_chef/([^/]++)(*:445)'
                .'|/delete(?'
                    .'|Re(?'
                        .'|vJson/([^/]++)(*:482)'
                        .'|cJson/([^/]++)(*:504)'
                    .')'
                    .'|_rec([^/]++)(*:525)'
                .')'
                .'|/re(?'
                    .'|c_res/([^/]++)(*:554)'
                    .'|setPassword(?'
                        .'|([^/]++)(*:584)'
                        .'|JSON/([^/]++)/([^/]++)(*:614)'
                    .')'
                .')'
                .'|/u(?'
                    .'|pdateRecJson/([^/]++)(*:650)'
                    .'|nblockUserJson/([^/]++)(*:681)'
                .')'
                .'|/blockUserJson/([^/]++)(*:713)'
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
        198 => [[['_route' => 'gregwar_captcha.generate_captcha', '_controller' => 'Gregwar\\CaptchaBundle\\Controller\\CaptchaController::generateCaptchaAction'], ['key'], null, null, false, true, null]],
        244 => [[['_route' => 'admin_ModifierUser', '_controller' => 'App\\Controller\\AdminController::ModifierUser'], ['id'], null, null, false, true, null]],
        270 => [[['_route' => 'admin_blockUser', '_controller' => 'App\\Controller\\AdminController::blockUser'], ['id'], null, null, false, true, null]],
        298 => [[['_route' => 'admin_unblockUser', '_controller' => 'App\\Controller\\AdminController::unblockUser'], ['id'], null, null, false, true, null]],
        328 => [[['_route' => 'admin_deleteReview', '_controller' => 'App\\Controller\\AdminController::deleteReview'], ['id'], null, null, false, true, null]],
        355 => [[['_route' => 'activation', '_controller' => 'App\\Controller\\SecurityController::activation'], ['token'], null, null, false, true, null]],
        392 => [[['_route' => 'client_profilup', '_controller' => 'App\\Controller\\ClientController::modifier'], ['id'], null, null, false, true, null]],
        417 => [[['_route' => 'client_editPass', '_controller' => 'App\\Controller\\ClientController::modifierMotdepasse'], ['id'], null, null, false, true, null]],
        445 => [[['_route' => 'show_chef', '_controller' => 'App\\Controller\\FrontController::afficherDetailsChef'], ['id'], null, null, false, true, null]],
        482 => [[['_route' => 'deleteRevJson', '_controller' => 'App\\Controller\\FrontController::deleteReviewJson'], ['id'], null, null, false, true, null]],
        504 => [[['_route' => 'deleteRecJson', '_controller' => 'App\\Controller\\ReclamationController::deleteReclamationJson'], ['id'], null, null, false, true, null]],
        525 => [[['_route' => 'delete_rec', '_controller' => 'App\\Controller\\ReclamationController::deleteRec'], ['id'], null, null, false, true, null]],
        554 => [[['_route' => 'rec_res', '_controller' => 'App\\Controller\\ReclamationController::reponse'], ['id'], null, null, false, true, null]],
        584 => [[['_route' => 'resetPassword', '_controller' => 'App\\Controller\\SecurityController::resetPass'], ['token'], null, null, false, true, null]],
        614 => [[['_route' => 'resetPasswordJSON', '_controller' => 'App\\Controller\\SecurityController::resetPassJSON'], ['code', 'password'], null, null, false, true, null]],
        650 => [[['_route' => 'updateRecJson', '_controller' => 'App\\Controller\\ReclamationController::modifierReclamationJson'], ['id'], null, null, false, true, null]],
        681 => [[['_route' => 'unblockUserJson', '_controller' => 'App\\Controller\\SecurityController::unblockUser'], ['id'], null, null, false, true, null]],
        713 => [
            [['_route' => 'blockUserJson', '_controller' => 'App\\Controller\\SecurityController::blockUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
