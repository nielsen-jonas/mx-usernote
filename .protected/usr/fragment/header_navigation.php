<?php

$nav = [
	[
		'page' => 'Home',
		'href' => scr_url('page/index')
	],
	[
		'page' => 'Login',
		'href' => scr_url('page/login')
	],
	[
		'page' => 'Register',
		'href' => scr_url('page/register')
	]
];

if (session_status() == PHP_SESSION_NONE){
	session_start();
}

if (isset($_SESSION['logged-in'])){
	$nav[] = [
		'page' => 'Log out',
		'href' => scr_url('action/logout')
	];
}

return $nav;