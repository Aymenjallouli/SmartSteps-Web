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
        '/admin/evaluation' => [[['_route' => 'admin_evaluation_index', '_controller' => 'App\\Controller\\AdminEvaluationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/evaluation/new' => [[['_route' => 'admin_evaluation_new', '_controller' => 'App\\Controller\\AdminEvaluationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/parametre' => [[['_route' => 'admin_parameter_index', '_controller' => 'App\\Controller\\AdminParameterController::edit'], null, null, null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/utilisateur/add' => [[['_route' => 'admin_user_add', '_controller' => 'App\\Controller\\AdminUserController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/admin/cour' => [[['_route' => 'admin_cour_index', '_controller' => 'App\\Controller\\CourAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/cour/new' => [[['_route' => 'admin_cour_new', '_controller' => 'App\\Controller\\CourAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cour' => [[['_route' => 'app_cour_index', '_controller' => 'App\\Controller\\CourController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cour/new' => [[['_route' => 'app_cour_new', '_controller' => 'App\\Controller\\CourController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendar' => [[['_route' => 'app_evaluation_caldendar', '_controller' => 'App\\Controller\\EvaluationCaldendarController::index'], null, null, null, true, false, null]],
        '/evaluation' => [[['_route' => 'app_evaluation_index', '_controller' => 'App\\Controller\\EvaluationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'app_question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/workshop' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/aboutme' => [[['_route' => 'app_aboutme', '_controller' => 'App\\Controller\\QuestionController::about1'], null, ['GET' => 0], null, false, false, null]],
        '/list' => [[['_route' => 'app_question_index', '_controller' => 'App\\Controller\\QuestionController::list'], null, ['GET' => 0], null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController1::verifyUserEmail'], null, null, null, false, false, null]],
        '/mot-de-passe/check-email' => [[['_route' => 'check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/connexion/succes' => [[['_route' => 'login_success', '_controller' => 'App\\Controller\\SecurityController::onLoginSuccess'], null, null, null, false, false, null]],
        '/teacher/evaluation' => [[['_route' => 'teacher_evaluation_index', '_controller' => 'App\\Controller\\TeacherEvaluationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/teacher/evaluation/new' => [[['_route' => 'teacher_evaluation_new', '_controller' => 'App\\Controller\\TeacherEvaluationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/unite' => [[['_route' => 'admin_unite_index', '_controller' => 'App\\Controller\\UniteAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/unite/new' => [[['_route' => 'admin_unite_new', '_controller' => 'App\\Controller\\UniteAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/unite/new' => [[['_route' => 'app_unite_new', '_controller' => 'App\\Controller\\UniteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|evaluation(?'
                        .'|/([^/]++)(*:39)'
                        .'|([^/]++)/edit(*:59)'
                    .')'
                    .'|utilisateur(?'
                        .'|/([^/]++)(?'
                            .'|(*:93)'
                            .'|/edit(*:105)'
                        .')'
                        .'|([^/]++)/suppression(*:134)'
                    .')'
                    .'|cour/(?'
                        .'|([^/]++)(?'
                            .'|(*:162)'
                            .'|/(?'
                                .'|edit(*:178)'
                                .'|new_unite(*:195)'
                                .'|units(*:208)'
                            .')'
                            .'|(*:217)'
                        .')'
                        .'|search(*:232)'
                    .')'
                .')'
                .'|/cour/([^/]++)(?'
                    .'|(*:259)'
                    .'|/(?'
                        .'|edit(*:275)'
                        .'|new_unite(*:292)'
                        .'|units(*:305)'
                    .')'
                    .'|(*:314)'
                .')'
                .'|/evaluation/([^/]++)(*:343)'
                .'|/([^/]++)(?'
                    .'|/(?'
                        .'|newq(*:371)'
                        .'|q(*:380)'
                    .')'
                    .'|(*:389)'
                .')'
                .'|/inscription(*:410)'
                .'|/register(*:427)'
                .'|/mot\\-de\\-passe(?'
                    .'|(*:453)'
                    .'|/nouveau\\-mot\\-de\\-passe(?:/([^/]++))?(*:499)'
                .')'
                .'|/connexion(*:518)'
                .'|/deconnexion(*:538)'
                .'|/log(?'
                    .'|in(*:555)'
                    .'|out(*:566)'
                .')'
                .'|/teacher/evaluation(?'
                    .'|/([^/]++)(*:606)'
                    .'|([^/]++)/edit(*:627)'
                    .'|/([^/]++)(*:644)'
                .')'
                .'|/admin/unite/([^/]++)(?'
                    .'|(*:677)'
                    .'|/edit(*:690)'
                    .'|(*:698)'
                .')'
                .'|/unite(?'
                    .'|(*:716)'
                    .'|/([^/]++)(?'
                        .'|(*:736)'
                        .'|/(?'
                            .'|edit(*:752)'
                            .'|pdf(*:763)'
                        .')'
                        .'|(*:772)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:810)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:849)'
                    .'|wdt/([^/]++)(*:869)'
                    .'|profiler(?'
                        .'|(*:888)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:926)'
                                .'|router(*:940)'
                                .'|exception(?'
                                    .'|(*:960)'
                                    .'|\\.css(*:973)'
                                .')'
                            .')'
                            .'|(*:983)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'admin_evaluation_show', '_controller' => 'App\\Controller\\AdminEvaluationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        59 => [[['_route' => 'admin_evaluation_edit', '_controller' => 'App\\Controller\\AdminEvaluationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        93 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        105 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        134 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        162 => [[['_route' => 'admin_cour_show', '_controller' => 'App\\Controller\\CourAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        178 => [[['_route' => 'admin_cour_edit', '_controller' => 'App\\Controller\\CourAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        195 => [[['_route' => 'admin_cour_new_unite', '_controller' => 'App\\Controller\\CourAdminController::newUnite'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'admin_cour_units', '_controller' => 'App\\Controller\\CourAdminController::showUnits'], ['id'], ['GET' => 0], null, false, false, null]],
        217 => [[['_route' => 'admin_cour_delete', '_controller' => 'App\\Controller\\CourAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        232 => [[['_route' => 'search', '_controller' => 'App\\Controller\\CourAdminController::search'], [], null, null, false, false, null]],
        259 => [[['_route' => 'app_cour_show', '_controller' => 'App\\Controller\\CourController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        275 => [[['_route' => 'app_cour_edit', '_controller' => 'App\\Controller\\CourController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        292 => [[['_route' => 'app_cour_new_unite', '_controller' => 'App\\Controller\\CourController::newUnite'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        305 => [[['_route' => 'app_cour_units', '_controller' => 'App\\Controller\\CourController::showUnits'], ['id'], ['GET' => 0], null, false, false, null]],
        314 => [[['_route' => 'app_cour_delete', '_controller' => 'App\\Controller\\CourController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        343 => [[['_route' => 'app_evaluation_pass', '_controller' => 'App\\Controller\\EvaluationController::pass'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        371 => [[['_route' => 'app_question_new', '_controller' => 'App\\Controller\\QuestionController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        380 => [[['_route' => 'app_evaluation_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        389 => [[['_route' => 'app_evaluation_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        410 => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::register'], [], null, null, false, false, null]],
        427 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController1::register'], [], null, null, false, false, null]],
        453 => [[['_route' => 'forgot_password', '_controller' => 'App\\Controller\\ResetPasswordController::request'], [], null, null, false, false, null]],
        499 => [[['_route' => 'reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::resetPassword'], ['token'], null, null, false, true, null]],
        518 => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null]],
        538 => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null]],
        555 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController1::login'], [], null, null, false, false, null]],
        566 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController1::logout'], [], null, null, false, false, null]],
        606 => [[['_route' => 'teacher_evaluation_show', '_controller' => 'App\\Controller\\TeacherEvaluationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        627 => [[['_route' => 'teacher_evaluation_edit', '_controller' => 'App\\Controller\\TeacherEvaluationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        644 => [[['_route' => 'teacher_evaluation_delete', '_controller' => 'App\\Controller\\TeacherEvaluationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        677 => [[['_route' => 'admin_unite_show', '_controller' => 'App\\Controller\\UniteAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        690 => [[['_route' => 'admin_unite_edit', '_controller' => 'App\\Controller\\UniteAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        698 => [[['_route' => 'admin_unite_delete', '_controller' => 'App\\Controller\\UniteAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        716 => [[['_route' => 'app_unite_index', '_controller' => 'App\\Controller\\UniteController::index'], [], ['GET' => 0], null, true, false, null]],
        736 => [[['_route' => 'app_unite_show', '_controller' => 'App\\Controller\\UniteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        752 => [[['_route' => 'app_unite_edit', '_controller' => 'App\\Controller\\UniteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        763 => [[['_route' => 'app_unite_pdf', '_controller' => 'App\\Controller\\UniteController::generatePdf'], ['id'], ['GET' => 0], null, false, false, null]],
        772 => [[['_route' => 'app_unite_delete', '_controller' => 'App\\Controller\\UniteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        810 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        849 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        869 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        888 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        926 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        940 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        960 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        973 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        983 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
