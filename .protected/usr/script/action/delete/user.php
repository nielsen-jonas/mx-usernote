<?php

if (!isset($_REQUEST['user'])) {
	exit('Failed to deregister user: Username not provided!');
}
if (!isset($_POST['password'])) {
	exit('Failed to deregister user: Password not provided!');
}

require_once USR_VENDOR . 'doctrine/bootstrap.php';

// Check if user exists
$users = $entityManager->getRepository('User');
$user = $users->findOneBy(['name' => $_REQUEST['user']]);
$err = 'Invalid username or password';
if (!isset($user)) {
	exit('Failed to deregister user: ' . $err);
}

// Verify password
if (!password_verify($_POST['password'], $user->getPass())) {
	exit('Failed to deregister user: ' . $err);
}

// Logout if logged in
session_start();
unset($_SESSION['logged-in'][$user->getName()]);

// Deregister
$entityManager->remove($user);
$entityManager->flush();

header('Location: ' . WEBSITE_URL);