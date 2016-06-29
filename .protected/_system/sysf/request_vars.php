<?php

function request_vars()
{
    $req = explode('/', WEBSITE_REQUEST);
    $dyn = explode('/', DYNAMIC_ROUTE);
    $vars = [];
    foreach ($dyn as $key => $value) {
        if (@$value[0] == '{') {
            $value = substr(substr($value, 1), 0, -1);
            $vars[$value] = $req[$key];
        }
    }
    return $vars;
}
