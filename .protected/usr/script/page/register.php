<?php

require_once USR_VENDOR . 'twig/bootstrap.php';

$nav = require USR_FRAGMENT . 'template/navigation.php';
$nav = $nav('register');

$users = require USR_FRAGMENT . 'template/users.php';
$users = $users();

$resources = require USR_FRAGMENT . 'template/resources.php';
$resources = $resources();

$route_pre = require USR_FRAGMENT . 'template/route_pre.php';
$route_pre = $route_pre();

echo $twig->render('register.html', [
	'resources' => $resources,
	'title' => 'Sign up | ' . SITE_TITLE,
	'navigation' => $nav,
	'users' => $users,
	'route_pre' => $route_pre
]);