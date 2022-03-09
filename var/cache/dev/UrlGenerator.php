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
    'admin_showNotif' => [[], ['_controller' => 'App\\Controller\\AdminController::showNotification'], [], [['text', '/admin/showNotif']], [], []],
    'admin_readNotif' => [[], ['_controller' => 'App\\Controller\\AdminController::readNotifications'], [], [['text', '/adminreadNotif']], [], []],
    'admin_searchBack' => [[], ['_controller' => 'App\\Controller\\AdminController::search'], [], [['text', '/admin/searchBack']], [], []],
    'admin_deleteReview' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteReview'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admindeleteReview']], [], []],
    'chef_index' => [[], ['_controller' => 'App\\Controller\\ChefController::index'], [], [['text', '/chef/']], [], []],
    'client_profil' => [[], ['_controller' => 'App\\Controller\\ClientController::profile'], [], [['text', '/client/profil']], [], []],
    'client_profilup' => [['id'], ['_controller' => 'App\\Controller\\ClientController::modifier'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/client/profilup']], [], []],
    'client_editPass' => [['id'], ['_controller' => 'App\\Controller\\ClientController::modifierMotdepasse'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/client/editPass']], [], []],
    'evenement' => [[], ['_controller' => 'App\\Controller\\EvenementController::afficheBack'], [], [['text', '/admin-evenements']], [], []],
    'searchEventResajax' => [[], ['_controller' => 'App\\Controller\\EvenementController::searchEventAjax'], [], [['text', '/admin-evenements/searchResajax']], [], []],
    'addEvenement' => [[], ['_controller' => 'App\\Controller\\EvenementController::addEvenement'], [], [['text', '/admin-addEvenement']], [], []],
    'updateEvenement' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::updateEvenement'], [], [['variable', '-', '[^/]++', 'id'], ['text', '/admin-updateEvenement']], [], []],
    'deleteEvenement' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::deleteEvenement'], [], [['variable', '-', '[^/]++', 'id'], ['text', '/admin-deleteEvenement']], [], []],
    'evenementSortByNameAsc' => [[], ['_controller' => 'App\\Controller\\EvenementController::sortBackByNameAsc'], [], [['text', '/admin-evenements-sortbynameasc']], [], []],
    'evenementSortByNameDesc' => [[], ['_controller' => 'App\\Controller\\EvenementController::sortBackByNameDesc'], [], [['text', '/admin-evenements-sortbynamedesc']], [], []],
    'evenementSortByDateAsc' => [[], ['_controller' => 'App\\Controller\\EvenementController::sortBackByDateAsc'], [], [['text', '/admin-evenements-sortbydateasc']], [], []],
    'displayEvents' => [[], ['_controller' => 'App\\Controller\\EvenementController::displayEvents'], [], [['text', '/events']], [], []],
    'addEvent' => [[], ['_controller' => 'App\\Controller\\EvenementController::addEvent'], [], [['text', '/addEvent']], [], []],
    'delete_reclamation' => [[], ['_controller' => 'App\\Controller\\EvenementController::deleteReclamationAction'], [], [['text', '/deleteEvent']], [], []],
    'update_reclamation' => [[], ['_controller' => 'App\\Controller\\EvenementController::modifierReclamationAction'], [], [['text', '/updateEvent']], [], []],
    'event' => [[], ['_controller' => 'App\\Controller\\EventController::index'], [], [['text', '/event']], [], []],
    'front' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/']], [], []],
    'team' => [[], ['_controller' => 'App\\Controller\\FrontController::afficherChefs'], [], [['text', '/team']], [], []],
    'show_chef' => [['id'], ['_controller' => 'App\\Controller\\FrontController::afficherDetailsChef'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/show_chef']], [], []],
    'search' => [[], ['_controller' => 'App\\Controller\\FrontController::search'], [], [['text', '/search']], [], []],
    'showReview' => [[], ['_controller' => 'App\\Controller\\FrontController::showReviews'], [], [['text', '/showReview']], [], []],
    'addReview' => [[], ['_controller' => 'App\\Controller\\FrontController::ajouterReview'], [], [['text', '/addReview']], [], []],
    'calculer' => [[], ['_controller' => 'App\\Controller\\FrontController::calculer'], [], [['text', '/calculer']], [], []],
    'livreur_index' => [[], ['_controller' => 'App\\Controller\\LivreurController::index'], [], [['text', '/livreur/']], [], []],
    'ajouterplanning' => [[], ['_controller' => 'App\\Controller\\PlanningController::ajout'], [], [['text', '/ajouterplanning']], [], []],
    'modifierplanning' => [['id'], ['_controller' => 'App\\Controller\\PlanningController::modifierplanning'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifierplanning']], [], []],
    'AffichePlanning' => [[], ['_controller' => 'App\\Controller\\PlanningController::AffichePlanning'], [], [['text', '/AffichePlanning']], [], []],
    'Calendrier' => [[], ['_controller' => 'App\\Controller\\PlanningController::Calendrier'], [], [['text', '/Calendrier']], [], []],
    'supprimerplanning' => [['id'], ['_controller' => 'App\\Controller\\PlanningController::supprimerplanning'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerplanning']], [], []],
    'displayPlan' => [[], ['_controller' => 'App\\Controller\\PlanningController::displayEvents'], [], [['text', '/plan']], [], []],
    'app_planning_ajoutermobile' => [[], ['_controller' => 'App\\Controller\\PlanningController::ajoutermobile'], [], [['text', '/AjouterPlanningMobile']], [], []],
    'app_planning_supplanningmobile' => [[], ['_controller' => 'App\\Controller\\PlanningController::Supplanningmobile'], [], [['text', '/DeletePlanning']], [], []],
    'searchPlanResajax' => [[], ['_controller' => 'App\\Controller\\PlanningController::searchEventAjax'], [], [['text', '/chef-planning/searchResajax']], [], []],
    'trienom' => [[], ['_controller' => 'App\\Controller\\PlanningController::trienomAsc'], [], [['text', '/AffichePlanning-trienomAsc']], [], []],
    'trienomDsc' => [[], ['_controller' => 'App\\Controller\\PlanningController::trienomDsc'], [], [['text', '/AffichePlanning-trienomDsc']], [], []],
    'triedateAsc' => [[], ['_controller' => 'App\\Controller\\PlanningController::trieDateAsc'], [], [['text', '/AffichePlanning-trieDateAsc']], [], []],
    'triedateDsc' => [[], ['_controller' => 'App\\Controller\\PlanningController::trieDateDsc'], [], [['text', '/AffichePlanning-trieDateDsc']], [], []],
    'promotion' => [[], ['_controller' => 'App\\Controller\\PromotionController::afficheBack'], [], [['text', '/admin-promotions']], [], []],
    'addPromotion' => [[], ['_controller' => 'App\\Controller\\PromotionController::addPromotion'], [], [['text', '/admin-addPromotion']], [], []],
    'updatePromotion' => [['id'], ['_controller' => 'App\\Controller\\PromotionController::updatePromotion'], [], [['variable', '-', '[^/]++', 'id'], ['text', '/admin-updatePromotion']], [], []],
    'deletePromotion' => [['id'], ['_controller' => 'App\\Controller\\PromotionController::deletePromotion'], [], [['variable', '-', '[^/]++', 'id'], ['text', '/admin-deletePromotion']], [], []],
    'promotionSortByNameAsc' => [[], ['_controller' => 'App\\Controller\\PromotionController::sortBackByNameAsc'], [], [['text', '/admin-promotions-sortbynameasc']], [], []],
    'promotionSortByNameeDesc' => [[], ['_controller' => 'App\\Controller\\PromotionController::sortBackByNameDesc'], [], [['text', '/admin-promotions-sortbynamedesc']], [], []],
    'promotionSortByPrceAsc' => [[], ['_controller' => 'App\\Controller\\PromotionController::sortBackByPrcAsc'], [], [['text', '/admin-promotions-sortbyprcasc']], [], []],
    'promotionSortByPrceDesc' => [[], ['_controller' => 'App\\Controller\\PromotionController::sortBackByPrcDesc'], [], [['text', '/admin-promotions-sortbyprcdesc']], [], []],
    'eventDeals' => [['id'], ['_controller' => 'App\\Controller\\PromotionController::searchC'], [], [['variable', '-', '[^/]++', 'id'], ['text', '/evenement']], [], []],
    'displayPromotions' => [[], ['_controller' => 'App\\Controller\\PromotionController::displayPromotions'], [], [['text', '/promotions']], [], []],
    'affrecette' => [[], ['_controller' => 'App\\Controller\\RecetteController::afficher'], [], [['text', '/recette']], [], []],
    'AfficherRecette' => [[], ['_controller' => 'App\\Controller\\RecetteController::index'], [], [['text', '/chef-Afficherrecette']], [], []],
    'ajoutrecette' => [[], ['_controller' => 'App\\Controller\\RecetteController::AjouterRecette'], [], [['text', '/chef-Ajoutrecette']], [], []],
    'modifierrecette' => [['id'], ['_controller' => 'App\\Controller\\RecetteController::Modierrecette'], [], [['variable', '-', '[^/]++', 'id'], ['text', '/chef-Modifierrecette']], [], []],
    'supprimerrecette' => [['id'], ['_controller' => 'App\\Controller\\RecetteController::supprimerrecette'], [], [['variable', '-', '[^/]++', 'id'], ['text', '/chef-SupprimerRecette']], [], []],
    'ajax_search' => [[], ['_controller' => 'App\\Controller\\RecetteController::searchAction'], [], [['text', '/chef-Afficherrecette/searchAjax']], [], []],
    'imprimer' => [[], ['_controller' => 'App\\Controller\\RecetteController::imprimer'], [], [['text', '/imprimer']], [], []],
    'reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation']], [], []],
    'add_rec' => [[], ['_controller' => 'App\\Controller\\ReclamationController::add'], [], [['text', '/add_rec']], [], []],
    'show_rec' => [[], ['_controller' => 'App\\Controller\\ReclamationController::showReclamation'], [], [['text', '/show_rec']], [], []],
    'delete_rec' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::deleteRec'], [], [['variable', '', '[^/]++', 'id'], ['text', '/delete_rec']], [], []],
    'rec_res' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::reponse'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/rec_res']], [], []],
    'addRecJson' => [[], ['_controller' => 'App\\Controller\\ReclamationController::addRecJson'], [], [['text', '/addRecJson']], [], []],
    'deleteRecJson' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::deleteReclamationJson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/deleteRecJson']], [], []],
    'showRecJson' => [[], ['_controller' => 'App\\Controller\\ReclamationController::allReclamationJson'], [], [['text', '/showRecJson']], [], []],
    'updateRecJson' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::modifierReclamationJson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/updateRecJson']], [], []],
    'detailRecJson' => [[], ['_controller' => 'App\\Controller\\ReclamationController::detailReclamationAction'], [], [['text', '/detailRecJson']], [], []],
    'reservation' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservationn']], [], []],
    'reservationback' => [[], ['_controller' => 'App\\Controller\\ReservationController::afficherreservation'], [], [['text', '/admin-reservation']], [], []],
    'ajouter' => [[], ['_controller' => 'App\\Controller\\ReservationController::ajouterreservation'], [], [['text', '/reservation']], [], []],
    'ddd' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::supprimerreservation'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/deletereservation']], [], []],
    'dddd' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::modifierreservation'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifierreservation']], [], []],
    'searchResajax' => [[], ['_controller' => 'App\\Controller\\ReservationController::searchOffreajax'], [], [['text', '/admin-reservation/searchResajax']], [], []],
    'rr' => [[], ['_controller' => 'App\\Controller\\ReservationController::getreservation'], [], [['text', '/rr']], [], []],
    'registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/registration']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'login_success' => [[], ['_controller' => 'App\\Controller\\SecurityController::loginSuccess'], [], [['text', '/login_success']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'activation' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::activation'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/activation']], [], []],
    'oubliPass' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPass'], [], [['text', '/oubliPass']], [], []],
    'resetPassword' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::resetPass'], [], [['variable', '', '[^/]++', 'token'], ['text', '/resetPassword']], [], []],
    'signUpJson' => [[], ['_controller' => 'App\\Controller\\SecurityController::signUpAction'], [], [['text', '/signUpJson']], [], []],
    'signInJson' => [[], ['_controller' => 'App\\Controller\\SecurityController::signInAction'], [], [['text', '/signInJson']], [], []],
    'editUserJson' => [[], ['_controller' => 'App\\Controller\\SecurityController::editUser'], [], [['text', '/editUserJson']], [], []],
    'table' => [[], ['_controller' => 'App\\Controller\\TableController::index'], [], [['text', '/table']], [], []],
    'affichertable' => [[], ['_controller' => 'App\\Controller\\TableController::affichertable'], [], [['text', '/admin-table']], [], []],
    'd' => [['id'], ['_controller' => 'App\\Controller\\TableController::supprimertable'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/delete']], [], []],
    'app_table_ajoutertable' => [[], ['_controller' => 'App\\Controller\\TableController::ajoutertable'], [], [['text', '/admin-ajoutertable']], [], []],
    'dd' => [['id'], ['_controller' => 'App\\Controller\\TableController::modifiertable'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifier']], [], []],
    'ajoutertableback' => [[], ['_controller' => 'App\\Controller\\TableController::ajoutertableback'], [], [['text', '/admin-ajoutertable']], [], []],
    'listpdf' => [[], ['_controller' => 'App\\Controller\\TableController::listpdf'], [], [['text', '/listpdf']], [], []],
    'trie-table-asc' => [[], ['_controller' => 'App\\Controller\\TableController::sortBackByNameAsc'], [], [['text', '/trie-table-asc']], [], []],
    'trie-table-desc' => [[], ['_controller' => 'App\\Controller\\TableController::sortBackByNameDesc'], [], [['text', '/trie-table-desc']], [], []],
    'tt' => [[], ['_controller' => 'App\\Controller\\TableController::gettable'], [], [['text', '/tt']], [], []],
    'create' => [[], ['_controller' => 'App\\Controller\\TableController::addtable'], [], [['text', '/add']], [], []],
    'app_table_supprimertablee' => [[], ['_controller' => 'App\\Controller\\TableController::Supprimertablee'], [], [['text', '/deletetable']], [], []],
    'updatetable' => [[], ['_controller' => 'App\\Controller\\TableController::modifiertablee'], [], [['text', '/update']], [], []],
    'fc_load_events' => [[], ['_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], [], [['text', '/fc-load-events']], [], []],
    'qr_code_generate' => [['builder', 'data'], ['_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['data' => '[\\w\\W]+'], [['variable', '/', '[\\w\\W]+', 'data'], ['variable', '/', '[^/]++', 'builder'], ['text', '/qr-code']], [], []],
    'gregwar_captcha.generate_captcha' => [['key'], ['_controller' => 'Gregwar\\CaptchaBundle\\Controller\\CaptchaController::generateCaptchaAction'], [], [['variable', '/', '[^/]++', 'key'], ['text', '/_gcb/generate-captcha']], [], []],
];
