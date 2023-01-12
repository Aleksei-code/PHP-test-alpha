<?php
var_dump($_FILES);
if( isset( $_POST['my_file_upload'] ) ) {
    // ВАЖНО! тут должны быть все проверки безопасности передавемых файлов и вывести ошибки если нужно

    $file = $_POST['my_file_upload'];

    if (!$f = fopen($file, 'rb')) {
        return false;
    }

    $data = fread($f, 8);
    fclose($f);

    if (
        @array_pop(unpack('H4', $data)) == 'ffd8'
    ) {
        letsUploadThisShit();
        return 'Success JPEG';
    } else if (
        @array_pop(unpack('H16', $data)) == '89504e470d0a1a0a'
    ) {
        letsUploadThisShit();
        return 'Success PNG';
    }

    return false;

    function letsUploadThisShit()
    {

        $uploaddir = '/upload/'; // . - текущая папка где находится submit.php

        // cоздадим папку если её нет
        if (!is_dir($uploaddir)) mkdir($uploaddir, 0777);

        $files = $_FILES; // полученные файлы
        $done_files = array();

        // переместим файлы из временной директории в указанную
        foreach ($files as $file) {
            $file_name = $file['name'];

            if (move_uploaded_file($file['tmp_name'], "$uploaddir/$file_name")) {
                $done_files[] = realpath("$uploaddir/$file_name");
            }
        }

        $data = $done_files ? array('files' => $done_files) : array('error' => 'Ошибка загрузки файлов.');

        die(json_encode($data));
    }
}
