<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/vendor/autoload.php';

// Load entity configuration from PHP file annotations
// This is the most versatile mode, I advise using it!
// If you don't like it, Doctrine also supports YAML or XMl
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration([__DIR__ . '/src'], $isDevMode);

// Set up database connection data
$conn = [
	'driver' => 'pdo_mysql',
	'host' => DB_HOST,
	'dbname' => DB_NAME,
	'user' => DB_USER,
	'password' => DB_PASS
];

$entityManager = EntityManager::create($conn, $config);