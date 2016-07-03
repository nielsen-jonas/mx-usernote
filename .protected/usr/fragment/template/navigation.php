<?php

return function () {
	return [
		[
			'page' => 'Home',
			'href' => scr_url('page/index'),
			'icon' => 'fa fa-home fa-1x'
		],
		[
			'page' => 'Sign in',
			'href' => scr_url('page/login'),
			'icon' => 'fa fa-sign-in fa-1x'
		],
		[
			'page' => 'Sign up',
			'href' => scr_url('page/register'),
			'icon' => 'fa fa-user-plus fa-1x'
		],
		[
			'page' => 'Delete account',
			'href' => scr_url('page/deregister'),
			'icon' => 'fa fa-user-times fa-1x'
		]
	];
};