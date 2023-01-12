<?php if (!isset($_SESSION['user_id'])){
    $path = '/login';
    header('Location:'.$path);
    exit( );
}
