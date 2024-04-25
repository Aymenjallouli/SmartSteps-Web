<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin_account_edit' => [[], ['_controller' => 'App\\Controller\\AdminAccountController::edit'], [], [['text', '/admin/profiledition']], [], [], []],
    'admin_account_index' => [[], ['_controller' => 'App\\Controller\\AdminAccountController::index'], [], [['text', '/admin/profil']], [], [], []],
    'admin_dashboard_index' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::index'], [], [['text', '/admin/tableau-de-bord']], [], [], []],
    'admin_parameter_index' => [[], ['_controller' => 'App\\Controller\\AdminParameterController::edit'], [], [['text', '/admin/parametre']], [], [], []],
    'admin_user_index' => [[], ['_controller' => 'App\\Controller\\AdminUserController::index'], [], [['text', '/admin/utilisateur/']], [], [], []],
    'admin_user_add' => [[], ['_controller' => 'App\\Controller\\AdminUserController::add'], [], [['text', '/admin/utilisateur/add']], [], [], []],
    'admin_user_show' => [['id'], ['_controller' => 'App\\Controller\\AdminUserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/utilisateur']], [], [], []],
    'admin_user_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminUserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/utilisateur']], [], [], []],
    'admin_user_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminUserController::delete'], [], [['text', '/suppression'], ['variable', '', '[^/]++', 'id', true], ['text', '/admin/utilisateur']], [], [], []],
    'app_back' => [[], ['_controller' => 'App\\Controller\\BackController::index'], [], [['text', '/back']], [], [], []],
    'app_front' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/front']], [], [], []],
    'home_index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController1::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController1::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'forgot_password' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/mot-de-passe']], [], [], []],
    'check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/mot-de-passe/check-email']], [], [], []],
    'reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::resetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/mot-de-passe/nouveau-mot-de-passe']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'login_success' => [[], ['_controller' => 'App\\Controller\\SecurityController::onLoginSuccess'], [], [['text', '/connexion/succes']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController1::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController1::logout'], [], [['text', '/logout']], [], [], []],
    'qr_code_generate' => [['builder', 'data'], ['_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['data' => '[\\w\\W]+'], [['variable', '/', '[\\w\\W]+', 'data', true], ['variable', '/', '[^/]++', 'builder', true], ['text', '/qr-code']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
