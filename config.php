<?php
// Report all errors
error_reporting(E_ALL);

// Database Credentials
define('DATABASE_HOST', ''); 
define('DATABASE_USER', ''); 
define('DATABASE_PASSWORD', ''); 
define('DATABASE_DB', ''); 

// Document Root
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/HTBCwebsite/'); 

// Document Root
define('BASE', 'http://' . $_SERVER['SERVER_NAME'] . '/HTBCwebsite/');

// Template
define('TEMPLATE_NAME', 'basic');
define('ADMIN_TEMPLATE_NAME', 'basic');
define('TEMPLATE_BASE', BASE . 'templates/' . TEMPLATE_NAME . '/');
define('TEMPLATE_ROOT', ROOT . 'templates/' . TEMPLATE_NAME . '/');

function my_autoloader($class) {
    include(ROOT . 'classes/class.' . $class . '.php');
}

spl_autoload_register('my_autoloader');

require(ROOT . 'functions.php');

$database = new MySQL(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_DB);


session_start();

if (isset($_SESSION['user'])) {
    $user = clone $_SESSION['user'];
    $user->database = $database;
}