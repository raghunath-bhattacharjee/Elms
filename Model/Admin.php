<?php
session_start();
include('../Database.php');
class Admin
{
    function __construct()
    {
        $this->connection = Database::getInstance();
    }

    public function getAdmin()
    {
        $Query = "SELECT * FROM admin";
        $result = $this->connection->connection()->query($Query);
        return mysqli_fetch_assoc($result);
    }

    public function updateAdmin($name, $username, $email, $newPassword, $about)
    {
        if ($name == '' || $username == '' || $email == '' || $newPassword == ''|| $about == '') {
            $_SESSION['error'] = CodeError::ALL_FIELD_IS_REQUIRED;
        }

        try {
            $Query = "UPDATE admin SET `fullname` = '$name', `username` = '$username', `email` = '$email', `password` = '$newPassword', `about` = '$about'";
            $this->connection->connection()->query($Query);

            session_destroy();
            unset($_SESSION['admin_token']);

            header('location: ../admin/admin-profile.php');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function validateSignInfo($email, $pass)
    {
        try {
            $Query = "SELECT * FROM admin WHERE `email` = '$email' AND `password` = '$pass'";
            $result = $this->connection->connection()->query($Query);
    
            if ($result && $result->num_rows) {
                $_SESSION['admin_token'] = $email;
                header("location: ../admin/");
            } else {
                $_SESSION['error'] = CodeError::INVALID_INFORMATION;
                return true;
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
