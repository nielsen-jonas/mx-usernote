<?php

if (!isset($_REQUEST['user'])) {
	exit('Failed to register user: Username not provided!');
}
if (!isset($_POST['password'])) {
	exit('Failed to register user: Password not provided!');
}

require_once USR_VENDOR . 'doctrine/bootstrap.php';

// Check if user exists
$users = $entityManager->getRepository('User');
$user = $users->findOneBy(['user_name' => $_REQUEST['user']]);
if (isset($user)) {
	exit('Failed to register user: Username already taken!');
}

// Create user
$user = new User();
$user->setName($_REQUEST['user']);
$user->setPass(password_hash($_POST['password'], PASSWORD_BCRYPT, ['const' => 12]));

// Save user
$entityManager->persist($user);
$entityManager->flush();

// Login
session_start();
$_SESSION['logged-in'][$user->getName()] = true;
header('Location: ' . WEBSITE_URL . '/user/' . $user->getName());