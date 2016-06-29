<?php

require_once __DIR__ . '/bootstrap.php';

// We need to provide entityManager to the command line interface
// The CLI interface allows us to submit interact with the database
// for example to update or create the schema