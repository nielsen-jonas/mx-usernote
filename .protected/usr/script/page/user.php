<?php

require_once USR_VENDOR . 'twig/bootstrap.php';

$user = $_REQUEST['user'];

session_start();
if (!isset($_SESSION['logged-in'][$user])){
	exit('User <em>' . $user . '</em> not logged in');
}

$nav = require USR_FRAGMENT . 'header_navigation.php';
$nav = $nav();

$users = require USR_FRAGMENT . 'users.php';
$users = $users();

echo $twig->render('user.html', [
	'title' => $user . ' @ ' . SITE_TITLE,
	'header_navigation' => $nav,
	'users' => $users,
	'user' => $user,
	'logout' => ['href' => WEBSITE_URL . '/logout/' . $user] 
]);