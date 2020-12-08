<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/Student' => [[['_route' => 'Student_index', '_controller' => 'App\\Controller\\StudentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/Student/new' => [[['_route' => 'Student_new', '_controller' => 'App\\Controller\\StudentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Teacher' => [[['_route' => 'Teacher_index', '_controller' => 'App\\Controller\\TeacherController::index'], null, ['GET' => 0], null, true, false, null]],
        '/Teacher/new' => [[['_route' => 'Teacher_new', '_controller' => 'App\\Controller\\TeacherController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/Student/(?'
                    .'|([^/]++)(?'
                        .'|(*:65)'
                        .'|/edit(*:77)'
                        .'|(*:84)'
                    .')'
                    .'|find/([^/]++)(*:105)'
                .')'
                .'|/Teacher/(?'
                    .'|find/([^/]++)(*:139)'
                    .'|([^/]++)(?'
                        .'|(*:158)'
                        .'|/edit(*:171)'
                        .'|(*:179)'
                    .')'
                .')'
                .'|/logger/([^/]++)(*:205)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'Student_show', '_controller' => 'App\\Controller\\StudentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        77 => [[['_route' => 'Student_edit', '_controller' => 'App\\Controller\\StudentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        84 => [[['_route' => 'Student_delete', '_controller' => 'App\\Controller\\StudentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        105 => [[['_route' => 'find_Student_by_name', '_controller' => 'App\\Controller\\StudentController::findAllByName'], ['name'], null, null, false, true, null]],
        139 => [[['_route' => 'find_Teacher_by_name', '_controller' => 'App\\Controller\\TeacherController::findAllByName'], ['name'], null, null, false, true, null]],
        158 => [[['_route' => 'Teacher_show', '_controller' => 'App\\Controller\\TeacherController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        171 => [[['_route' => 'Teacher_edit', '_controller' => 'App\\Controller\\TeacherController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        179 => [[['_route' => 'Teacher_delete', '_controller' => 'App\\Controller\\TeacherController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        205 => [
            [['_route' => 'api_logger_log', '_controller' => 'App\\Controller\\LogController::logger'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
