<?php

$user_name = $_REQUEST['user'];
$note_id = $_REQUEST['id'];

// Check if logged in
session_start();
if (!isset($_SESSION['logged-in'][$user_name])) {
	exit('User <em>' . $user_name . '</em> not logged in!');
}

require_once USR_VENDOR . 'doctrine/bootstrap.php';

// Get user
$users = $entityManager->getRepository('User');
$user = $users->findOneBy(['name' => $user_name]);

// Get note
$note = $entityManager->find('Note', $note_id);

// Verify owner
if ($note->getUser() !== $user){
	exit('Note does not exist!');
}

// Delete note
$entityManager->remove($note);
$entityManager->flush();

// Redirect
header('Location: ' . WEBSITE_URL . '/user/' . $user_name);