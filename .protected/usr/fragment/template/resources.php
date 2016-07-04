<?php

return function () {
	return [
		'css' => [
			'style' => SRC_CSS . 'style.css',
			'index' => SRC_CSS . 'index.css',
			'user' => SRC_CSS .'user.css',
			'bootstrap' => SRC_CSS .'bootstrap.min.css',
		],
		'js' => [
			'bootstrap' => SRC_JS . 'bootstrap.min.js'
		]
	];
};