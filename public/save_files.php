<?php
include_once 'AuthClass.php';
$auth = new AuthClass();
//ini_set('display_errors', 1);
if (!$_SESSION['user_id']){
    return;
}
// Временная директория.
$tmp_path = $_SERVER['DOCUMENT_ROOT'] . '/upload/temp/';

// Постоянная директория.
$path = $_SERVER['DOCUMENT_ROOT'] . '/upload/';

// Подключение к БД.
require_once '../db/mysql_connect.php';

if (isset($_POST['images'])) {
    $user_id = htmlspecialchars($_SESSION['user_id'], ENT_QUOTES);

    if (!empty($_POST['images'])) {
        foreach ($_POST['images'] as $row) {
            $filename = preg_replace("/[^a-z0-9\.-]/i", '', $row);
            if (!empty($filename) && is_file($tmp_path . $filename)) {
                $sth = $pdo->prepare("INSERT INTO `path_images` (user_id, filename) VALUES(:user_id,:filename)");
                $sth->execute(['user_id'=>$user_id, 'filename'=>$filename]);

                // Перенос оригинального файла
                rename($tmp_path . $filename, $path . $filename);

                // Перенос превью
                $file_name = pathinfo($filename, PATHINFO_FILENAME);
                $file_ext = pathinfo($filename, PATHINFO_EXTENSION);
                $thumb = $file_name . '-thumb.' . $file_ext;
                rename($tmp_path . $thumb, $path . $thumb);

                echo json_encode(['success'=>true]);
            }
        }
    }
}

// Редирект, чтобы предотвратить повторную отправку по F5.
