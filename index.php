<?php
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');
$system_path = 'system';
$application_folder = 'application';
require_once BASEPATH.'core/CodeIgniter.php';
?>
