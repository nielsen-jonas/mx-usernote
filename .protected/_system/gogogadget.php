<?php

$request_match = false;
$_REQUEST = [];

foreach (ROUTE as $request => $script) {
    if (!is_array($script)) {
        // Static route
        if (WEBSITE_REQUEST == $request) {
            $request_match = true;
            require_once DIR . SCRIPT_DIRECTORY . $script . '.php';
        }
    } else {
        // Dynamic route
        require_once __DIR__ . '/sysf/format_dynamic_route.php';
        if (preg_match(format_dynamic_route($request, $script[1]), WEBSITE_REQUEST)) {
            $request_match = true;
            define('DYNAMIC_ROUTE', $request);
            require_once __DIR__ . '/sysf/request_vars.php';
            $_REQUEST = request_vars();
            require_once DIR . SCRIPT_DIRECTORY . $script[0] . '.php';
        }
    }
}

if (!$request_match) {
    //Default
    $rt = ROUTE;
    if (isset($rt['default'])) {
        require_once DIR . SCRIPT_DIRECTORY . $rt['default'] . '.php';
    }
}
