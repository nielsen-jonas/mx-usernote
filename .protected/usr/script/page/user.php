<?php

$user_name = $_REQUEST['user'];

session_start();
if (!isset($_SESSION['logged-in'][$user_name])) {
	exit('User <em>' . $user_name . '</em> not logged in');
}

// Template

$nav = require USR_FRAGMENT . 'template/navigation.php';
$nav = $nav('user');

$users = require USR_FRAGMENT . 'template/users.php';
$users = $users();

$resources = require USR_FRAGMENT . 'template/resources.php';
$resources = $resources();

$user = require USR_FRAGMENT . 'template/user.php';
$user = $user($user_name);

require_once USR_VENDOR . 'twig/bootstrap.php';

echo $twig->render('user.html', [
	'resources' => $resources,
	'title' => $user_name . ' | ' . SITE_TITLE,
	'navigation' => $nav,
	'users' => $users,
	'user' => $user,
]);