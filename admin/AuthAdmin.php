<?php
    session_start();
    //check if the user is authenticated or not
    if (!isset($_SESSION['admin_token'])) {
        header("location: ./login.php");
    }

    //destroy session after pressiong the logout button
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['admin_token']);
        header("location: ./admin");
    }
?>