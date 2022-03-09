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
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/chef' => [[['_route' => 'admin_chef', '_controller' => 'App\\Controller\\AdminController::show'], null, null, null, false, false, null]],
        '/admin/showUsers' => [[['_route' => 'admin_showUsers', '_controller' => 'App\\Controller\\AdminController::showUsers'], null, null, null, false, false, null]],
        '/admin/showNotif' => [[['_route' => 'admin_showNotif', '_controller' => 'App\\Controller\\AdminController::showNotification'], null, null, null, false, false, null]],
        '/adminreadNotif' => [[['_route' => 'admin_readNotif', '_controller' => 'App\\Controller\\AdminController::readNotifications'], null, null, null, false, false, null]],
        '/admin/searchBack' => [[['_route' => 'admin_searchBack', '_controller' => 'App\\Controller\\AdminController::search'], null, null, null, false, false, null]],
        '/chef' => [[['_route' => 'chef_index', '_controller' => 'App\\Controller\\ChefController::index'], null, null, null, true, false, null]],
        '/client/profil' => [[['_route' => 'client_profil', '_controller' => 'App\\Controller\\ClientController::profile'], null, null, null, false, false, null]],
        '/admin-evenements' => [[['_route' => 'evenement', '_controller' => 'App\\Controller\\EvenementController::afficheBack'], null, null, null, false, false, null]],
        '/admin-addEvenement' => [[['_route' => 'addEvenement', '_controller' => 'App\\Controller\\EvenementController::addEvenement'], null, null, null, false, false, null]],
        '/admin-evenements-sortbynameasc' => [[['_route' => 'evenementSortByNameAsc', '_controller' => 'App\\Controller\\EvenementController::sortBackByNameAsc'], null, null, null, false, false, null]],
        '/admin-evenements-sortbynamedesc' => [[['_route' => 'evenementSortByNameDesc', '_controller' => 'App\\Controller\\EvenementController::sortBackByNameDesc'], null, null, null, false, false, null]],
        '/admin-evenements-sortbydateasc' => [[['_route' => 'evenementSortByDateAsc', '_controller' => 'App\\Controller\\EvenementController::sortBackByDateAsc'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'displayEvents', '_controller' => 'App\\Controller\\EvenementController::displayEvents'], null, null, null, false, false, null]],
        '/addEvent' => [[['_route' => 'addEvent', '_controller' => 'App\\Controller\\EvenementController::addEvent'], null, null, null, false, false, null]],
        '/deleteEvent' => [[['_route' => 'delete_reclamation', '_controller' => 'App\\Controller\\EvenementController::deleteReclamationAction'], null, null, null, false, false, null]],
        '/updateEvent' => [[['_route' => 'update_reclamation', '_controller' => 'App\\Controller\\EvenementController::modifierReclamationAction'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'event', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team', '_controller' => 'App\\Controller\\FrontController::afficherChefs'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\FrontController::search'], null, null, null, false, false, null]],
        '/showReview' => [[['_route' => 'showReview', '_controller' => 'App\\Controller\\FrontController::showReviews'], null, null, null, false, false, null]],
        '/addReview' => [[['_route' => 'addReview', '_controller' => 'App\\Controller\\FrontController::ajouterReview'], null, null, null, false, false, null]],
        '/calculer' => [[['_route' => 'calculer', '_controller' => 'App\\Controller\\FrontController::calculer'], null, null, null, false, false, null]],
        '/livreur' => [[['_route' => 'livreur_index', '_controller' => 'App\\Controller\\LivreurController::index'], null, null, null, true, false, null]],
        '/ajouterplanning' => [[['_route' => 'ajouterplanning', '_controller' => 'App\\Controller\\PlanningController::ajout'], null, null, null, false, false, null]],
        '/AffichePlanning' => [[['_route' => 'AffichePlanning', '_controller' => 'App\\Controller\\PlanningController::AffichePlanning'], null, null, null, false, false, null]],
        '/Calendrier' => [[['_route' => 'Calendrier', '_controller' => 'App\\Controller\\PlanningController::Calendrier'], null, null, null, false, false, null]],
        '/plan' => [[['_route' => 'displayPlan', '_controller' => 'App\\Controller\\PlanningController::displayEvents'], null, null, null, false, false, null]],
        '/AjouterPlanningMobile' => [[['_route' => 'app_planning_ajoutermobile', '_controller' => 'App\\Controller\\PlanningController::ajoutermobile'], null, null, null, false, false, null]],
        '/DeletePlanning' => [[['_route' => 'app_planning_supplanningmobile', '_controller' => 'App\\Controller\\PlanningController::Supplanningmobile'], null, null, null, false, false, null]],
        '/chef-planning/searchResajax' => [[['_route' => 'searchResajax', '_controller' => 'App\\Controller\\PlanningController::searchEventAjax'], null, null, null, false, false, null]],
        '/AffichePlanning-trienomAsc' => [[['_route' => 'trienom', '_controller' => 'App\\Controller\\PlanningController::trienomAsc'], null, null, null, false, false, null]],
        '/AffichePlanning-trienomDsc' => [[['_route' => 'trienomDsc', '_controller' => 'App\\Controller\\PlanningController::trienomDsc'], null, null, null, false, false, null]],
        '/AffichePlanning-trieDateAsc' => [[['_route' => 'triedateAsc', '_controller' => 'App\\Controller\\PlanningController::trieDateAsc'], null, null, null, false, false, null]],
        '/AffichePlanning-trieDateDsc' => [[['_route' => 'triedateDsc', '_controller' => 'App\\Controller\\PlanningController::trieDateDsc'], null, null, null, false, false, null]],
        '/admin-promotions' => [[['_route' => 'promotion', '_controller' => 'App\\Controller\\PromotionController::afficheBack'], null, null, null, false, false, null]],
        '/admin-addPromotion' => [[['_route' => 'addPromotion', '_controller' => 'App\\Controller\\PromotionController::addPromotion'], null, null, null, false, false, null]],
        '/admin-promotions-sortbynameasc' => [[['_route' => 'promotionSortByNameAsc', '_controller' => 'App\\Controller\\PromotionController::sortBackByNameAsc'], null, null, null, false, false, null]],
        '/admin-promotions-sortbynamedesc' => [[['_route' => 'promotionSortByNameeDesc', '_controller' => 'App\\Controller\\PromotionController::sortBackByNameDesc'], null, null, null, false, false, null]],
        '/admin-promotions-sortbyprcasc' => [[['_route' => 'promotionSortByPrceAsc', '_controller' => 'App\\Controller\\PromotionController::sortBackByPrcAsc'], null, null, null, false, false, null]],
        '/admin-promotions-sortbyprcdesc' => [[['_route' => 'promotionSortByPrceDesc', '_controller' => 'App\\Controller\\PromotionController::sortBackByPrcDesc'], null, null, null, false, false, null]],
        '/promotions' => [[['_route' => 'displayPromotions', '_controller' => 'App\\Controller\\PromotionController::displayPromotions'], null, null, null, false, false, null]],
        '/recette' => [[['_route' => 'affrecette', '_controller' => 'App\\Controller\\RecetteController::afficher'], null, null, null, false, false, null]],
        '/chef-Afficherrecette' => [[['_route' => 'AfficherRecette', '_controller' => 'App\\Controller\\RecetteController::index'], null, null, null, false, false, null]],
        '/chef-Ajoutrecette' => [[['_route' => 'ajoutrecette', '_controller' => 'App\\Controller\\RecetteController::AjouterRecette'], null, null, null, false, false, null]],
        '/chef-Afficherrecette/searchAjax' => [[['_route' => 'ajax_search', '_controller' => 'App\\Controller\\RecetteController::searchAction'], null, null, null, false, false, null]],
        '/imprimer' => [[['_route' => 'imprimer', '_controller' => 'App\\Controller\\RecetteController::imprimer'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/add_rec' => [[['_route' => 'add_rec', '_controller' => 'App\\Controller\\ReclamationController::add'], null, null, null, false, false, null]],
        '/show_rec' => [[['_route' => 'show_rec', '_controller' => 'App\\Controller\\ReclamationController::showReclamation'], null, null, null, false, false, null]],
        '/addRecJson' => [[['_route' => 'addRecJson', '_controller' => 'App\\Controller\\ReclamationController::addRecJson'], null, null, null, false, false, null]],
        '/showRecJson' => [[['_route' => 'showRecJson', '_controller' => 'App\\Controller\\ReclamationController::allReclamationJson'], null, null, null, false, false, null]],
        '/detailRecJson' => [[['_route' => 'detailRecJson', '_controller' => 'App\\Controller\\ReclamationController::detailReclamationAction'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/login_success' => [[['_route' => 'login_success', '_controller' => 'App\\Controller\\SecurityController::loginSuccess'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/oubliPass' => [[['_route' => 'oubliPass', '_controller' => 'App\\Controller\\SecurityController::forgottenPass'], null, null, null, false, false, null]],
        '/signUpJson' => [[['_route' => 'signUpJson', '_controller' => 'App\\Controller\\SecurityController::signUpAction'], null, null, null, false, false, null]],
        '/signInJson' => [[['_route' => 'signInJson', '_controller' => 'App\\Controller\\SecurityController::signInAction'], null, null, null, false, false, null]],
        '/editUserJson' => [[['_route' => 'editUserJson', '_controller' => 'App\\Controller\\SecurityController::editUser'], null, null, null, false, false, null]],
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
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
                        .'|\\-(?'
                            .'|update(?'
                                .'|Evenement\\-([^/]++)(*:369)'
                                .'|Promotion\\-([^/]++)(*:396)'
                            .')'
                            .'|delete(?'
                                .'|Evenement\\-([^/]++)(*:433)'
                                .'|Promotion\\-([^/]++)(*:460)'
                            .')'
                        .')'
                    .')'
                    .'|ctivation/([^/]++)(*:489)'
                .')'
                .'|/c(?'
                    .'|lient/(?'
                        .'|profilup/([^/]++)(*:529)'
                        .'|editPass/([^/]++)(*:554)'
                    .')'
                    .'|hef\\-(?'
                        .'|Modifierrecette\\-([^/]++)(*:596)'
                        .'|SupprimerRecette\\-([^/]++)(*:630)'
                    .')'
                .')'
                .'|/s(?'
                    .'|how_chef/([^/]++)(*:662)'
                    .'|upprimerplanning/([^/]++)(*:695)'
                .')'
                .'|/modifierplanning/([^/]++)(*:730)'
                .'|/evenement\\-([^/]++)(*:758)'
                .'|/delete(?'
                    .'|_rec([^/]++)(*:788)'
                    .'|RecJson/([^/]++)(*:812)'
                .')'
                .'|/re(?'
                    .'|c_res/([^/]++)(*:841)'
                    .'|setPassword([^/]++)(*:868)'
                .')'
                .'|/updateRecJson/([^/]++)(*:900)'
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
        369 => [[['_route' => 'updateEvenement', '_controller' => 'App\\Controller\\EvenementController::updateEvenement'], ['id'], null, null, false, true, null]],
        396 => [[['_route' => 'updatePromotion', '_controller' => 'App\\Controller\\PromotionController::updatePromotion'], ['id'], null, null, false, true, null]],
        433 => [[['_route' => 'deleteEvenement', '_controller' => 'App\\Controller\\EvenementController::deleteEvenement'], ['id'], null, null, false, true, null]],
        460 => [[['_route' => 'deletePromotion', '_controller' => 'App\\Controller\\PromotionController::deletePromotion'], ['id'], null, null, false, true, null]],
        489 => [[['_route' => 'activation', '_controller' => 'App\\Controller\\SecurityController::activation'], ['token'], null, null, false, true, null]],
        529 => [[['_route' => 'client_profilup', '_controller' => 'App\\Controller\\ClientController::modifier'], ['id'], null, null, false, true, null]],
        554 => [[['_route' => 'client_editPass', '_controller' => 'App\\Controller\\ClientController::modifierMotdepasse'], ['id'], null, null, false, true, null]],
        596 => [[['_route' => 'modifierrecette', '_controller' => 'App\\Controller\\RecetteController::Modierrecette'], ['id'], null, null, false, true, null]],
        630 => [[['_route' => 'supprimerrecette', '_controller' => 'App\\Controller\\RecetteController::supprimerrecette'], ['id'], null, null, false, true, null]],
        662 => [[['_route' => 'show_chef', '_controller' => 'App\\Controller\\FrontController::afficherDetailsChef'], ['id'], null, null, false, true, null]],
        695 => [[['_route' => 'supprimerplanning', '_controller' => 'App\\Controller\\PlanningController::supprimerplanning'], ['id'], null, null, false, true, null]],
        730 => [[['_route' => 'modifierplanning', '_controller' => 'App\\Controller\\PlanningController::modifierplanning'], ['id'], null, null, false, true, null]],
        758 => [[['_route' => 'eventDeals', '_controller' => 'App\\Controller\\PromotionController::searchC'], ['id'], null, null, false, true, null]],
        788 => [[['_route' => 'delete_rec', '_controller' => 'App\\Controller\\ReclamationController::deleteRec'], ['id'], null, null, false, true, null]],
        812 => [[['_route' => 'deleteRecJson', '_controller' => 'App\\Controller\\ReclamationController::deleteReclamationJson'], ['id'], null, null, false, true, null]],
        841 => [[['_route' => 'rec_res', '_controller' => 'App\\Controller\\ReclamationController::reponse'], ['id'], null, null, false, true, null]],
        868 => [[['_route' => 'resetPassword', '_controller' => 'App\\Controller\\SecurityController::resetPass'], ['token'], null, null, false, true, null]],
        900 => [
            [['_route' => 'updateRecJson', '_controller' => 'App\\Controller\\ReclamationController::modifierReclamationJson'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
