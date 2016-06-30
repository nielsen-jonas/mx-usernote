<?php

require_once USR_VENDOR . 'twig/bootstrap.php';

$nav = require USR_FRAGMENT . 'header_navigation.php';

echo $twig->render('default.html', [
	'title' => 'Not Found | ' . SITE_TITLE,
	'header_navigation' => $nav,
	'request' => WEBSITE_REQUEST,
	'home' => ['href' => WEBSITE_URL]
]);