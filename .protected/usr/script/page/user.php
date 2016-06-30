<?php

require_once USR_VENDOR . 'twig/bootstrap.php';

$user = $_REQUEST['user'];
$nav = require USR_FRAGMENT . 'header_navigation.php';

echo $twig->render('user.html', [
	'title' => $user . ' @ ' . SITE_TITLE,
	'header_navigation' => $nav,
	'user' => $user
]);