<?php

require_once USR_VENDOR . 'twig/bootstrap.php';

$nav = require USR_FRAGMENT . 'header_navigation.php';

echo $twig->render('login.html', [
	'title' => 'Login | ' . SITE_TITLE,
	'header_navigation' => $nav
]);