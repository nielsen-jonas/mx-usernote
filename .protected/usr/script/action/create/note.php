<?php

$user_name = $_REQUEST['user'];

session_start();
if (!isset($_SESSION['logged-in'][$user_name])) {
	exit('User <em>' . $user_name . '</em> not logged in');
}

require_once USR_VENDOR . 'htmlpurifier/bootstrap.php';

$clean_html = $purifier->purify($_POST['note']);

require_once USR_VENDOR . 'doctrine/bootstrap.php';

// Get user
$users = $entityManager->getRepository('User');
$user = $users->findOneBy(['name' => $user_name]);

// Create a note
$note = new Note();
$note->SetUser($user);
$note->SetNote($clean_html);
$note->setDate(new DateTime());

// Save in the database
$entityManager->persist($note);
$entityManager->flush();

// Redirect
header('Location: ' . WEBSITE_URL . '/user/' . $user->getName());