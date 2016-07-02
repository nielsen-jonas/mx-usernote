<?php

require_once USR_VENDOR . 'twig/bootstrap.php';

$nav = require USR_FRAGMENT . 'header_navigation.php';
$nav = $nav();

$users = require USR_FRAGMENT . 'users.php';
$users = $users();

echo $twig->render('login.html', [
	'title' => 'Sign in | ' . SITE_TITLE,
	'header_navigation' => $nav,
	'users' => $users,
	'form_action' => WEBSITE_URL . '/login/'
]);