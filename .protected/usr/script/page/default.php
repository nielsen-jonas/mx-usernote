<?php

require_once USR_VENDOR . 'twig/bootstrap.php';

$nav = require USR_FRAGMENT . 'template/navigation.php';
$nav = $nav();

$users = require USR_FRAGMENT . 'template/users.php';
$users = $users();

$resources = require USR_FRAGMENT . 'template/resources.php';
$resources = $resources();

echo $twig->render('default.html', [
	'resources' => $resources,
	'title' => 'Not Found | ' . SITE_TITLE,
	'navigation' => $nav,
	'users' => $users,
	'request' => WEBSITE_REQUEST,
]);