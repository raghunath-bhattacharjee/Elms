<?php
include('../Database.php');

class User
{
    function __construct()
    {
        $this->database = Database::getInstance();
    }

    public function checkUserExistence($email)
    {
        $Query = "SELECT * FROM register where `email` = '$email'";
        $result =  $this->database->connection()->query($Query);

        return $result->num_rows ? true : false;
    }

    public function validateSignUpInfoAndSave($name, $email, $phone, $pass, $cpass)
    {
        if ($name == '' || $email == '' || $phone == '' || $pass == '') {
            $_SESSION['error'] = CodeError::ALL_FIELD_IS_REQUIRED;
            return true;
        }

        if ($this->checkUserExistence($email)) {
            $_SESSION['error'] = CodeError::USER_ALREADY_EXISTS;
            return true;
        }

        if (strlen($phone) < 10) {
            $_SESSION['error'] = CodeError::PHONE_MUST_BE_TEN_CHAR;
            return true;
        }

        if ($pass != $cpass) {
            $_SESSION['error'] = CodeError::PASSWORD_AND_CONFIRM_PASSWORD_NOT_SAME;
            return true;
        }


        if (strlen($pass) < 8) {
            $_SESSION['error'] = CodeError::PASSWORD_MUST_BE_EIGHT_CHAR;
            return true;
        }


        try {
            $this->saveUserInfo($this->database->connection(), $name, $email, $phone, $pass);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    private function saveUserInfo($mysqli, $name, $email, $phone, $pass)
    {
        $Query = "INSERT INTO register (`name`,`email`,`username`,`password`,`city`,`college`,`phone`,`about`,`interest`,`occupation`,`ambition`) VALUES ('$name','$email','','$pass','','','$phone','','','','')";
        $result = $mysqli->query($Query);

        if ($result->num_rows) { //if data inserted successfully
            header("Location: ./signin.php");
        } else {
            $_SESSION['error'] = CodeError::TRY_TO_PROCESS_DATA_AT_THIS_MOMENT;
            return true;
        }
    }

    public function validateSignInfo($email, $pass)
    {
        try {
            $this->checkUserInfo($this->database->connection(), $email, $pass);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    private function checkUserInfo($mysqli, $email, $pass)
    {
        $Query = "SELECT * FROM register where `email` = '$email' and `password` = '$pass'";
        $result = $mysqli->query($Query);

        if ($result->num_rows) { //if data inserted successfully
            $_SESSION['token'] = $email;
            header("Location: ../admin/");
        } else {
            $_SESSION['error'] = CodeError::INVALID_INFORMATION;
            return true;
        }
    }

    public function sendResetLinkToUser($email)
    {
        try {
            if ($this->checkUserExistence($email)) { //if data inserted successfully
                $_SESSION['email'] = $email;
                header('Location:../auth/reset-password.php');
            } else {
                $_SESSION['error'] = CodeError::EMAIL_NOT_FOUND;
                return true;
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updatePassword($pass, $cpass)
    {
        if ($pass != $cpass) {
            $_SESSION['error'] = CodeError::PASSWORD_AND_CONFIRM_PASSWORD_NOT_SAME;
            return true;
        }

        if (strlen($pass) < 8) {
            $_SESSION['error'] = CodeError::PASSWORD_MUST_BE_EIGHT_CHAR;
            return true;
        }

        $email = $_SESSION['email'];

        try {
            $Query = "UPDATE register SET `password` = '$pass' WHERE `email` = '$email'";
            $result = $this->database->connection()->query($Query);

            if ($result) {
                header('location:../auth/signin.php');
            } else {
                $_SESSION['error'] = CodeError::TRY_TO_PROCESS_DATA_AT_THIS_MOMENT;
                return true;
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function fetchAllUsers()
    {
        $Query = "SELECT * FROM register";
        $results =  $this->database->connection()->query($Query);

        return $results;
    }

    public function deleteUser($userId)
    {
        $query = "DELETE from register WHERE `id` = '$userId'";
        $result =  $this->database->connection()->query($query);
        return $result;
    }
}
