<?php

require_once USR_VENDOR . 'twig/bootstrap.php';

$nav = require USR_FRAGMENT . 'template/navigation.php';
$nav = $nav('home');

$users = require USR_FRAGMENT . 'template/users.php';
$users = $users();

$resources = require USR_FRAGMENT . 'template/resources.php';
$resources = $resources();

echo $twig->render('index.html', [
	'resources' => $resources,
    'title' => SITE_TITLE,
    'navigation' => $nav,
    'users' => $users,
]);