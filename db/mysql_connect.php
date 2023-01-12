<?php
$user = 'root';
$password = '';
$db = 'admin_website_db';
$host = 'localhost';

$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO ($dsn, $user, $password);