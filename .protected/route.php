<?php

// Requests are mapped to scripts
const REGEX_USER = '[a-zA-Z0-9_-]+';
const ROUTE = [
    'default' => 'page/default',
    '/' => 'page/index',
    '/login' => 'page/login',
    '/register' => 'page/register',
    '/deregister' => 'page/deregister',
    '/user/{user}' => ['page/user', [
        'user' => REGEX_USER
    ]],
    '/user/{user}/note' => ['page/note', [
        'user' => REGEX_USER
    ]],
    '/user/{user}/note/save' => ['action/create/note', [
        'user' => REGEX_USER
    ]],
    '/logout' => 'action/logout',
    '/logout/{user}' => ['action/logout', [
        'user' => REGEX_USER
    ]],
    '/login/{user}' => ['action/login', [
        'user' => REGEX_USER
    ]],
    '/register/{user}' => ['action/create/user', [
        'user' => REGEX_USER
    ]],
    '/deregister/{user}' => ['action/delete/user', [
        'user' => REGEX_USER
    ]]
];

// Script directory used when calling scripts (relative path from the .protected root)
const SCRIPT_DIRECTORY = 'usr/script/';