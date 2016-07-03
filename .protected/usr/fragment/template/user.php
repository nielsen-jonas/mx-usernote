<?php

return function ($user) {
	return [
		'name' => $user,
		'route' => [
			'home' => WEBSITE_URL . '/user/' . $user,
			'note' => WEBSITE_URL . '/user/' . $user . '/note',
			'note_save' => WEBSITE_URL . '/user/' . $user . '/note/save',
			'note_delete' => WEBSITE_URL . '/user/' . $user . '/note/delete',
			'logout' => WEBSITE_URL . '/logout/' . $user
		]
	];
};