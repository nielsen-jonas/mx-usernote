<?php

require_once USR_VENDOR . 'twig/bootstrap.php';

$nav = require USR_FRAGMENT . 'header_navigation.php';
$nav = $nav();

$users = require USR_FRAGMENT . 'users.php';
$users = $users();

echo $twig->render('default.html', [
	'title' => 'Not Found | ' . SITE_TITLE,
	'header_navigation' => $nav,
	'users' => $users,
	'request' => WEBSITE_REQUEST,
	'home' => ['href' => WEBSITE_URL]
]);