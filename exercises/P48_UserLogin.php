<?php
session_start();

class P48_UserLogin {
    public function main(): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $username = '';
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
        }

        $password = '';
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
        }

        if ($username === 'admin') {
            if ($password === 'secret') {
                $_SESSION['loggedin'] = true;
                echo "Welcome, admin";
            } else {
                $_SESSION['loggedin'] = false;
                echo "Invalid credentials";
            }
        } else {
            $_SESSION['loggedin'] = false;
            echo "Invalid credentials";
        }
    }
}