<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/profiledition' => [[['_route' => 'admin_account_edit', '_controller' => 'App\\Controller\\AdminAccountController::edit'], null, null, null, false, false, null]],
        '/admin/profilprofileditionfront' => [[['_route' => 'admin_account_index', '_controller' => 'App\\Controller\\AdminAccountController::index'], null, null, null, false, false, null]],
        '/admin/profilprofilefront' => [[['_route' => 'admin_account_index1', '_controller' => 'App\\Controller\\AdminAccountController::index1'], null, null, null, false, false, null]],
        '/admin/profileditionfront' => [[['_route' => 'admin_account_editfront', '_controller' => 'App\\Controller\\AdminAccountController::editf'], null, null, null, false, false, null]],
        '/admin/tableau-de-bord' => [[['_route' => 'admin_dashboard_index', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/evaluation' => [[['_route' => 'admin_evaluation_index', '_controller' => 'App\\Controller\\AdminEvaluationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/evaluation/new' => [[['_route' => 'admin_evaluation_new', '_controller' => 'App\\Controller\\AdminEvaluationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/parametre' => [[['_route' => 'admin_parameter_index', '_controller' => 'App\\Controller\\AdminParameterController::edit'], null, null, null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/utilisateur/add' => [[['_route' => 'admin_user_add', '_controller' => 'App\\Controller\\AdminUserController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/back' => [[['_route' => 'app_commentaire_indexback', '_controller' => 'App\\Controller\\CommentaireController::indexback'], null, ['GET' => 0], null, false, false, null]],
        '/commentaire/new' => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commentaire/aaaa/pdf' => [[['_route' => 'app_demande_pdf', '_controller' => 'App\\Controller\\CommentaireController::generatePdf'], null, null, null, false, false, null]],
        '/admin/cour' => [[['_route' => 'admin_cour_index', '_controller' => 'App\\Controller\\CourAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/cour/new' => [[['_route' => 'admin_cour_new', '_controller' => 'App\\Controller\\CourAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cour' => [[['_route' => 'app_cour_index', '_controller' => 'App\\Controller\\CourController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cour/new' => [[['_route' => 'app_cour_new', '_controller' => 'App\\Controller\\CourController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendar' => [[['_route' => 'app_evaluation_caldendar', '_controller' => 'App\\Controller\\EvaluationCaldendarController::index'], null, null, null, true, false, null]],
        '/evaluation' => [[['_route' => 'app_evaluation_index', '_controller' => 'App\\Controller\\EvaluationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/forum' => [[['_route' => 'app_forum_index', '_controller' => 'App\\Controller\\ForumController::index'], null, ['GET' => 0], null, true, false, null]],
        '/forum/new' => [[['_route' => 'app_forum_new', '_controller' => 'App\\Controller\\ForumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forum/aaaa/statttt' => [[['_route' => 'app_forum_stat', '_controller' => 'App\\Controller\\ForumController::top3MostCommentedForums'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/workshop' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/aboutme' => [[['_route' => 'app_aboutme', '_controller' => 'App\\Controller\\QuestionController::about1'], null, ['GET' => 0], null, false, false, null]],
        '/list' => [[['_route' => 'app_question_index', '_controller' => 'App\\Controller\\QuestionController::list'], null, ['GET' => 0], null, false, false, null]],
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
        '/teacher/evaluation' => [[['_route' => 'teacher_evaluation_index', '_controller' => 'App\\Controller\\TeacherEvaluationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/teacher/evaluation/new' => [[['_route' => 'teacher_evaluation_new', '_controller' => 'App\\Controller\\TeacherEvaluationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                    .'|evaluation(?'
                        .'|/([^/]++)(*:39)'
                        .'|([^/]++)/edit(*:59)'
                        .'|/([^/]++)(*:75)'
                    .')'
                    .'|u(?'
                        .'|tilisateur(?'
                            .'|/([^/]++)(?'
                                .'|(*:112)'
                                .'|/edit(*:125)'
                            .')'
                            .'|([^/]++)/suppression(*:154)'
                        .')'
                        .'|nite/([^/]++)(?'
                            .'|(*:179)'
                            .'|/edit(*:192)'
                            .'|(*:200)'
                        .')'
                    .')'
                    .'|cour/(?'
                        .'|([^/]++)(?'
                            .'|(*:229)'
                            .'|/(?'
                                .'|edit(*:245)'
                                .'|new_unite(*:262)'
                                .'|units(*:275)'
                            .')'
                            .'|(*:284)'
                        .')'
                        .'|search(*:299)'
                    .')'
                .')'
                .'|/co(?'
                    .'|mmentaire/([^/]++)(?'
                        .'|(*:336)'
                        .'|/edit(*:349)'
                        .'|(*:357)'
                    .')'
                    .'|ur/([^/]++)(?'
                        .'|(*:380)'
                        .'|/(?'
                            .'|edit(*:396)'
                            .'|new_unite(*:413)'
                            .'|units(*:426)'
                        .')'
                        .'|(*:435)'
                    .')'
                .')'
                .'|/evaluation/([^/]++)(*:465)'
                .'|/forum/(?'
                    .'|([^/]++)(?'
                        .'|(*:494)'
                        .'|/edit(*:507)'
                    .')'
                    .'|delete/([^/]++)(*:531)'
                .')'
                .'|/mot\\-de\\-passe/nouveau\\-mot\\-de\\-passe(?:/([^/]++))?(*:593)'
                .'|/teacher/evaluation(?'
                    .'|/([^/]++)(*:632)'
                    .'|([^/]++)/edit(*:653)'
                    .'|/([^/]++)(*:670)'
                .')'
                .'|/unite/([^/]++)(?'
                    .'|(*:697)'
                    .'|/(?'
                        .'|edit(*:713)'
                        .'|pdf(*:724)'
                    .')'
                    .'|(*:733)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:770)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:809)'
                    .'|wdt/([^/]++)(*:829)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:875)'
                            .'|router(*:889)'
                            .'|exception(?'
                                .'|(*:909)'
                                .'|\\.css(*:922)'
                            .')'
                        .')'
                        .'|(*:932)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'admin_evaluation_show', '_controller' => 'App\\Controller\\AdminEvaluationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        59 => [[['_route' => 'admin_evaluation_edit', '_controller' => 'App\\Controller\\AdminEvaluationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        75 => [[['_route' => 'admin_evaluation_delete', '_controller' => 'App\\Controller\\AdminEvaluationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        112 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        125 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        154 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        179 => [[['_route' => 'admin_unite_show', '_controller' => 'App\\Controller\\UniteAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        192 => [[['_route' => 'admin_unite_edit', '_controller' => 'App\\Controller\\UniteAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        200 => [[['_route' => 'admin_unite_delete', '_controller' => 'App\\Controller\\UniteAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        229 => [[['_route' => 'admin_cour_show', '_controller' => 'App\\Controller\\CourAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        245 => [[['_route' => 'admin_cour_edit', '_controller' => 'App\\Controller\\CourAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        262 => [[['_route' => 'admin_cour_new_unite', '_controller' => 'App\\Controller\\CourAdminController::newUnite'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        275 => [[['_route' => 'admin_cour_units', '_controller' => 'App\\Controller\\CourAdminController::showUnits'], ['id'], ['GET' => 0], null, false, false, null]],
        284 => [[['_route' => 'admin_cour_delete', '_controller' => 'App\\Controller\\CourAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        299 => [[['_route' => 'search', '_controller' => 'App\\Controller\\CourAdminController::search'], [], null, null, false, false, null]],
        336 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        380 => [[['_route' => 'app_cour_show', '_controller' => 'App\\Controller\\CourController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        396 => [[['_route' => 'app_cour_edit', '_controller' => 'App\\Controller\\CourController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        413 => [[['_route' => 'app_cour_new_unite', '_controller' => 'App\\Controller\\CourController::newUnite'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        426 => [[['_route' => 'app_cour_units', '_controller' => 'App\\Controller\\CourController::showUnits'], ['id'], ['GET' => 0], null, false, false, null]],
        435 => [[['_route' => 'app_cour_delete', '_controller' => 'App\\Controller\\CourController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        465 => [[['_route' => 'app_evaluation_pass', '_controller' => 'App\\Controller\\EvaluationController::pass'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        494 => [[['_route' => 'app_forum_show', '_controller' => 'App\\Controller\\ForumController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        507 => [[['_route' => 'app_forum_edit', '_controller' => 'App\\Controller\\ForumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        531 => [[['_route' => 'app_forum_delete', '_controller' => 'App\\Controller\\ForumController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        593 => [[['_route' => 'reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::resetPassword'], ['token'], null, null, false, true, null]],
        632 => [[['_route' => 'teacher_evaluation_show', '_controller' => 'App\\Controller\\TeacherEvaluationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        653 => [[['_route' => 'teacher_evaluation_edit', '_controller' => 'App\\Controller\\TeacherEvaluationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        670 => [[['_route' => 'teacher_evaluation_delete', '_controller' => 'App\\Controller\\TeacherEvaluationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        697 => [[['_route' => 'app_unite_show', '_controller' => 'App\\Controller\\UniteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        713 => [[['_route' => 'app_unite_edit', '_controller' => 'App\\Controller\\UniteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        724 => [[['_route' => 'app_unite_pdf', '_controller' => 'App\\Controller\\UniteController::generatePdf'], ['id'], ['GET' => 0], null, false, false, null]],
        733 => [[['_route' => 'app_unite_delete', '_controller' => 'App\\Controller\\UniteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        770 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        809 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        829 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        875 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        889 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        909 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        922 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        932 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
