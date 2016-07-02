<?php

$user = $_REQUEST['user'];

session_start();
if (!isset($_SESSION['logged-in'][$user])) {
	exit('User <em>' . $user . '</em> not logged in');
}

$nav = require USR_FRAGMENT . 'header_navigation.php';
$nav = $nav();

$users = require USR_FRAGMENT . 'users.php';
$users = $users();

require_once USR_VENDOR . 'twig/bootstrap.php';

echo $twig->render('note.html', [
	'title' => $user . ' @ ' . SITE_TITLE,
	'header_navigation' => $nav,
	'users' => $users,
	'user' => [
		'name' => $user,
		'href' => WEBSITE_URL . '/user/' . $user
	],
	'logout' => ['href' => WEBSITE_URL . '/logout/' . $user] 
]);