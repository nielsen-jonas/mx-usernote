<?php

$user_name = $_REQUEST['user'];

session_start();
if (!isset($_SESSION['logged-in'][$user_name])) {
	exit('User <em>' . $user . '</em> not logged in');
}

require_once USR_VENDOR . 'doctrine/bootstrap.php';

// Get user
$users = $entityManager->getRepository('User');
$user = $users->findOneBy(['name' => $user_name]);

// Get user notes
$notes = [];
$dnotes = $entityManager->getRepository('Note')->findByUser($user);
foreach ($dnotes as $note){
	$notes[] = [
		'delete' => ['href' => WEBSITE_URL . '/user/' . $user_name . '/note/delete/' . $note->getId()],
		'date' => $note->getDate()->format('Y-m-d H:i:s'),
		'note' => $note->getNote()
	];
}

$notes = array_reverse($notes);

// Template

$nav = require USR_FRAGMENT . 'header_navigation.php';
$nav = $nav();

$users = require USR_FRAGMENT . 'users.php';
$users = $users();

require_once USR_VENDOR . 'twig/bootstrap.php';

echo $twig->render('user.html', [
	'title' => $user_name . ' @ ' . SITE_TITLE,
	'header_navigation' => $nav,
	'users' => $users,
	'user' => ['name' => $user_name],
	'note' => ['href' => WEBSITE_URL . '/user/' . $user_name . '/note'],
	'logout' => ['href' => WEBSITE_URL . '/logout/' . $user_name],
	'notes' => $notes
]);