<?php
$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

$error='';
if (strlen($name) <= 3) {
    $error = 'Enter name';
} else if (strlen($email) <= 3) {
    $error = 'Enter email';
} else if (strlen($username) <= 3) {
    $error = 'Enter login';
} else if (strlen($password) <= 3) {
    $error = 'Enter password';
}

if($error != '') {
    echo $error;
    exit();
}

$hash = '66d4784349ef1fe0d03bd88b349266de';
$enc_pass = md5($password . $hash);

require_once('../db/mysql_connect.php');

$sql = 'INSERT INTO `users` (name, email, username, password) VALUES (:name, :email, :username, :password)';
$query = $pdo->prepare($sql);
$query->execute(['name'=>$name, 'email'=>$email, 'username'=>$username, 'password'=>$enc_pass]);

echo 'DONE';