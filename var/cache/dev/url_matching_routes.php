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
        '/admin' => [[['_route' => 'admin_default', '_controller' => 'App\\Controller\\Admin\\DefaultController::index'], null, null, null, false, false, null]],
        '/admin/url' => [[['_route' => 'url_list', '_controller' => 'App\\Controller\\Admin\\UrlController::url'], null, null, null, false, false, null]],
        '/ajax' => [[['_route' => 'ajax', '_controller' => 'App\\Controller\\AjaxController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/admin/contact' => [[['_route' => 'contact_list', '_controller' => 'App\\Controller\\ContactController::adminContact'], null, null, null, false, false, null]],
        '/admin/contact/send' => [[['_route' => 'contact_send', '_controller' => 'App\\Controller\\ContactController::send'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\SecurityController::profile'], null, null, null, false, false, null]],
        '/profile/settings' => [[['_route' => 'profile_settings', '_controller' => 'App\\Controller\\SecurityController::profileChange'], null, null, null, false, false, null]],
        '/profile/url/statistics' => [[['_route' => 'user_stat', '_controller' => 'App\\Controller\\SecurityController::profileurl'], null, null, null, false, false, null]],
        '/admin/settings' => [[['_route' => 'settings', '_controller' => 'App\\Controller\\SettingsController::index'], null, null, null, false, false, null]],
        '/url/create' => [[['_route' => 'url_create', '_controller' => 'App\\Controller\\UrlController::create'], null, null, null, false, false, null]],
        '/admin/userlist' => [[['_route' => 'userlist', '_controller' => 'App\\Controller\\UserlistController::index'], null, null, null, false, false, null]],
        '/admin/userlist/add' => [[['_route' => 'user_add', '_controller' => 'App\\Controller\\UserlistController::add'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|url/(?'
                        .'|delete/([^/]++)(*:201)'
                        .'|edit/([^/]++)(*:222)'
                        .'|operation/([^/]++)(*:248)'
                        .'|statistics/([^/]++)(*:275)'
                    .')'
                    .'|contact/(?'
                        .'|delete/([^/]++)(*:310)'
                        .'|show/([^/]++)(*:331)'
                    .')'
                .')'
                .'|/profile/url/statistics/([^/]++)(*:373)'
                .'|/([^/]++)(*:390)'
                .'|/admin/userlist/(?'
                    .'|change/([^/]++)(*:432)'
                    .'|delete/([^/]++)(*:455)'
                    .'|edit/([^/]++)(*:476)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [[['_route' => 'url_delete', '_controller' => 'App\\Controller\\Admin\\UrlController::delete'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'url_edit', '_controller' => 'App\\Controller\\Admin\\UrlController::edit'], ['id'], null, null, false, true, null]],
        248 => [[['_route' => 'url_operation', '_controller' => 'App\\Controller\\Admin\\UrlController::operation'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'url_statistics', '_controller' => 'App\\Controller\\Admin\\UrlController::statistics'], ['id'], null, null, false, true, null]],
        310 => [[['_route' => 'contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], null, null, false, true, null]],
        331 => [[['_route' => 'contact_show', '_controller' => 'App\\Controller\\ContactController::contactShow'], ['id'], null, null, false, true, null]],
        373 => [[['_route' => 'url_user_statistics', '_controller' => 'App\\Controller\\SecurityController::statistics'], ['id'], null, null, false, true, null]],
        390 => [[['_route' => 'redirector', '_controller' => 'App\\Controller\\UrlController::redirector'], ['urlHash'], null, null, false, true, null]],
        432 => [[['_route' => 'user_change', '_controller' => 'App\\Controller\\UserlistController::change'], ['id'], null, null, false, true, null]],
        455 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserlistController::delete'], ['id'], null, null, false, true, null]],
        476 => [
            [['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserlistController::edit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
