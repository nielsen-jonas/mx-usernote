<?php

return function () {
	$users = [];

	if (session_status() == PHP_SESSION_NONE){
		session_start();
	}

	if (isset($_SESSION['logged-in'])){
		foreach($_SESSION['logged-in'] as $user => $true) {
			$users[] = [
				'name' => $user,
				'href' => WEBSITE_URL . '/user/' . $user
			];
		}
	}

	return $users;
};