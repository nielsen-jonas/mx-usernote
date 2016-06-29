<?php

/*
 * Make sure a .htaccess file with these settings exists in this directory
 *
 * RewriteEngine On
 * RewriteCond %{REQUEST_URI} !(src/)
 * RewriteRule ^ index.php [QSA,L]
 *
 */

// Initialization script
define('DIR', file_exists('../.protected') ? '../.protected/' : '.protected/');
require_once DIR . '_system/core.php';