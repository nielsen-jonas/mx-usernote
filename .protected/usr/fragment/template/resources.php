<?php

return function () {
	return [
		'css' => [
			'style' => SRC_CSS . 'style.css',
			'index' => SRC_CSS . 'index.css',
			'user' => SRC_CSS .'user.css',
			'bootstrap' => SRC_CSS .'bootstrap.min.css',
			'default' => SRC_CSS . 'default.css'
		],
		'js' => [
			'bootstrap' => SRC_JS . 'bootstrap.min.js',
			'modernizr' => SRC_JS . 'modernizr-custom.js',
			'user_ajax' => SRC_JS . 'user-ajax.js'
		]
	];
};