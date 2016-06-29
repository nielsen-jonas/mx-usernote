<?php

function format_dynamic_route($route, $regex)
{
    if (!is_array($regex)) {
        return null;
    }
    $string = $route;
    $string = preg_quote($string, '/');
    foreach ($regex as $key => $regex) {
        $key = '{' . $key . '}';
        $key = preg_quote($key, '/');
        $string = str_replace($key, $regex, $string);
    }
    return '/\A' . $string . '$/';
}
