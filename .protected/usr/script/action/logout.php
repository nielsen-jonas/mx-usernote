<?php

session_start();

if (isset($_REQUEST['user'])) {
	unset($_SESSION['logged-in'][$_REQUEST['user']]);
} else {
	unset($_SESSION['logged-in']);
}

header('Location: ' . WEBSITE_URL);