<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'Student_index' => [[], ['_controller' => 'App\\Controller\\StudentController::index'], [], [['text', '/Student/']], [], []],
    'Student_new' => [[], ['_controller' => 'App\\Controller\\StudentController::new'], [], [['text', '/Student/new']], [], []],
    'Student_show' => [['id'], ['_controller' => 'App\\Controller\\StudentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Student']], [], []],
    'Student_edit' => [['id'], ['_controller' => 'App\\Controller\\StudentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/Student']], [], []],
    'Student_delete' => [['id'], ['_controller' => 'App\\Controller\\StudentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Student']], [], []],
    'find_Student_by_name' => [['name'], ['_controller' => 'App\\Controller\\StudentController::findAllByName'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/Student/find']], [], []],
    'Teacher_index' => [[], ['_controller' => 'App\\Controller\\TeacherController::index'], [], [['text', '/Teacher/']], [], []],
    'Teacher_new' => [[], ['_controller' => 'App\\Controller\\TeacherController::new'], [], [['text', '/Teacher/new']], [], []],
    'find_Teacher_by_name' => [['name'], ['_controller' => 'App\\Controller\\TeacherController::findAllByName'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/Teacher/find']], [], []],
    'Teacher_show' => [['id'], ['_controller' => 'App\\Controller\\TeacherController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Teacher']], [], []],
    'Teacher_edit' => [['id'], ['_controller' => 'App\\Controller\\TeacherController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/Teacher']], [], []],
    'Teacher_delete' => [['id'], ['_controller' => 'App\\Controller\\TeacherController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Teacher']], [], []],
    'api_logger_log' => [['name'], ['_controller' => 'App\\Controller\\LogController::logger'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/logger']], [], []],
];
