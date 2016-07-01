<?php

session_start();
unset($_SESSION['logged-in']);
header('Location: ' . WEBSITE_URL);