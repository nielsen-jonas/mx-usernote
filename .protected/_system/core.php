<?php

//Abstract away website location for portability
$directory = preg_replace('/\/index\.php$/', '', $_SERVER['PHP_SELF']);
$request = $_SERVER['REQUEST_URI'];
$request = preg_replace('/^' . preg_quote($directory, '/') . '/', '', $request);
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'https' : 'http' ;
define('WEBSITE_DIRECTORY', $directory);
define('WEBSITE_REQUEST', $request);
define('WEBSITE_URL', $protocol . '://' . $_SERVER['HTTP_HOST'] . WEBSITE_DIRECTORY);

// Routes
require_once DIR . 'route.php';

// Script functions
require_once __DIR__ . '/scrf/scr_is.php';
require_once __DIR__ . '/scrf/scr_url.php';

// Preliminary
require_once DIR . 'init.php';

// Handle website request
require_once __DIR__ . '/gogogadget.php';
