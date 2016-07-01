<?php

if (!isset($_REQUEST['user'])) {
	exit('Failed to login: Username not provided!');
}
if (!isset($_POST['password'])) {
	exit('Failed to login: Password not provided');
}

require_once USR_VENDOR . 'doctrine/bootstrap.php';

// Get user
$users = $entityManager->getRepository('User');
$user = $users->findOneBy(['name' => $_REQUEST['user']]);

// Check if user exist
if (!isset($user)) {
	exit('Failed to login: User doesn\'t exist');
}

// Verify password
if (!password_verify($_POST['password'], $user->GetPass())){
	exit('Failed to login: Invalid password');
}

// Login
session_start();
$_SESSION['logged-in'][$user->getName()] = true;
header('Location: ' . WEBSITE_URL . '/user/' . $user->getName());