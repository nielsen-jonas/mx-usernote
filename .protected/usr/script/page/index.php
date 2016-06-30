<?php

require_once USR_VENDOR . 'doctrine/bootstrap.php';
require_once USR_VENDOR . 'twig/bootstrap.php';

/*// Get user
$user = $entityManager->find('User', 2);

// Create a note
$note = new Note();
$note->setUser($user);
$note->setNote('this is a note from the user 2');
$note->setDate(new DateTime());

// Save in the database
$entityManager->persist($note);
$entityManager->flush();

echo 'Created note with ID ' . $note->getId() . "\n";
*/
// Get all notes

$notes = $entityManager->getRepository('Note')->findAll();

echo "Listing all notes:\n";
foreach($notes as $note){
	echo sprintf("- %s\n", $note->getDate()->format('Y-m-d H:i:s'));
}
echo "Done!\n";

/*
// Now delete it
$entityManager->remove($user);
$entityManager->flush();

echo "User deleted!\n";
*/
/*
echo $twig->render('index.html', [
    'title' => SITE_TITLE
]);
*/