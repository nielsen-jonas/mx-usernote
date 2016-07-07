<?php

header('Content-Type: application/json');

$user_name = $_REQUEST['user'];

// Check if logged in
session_start();
if (!isset($_SESSION['logged-in'][$user_name])){
	exit('User not logged in!');
}

require_once USR_VENDOR . 'doctrine/bootstrap.php';
$err = 'Failed to get notes';

// Check if user exists
$users = $entityManager->getRepository('User');
$user = $users->findOneBy(['name' => $user_name]);
if (!isset($user)) {
	exit($err);
}

// Get notes
$all_notes = $entityManager->getRepository('Note');
$usernotes = $all_notes->findByUser($user);

$response = [];
foreach($usernotes as $usernote) {
	array_unshift( $response, [
	'date' => $usernote->getDate()->format('Y-m-d H:i'),
	'note' => $usernote->getNote(),
	'delete' => WEBSITE_URL . '/user/' . $user_name . '/note/delete/' . $usernote->getId()
	]);
}

print_r(json_encode($response));