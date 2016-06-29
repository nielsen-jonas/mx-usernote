<?php

// Requests are mapped to scripts
const REGEX_USER = '[a-z0-9_-]+';
const ROUTE = [
    'default' => 'page/default',
    '/' => 'page/index',
    '/login' => 'page/login',
    '/register' => 'page/register',
    '/user/{user}' => ['page/user', [
        'user' => REGEX_USER
    ]],
    '/logout' => 'action/logout',
    '/login/{user}' => ['action/login', [
        'user' => REGEX_USER
    ]],
    '/register/{user}' => ['action/register', [
        'user' => REGEX_USER
    ]]
];

// Script directory used when calling scripts (relative path from the .protected root)
const SCRIPT_DIRECTORY = 'usr/script/';