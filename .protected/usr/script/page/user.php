<?php

$user_name = $_REQUEST['user'];

session_start();
if (!isset($_SESSION['logged-in'][$user_name])) {
	exit('User <em>' . $user_name . '</em> not logged in');
}

/*
require_once USR_VENDOR . 'doctrine/bootstrap.php';

// Get user
$users = $entityManager->getRepository('User');
$user = $users->findOneBy(['name' => $user_name]);

// Get user notes
$notes = [];
$dnotes = $entityManager->getRepository('Note')->findByUser($user);
foreach ($dnotes as $note){
	$notes[] = [
		'href' => [
			'delete' => WEBSITE_URL . '/user/' . $user_name . '/note/delete/' . $note->getId()
		],
		'date' => $note->getDate()->format('Y-m-d H:i:s'),
		'note' => $note->getNote()
	];
}

$notes = array_reverse($notes);
*/
// Template

$nav = require USR_FRAGMENT . 'template/navigation.php';
$nav = $nav();

$users = require USR_FRAGMENT . 'template/users.php';
$users = $users();

$resources = require USR_FRAGMENT . 'template/resources.php';
$resources = $resources();

$user = require USR_FRAGMENT . 'template/user.php';
$user = $user($user_name);

require_once USR_VENDOR . 'twig/bootstrap.php';

echo $twig->render('user.html', [
	'resources' => $resources,
	'title' => $user_name . ' | ' . SITE_TITLE,
	'navigation' => $nav,
	'users' => $users,
	'user' => $user,
]);