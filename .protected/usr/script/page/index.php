<?php

require_once USR_VENDOR . 'twig/bootstrap.php';

echo $twig->render('index.html', [
    'test' => 'success'
]);