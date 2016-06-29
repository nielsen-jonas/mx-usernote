<?php

/**
 *
 * Get the url mapped to a script (only static requests)
 *
 * @param string $script The script of which a url is mapped
 * @return string
 *
 */
function scr_url($script)
{
    static $script_route = [];
    if ($script_route == []) {
        foreach (ROUTE as $route => $script) {
            if (!is_array($script)) {
                $script_route[$script] = $route;
            }
        }
    };
    @$route = $script_route[$script];
    return WEBSITE_URL . $route;
}