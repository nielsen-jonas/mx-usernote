<?php

/**
 *
 * Test if script is the requested script
 *
 * @param string $script The script to test
 * @return boolean
 *
 */
function scr_is($script)
{
    return ROUTE[WEBSITE_REQUEST] == $script;
}