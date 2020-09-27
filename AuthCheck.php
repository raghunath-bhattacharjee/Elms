<?php
    session_start();
    //check if the user is authenticated or not
    if (!isset($_SESSION['token'])) {
        header("location: /auth/");
    }

    //destroy session after pressiong the logout button
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['token']);
        header("location:/");
    }
?>