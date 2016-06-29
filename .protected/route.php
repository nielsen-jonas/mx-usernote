<?php

// Requests are mapped to scripts
const ROUTE = [
    'default' => 'page/default',
    '/' => 'page/index',
    '/dynamic/{type}/{id}' => ['page/index', [
        'type' => '[a-z]+',
        'id' => '[0-9]+'
    ]],
];

// Script directory used when calling scripts (relative path from the .protected root)
const SCRIPT_DIRECTORY = 'usr/script/';