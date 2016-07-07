<?php

return function ($current = null) {
	$nav = [
		'home' => [
			'name' => 'Home',
			'route' => scr_url('page/index'),
			'icon' => 'fa fa-home fa-1x',
			'current' => false
		],
		'user' => ['current' => false],
		'users' => [],
		'nav' => [
			'login' => [
				'name' => 'Sign in',
				'route' => scr_url('page/login'),
				'icon' => 'fa fa-sign-in fa-1x',
				'current' => false
			],
			'register' => [
				'name' => 'Sign up',
				'route' => scr_url('page/register'),
				'icon' => 'fa fa-user-plus fa-1x',
				'current' => false
			],
			'deregister' => [
				'name' => 'Delete account',
				'route' => scr_url('page/deregister'),
				'icon' => 'fa fa-user-times fa-1x',
				'current' => false
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

	if ($current) {
		switch ($current) {
			case 'home':
				$nav['home']['current'] = true;
				break;
			case 'user':
				$nav['user']['current'] = true;
				break;
			case 'login':
				$nav['nav']['login']['current'] = true;
				break;
			case 'register':
				$nav['nav']['register']['current'] = true;
				break;
			case 'deregister':
				$nav['nav']['deregister']['current'] = true;
				break;
		}
	}

	return $nav;
};