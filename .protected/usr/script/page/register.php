<?php

require_once USR_VENDOR . 'twig/bootstrap.php';

$nav = require USR_FRAGMENT . 'header_navigation.php';

echo $twig->render('register.html', [
	'title' => 'Register | ' . SITE_TITLE,
	'header_navigation' => $nav,
	'form_action' => WEBSITE_URL . '/register/'
]);