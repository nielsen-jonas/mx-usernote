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
$user = $users->findOneBy(['user_name' => $_REQUEST['user']]);

// Check if user exist
$err = 'Invalid username or password';
if (!isset($user)) {
	exit('Failed to login: ' . $err);
}

// Verify password
if (!password_verify($_POST['password'], $user->GetPass())){
	exit('Failed to login: ' . $err);
}

// Login
session_start();
$_SESSION['logged-in'][$user->getName()] = true;
header('Location: ' . WEBSITE_URL . '/user/' . $user->getName());