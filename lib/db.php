<?php
define('DB_HOST','localhost');
define('DB_NAME','user_database');
define('DB_USER','root');
define('DB_PASS','');

$app_base = '/project/';

error_reporting(E_ALL);
$db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
?>