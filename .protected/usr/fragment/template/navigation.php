<?php

return function () {
	$nav = [
		'home' => [
			'name' => 'Home',
			'route' => scr_url('page/index'),
			'icon' => 'fa fa-home fa-1x'
		],
		'users' => [],
		'nav' => [
			[
				'name' => 'Sign in',
				'route' => scr_url('page/login'),
				'icon' => 'fa fa-sign-in fa-1x'
			],
			[
				'name' => 'Sign up',
				'route' => scr_url('page/register'),
				'icon' => 'fa fa-user-plus fa-1x'
			],
			[
				'name' => 'Delete account',
				'route' => scr_url('page/deregister'),
				'icon' => 'fa fa-user-times fa-1x'
			]
		]
	];

	if (session_status() == PHP_SESSION_NONE){
		session_start();
	}

	if (isset($_SESSION['logged-in'])){
		foreach($_SESSION['logged-in'] as $user => $true) {
			$nav['users'][] = [
				'name' => $user,
				'route' => [
					'main' => WEBSITE_URL . '/user/' . $user,
					'logout' => WEBSITE_URL . '/logout/' . $user
				]
			];
		}
	}

	return $nav;
};