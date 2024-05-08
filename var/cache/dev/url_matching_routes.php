<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/profiledition' => [[['_route' => 'admin_account_edit', '_controller' => 'App\\Controller\\AdminAccountController::edit'], null, null, null, false, false, null]],
        '/admin/profil' => [[['_route' => 'admin_account_index', '_controller' => 'App\\Controller\\AdminAccountController::index'], null, null, null, false, false, null]],
        '/admin/profilprofilefront' => [[['_route' => 'admin_account_index1', '_controller' => 'App\\Controller\\AdminAccountController::index1'], null, null, null, false, false, null]],
        '/admin/profileditionfront' => [[['_route' => 'admin_account_editfront', '_controller' => 'App\\Controller\\AdminAccountController::editf'], null, null, null, false, false, null]],
        '/admin/tableau-de-bord' => [[['_route' => 'admin_dashboard_index', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/parametre' => [[['_route' => 'admin_parameter_index', '_controller' => 'App\\Controller\\AdminParameterController::edit'], null, null, null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/utilisateur/add' => [[['_route' => 'admin_user_add', '_controller' => 'App\\Controller\\AdminUserController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/admin/cour' => [[['_route' => 'admin_cour_index', '_controller' => 'App\\Controller\\CourAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/cour/new' => [[['_route' => 'admin_cour_new', '_controller' => 'App\\Controller\\CourAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cour' => [[['_route' => 'app_cour_index', '_controller' => 'App\\Controller\\CourController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cour/new' => [[['_route' => 'app_cour_new', '_controller' => 'App\\Controller\\CourController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/en' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController1::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController1::verifyUserEmail'], null, null, null, false, false, null]],
        '/mot-de-passe' => [[['_route' => 'forgot_password', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/mot-de-passe/check-email' => [[['_route' => 'check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/connexion/succes' => [[['_route' => 'login_success', '_controller' => 'App\\Controller\\SecurityController::onLoginSuccess'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController1::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController1::logout'], null, null, null, false, false, null]],
        '/admin/unite' => [[['_route' => 'admin_unite_index', '_controller' => 'App\\Controller\\UniteAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/unite/new' => [[['_route' => 'admin_unite_new', '_controller' => 'App\\Controller\\UniteAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/unite' => [[['_route' => 'app_unite_index', '_controller' => 'App\\Controller\\UniteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/unite/new' => [[['_route' => 'app_unite_new', '_controller' => 'App\\Controller\\UniteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|u(?'
                        .'|tilisateur(?'
                            .'|/([^/]++)(?'
                                .'|(*:46)'
                                .'|/edit(*:58)'
                            .')'
                            .'|([^/]++)/suppression(*:86)'
                        .')'
                        .'|nite/([^/]++)(?'
                            .'|(*:110)'
                            .'|/edit(*:123)'
                            .'|(*:131)'
                        .')'
                    .')'
                    .'|cour/(?'
                        .'|([^/]++)(?'
                            .'|(*:160)'
                            .'|/(?'
                                .'|edit(*:176)'
                                .'|new_unite(*:193)'
                                .'|units(*:206)'
                            .')'
                            .'|(*:215)'
                        .')'
                        .'|search(*:230)'
                    .')'
                .')'
                .'|/cour/([^/]++)(?'
                    .'|(*:257)'
                    .'|/(?'
                        .'|edit(*:273)'
                        .'|new_unite(*:290)'
                        .'|units(*:303)'
                    .')'
                    .'|(*:312)'
                .')'
                .'|/mot\\-de\\-passe/nouveau\\-mot\\-de\\-passe(?:/([^/]++))?(*:374)'
                .'|/unite/([^/]++)(?'
                    .'|(*:400)'
                    .'|/(?'
                        .'|edit(*:416)'
                        .'|pdf(*:427)'
                    .')'
                    .'|(*:436)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:473)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:512)'
                    .'|wdt/([^/]++)(*:532)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:578)'
                            .'|router(*:592)'
                            .'|exception(?'
                                .'|(*:612)'
                                .'|\\.css(*:625)'
                            .')'
                        .')'
                        .'|(*:635)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        58 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        86 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        110 => [[['_route' => 'admin_unite_show', '_controller' => 'App\\Controller\\UniteAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        123 => [[['_route' => 'admin_unite_edit', '_controller' => 'App\\Controller\\UniteAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        131 => [[['_route' => 'admin_unite_delete', '_controller' => 'App\\Controller\\UniteAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        160 => [[['_route' => 'admin_cour_show', '_controller' => 'App\\Controller\\CourAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        176 => [[['_route' => 'admin_cour_edit', '_controller' => 'App\\Controller\\CourAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        193 => [[['_route' => 'admin_cour_new_unite', '_controller' => 'App\\Controller\\CourAdminController::newUnite'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        206 => [[['_route' => 'admin_cour_units', '_controller' => 'App\\Controller\\CourAdminController::showUnits'], ['id'], ['GET' => 0], null, false, false, null]],
        215 => [[['_route' => 'admin_cour_delete', '_controller' => 'App\\Controller\\CourAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        230 => [[['_route' => 'search', '_controller' => 'App\\Controller\\CourAdminController::search'], [], null, null, false, false, null]],
        257 => [[['_route' => 'app_cour_show', '_controller' => 'App\\Controller\\CourController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        273 => [[['_route' => 'app_cour_edit', '_controller' => 'App\\Controller\\CourController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        290 => [[['_route' => 'app_cour_new_unite', '_controller' => 'App\\Controller\\CourController::newUnite'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        303 => [[['_route' => 'app_cour_units', '_controller' => 'App\\Controller\\CourController::showUnits'], ['id'], ['GET' => 0], null, false, false, null]],
        312 => [[['_route' => 'app_cour_delete', '_controller' => 'App\\Controller\\CourController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        374 => [[['_route' => 'reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::resetPassword'], ['token'], null, null, false, true, null]],
        400 => [[['_route' => 'app_unite_show', '_controller' => 'App\\Controller\\UniteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        416 => [[['_route' => 'app_unite_edit', '_controller' => 'App\\Controller\\UniteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        427 => [[['_route' => 'app_unite_pdf', '_controller' => 'App\\Controller\\UniteController::generatePdf'], ['id'], ['GET' => 0], null, false, false, null]],
        436 => [[['_route' => 'app_unite_delete', '_controller' => 'App\\Controller\\UniteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        473 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        512 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        532 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        578 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        592 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        612 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        625 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        635 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
