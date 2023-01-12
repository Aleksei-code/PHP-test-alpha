<?php

class AuthClass
{
    public function __construct()
    {
        session_start();
    }

    public function login($id)
    {
        $_SESSION['user_id'] = $id;
        session_commit();
    }

    public function checkSession()
    {
        if (!$this->isAuth()) {
            $path = '/login';
            header('Location:' . $path);
            exit();
        }
    }

    public function isAuth(): bool
    {
        if (!isset($_SESSION['user_id'])) {
            return false;
        }

        return true;
    }

    public function logOut() {
        unset($_SESSION['user_id']);
        return true;
    }
}