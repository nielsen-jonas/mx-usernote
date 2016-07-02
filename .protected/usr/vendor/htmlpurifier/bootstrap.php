<?php

require_once __DIR__ . '/vendor/autoload.php';

$config = HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);