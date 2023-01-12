<?php
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

$error='';
if (strlen($username) <= 3) {
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

$sql = 'SELECT `id` FROM `users` WHERE `username` = :username && `password` = :password';
$query = $pdo->prepare($sql);
$query->execute(['username'=>$username, 'password'=>$enc_pass]);
$user = $query->fetch(PDO::FETCH_OBJ);

if ($user->id == 0)
    echo json_encode(['result' => false]);
else {
    require_once 'AuthClass.php';
    $auth = new authClass();
    $auth->login($user->id);
    echo json_encode(['result' => 'success']);
}
