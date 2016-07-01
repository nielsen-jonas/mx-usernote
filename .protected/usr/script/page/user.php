<?php

require_once USR_VENDOR . 'twig/bootstrap.php';

$user = $_REQUEST['user'];

session_start();
if (!isset($_SESSION['logged-in'][$user])){
	exit('User <em>' . $user . '</em> not logged in');
}

$nav = require USR_FRAGMENT . 'header_navigation.php';

echo $twig->render('user.html', [
	'title' => $user . ' @ ' . SITE_TITLE,
	'header_navigation' => $nav,
	'user' => $user
]);