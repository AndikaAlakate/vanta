<?php
    session_start();

    // Check if the user is not logged in
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("Location: ../../?session=expired");
        exit();
    }
?>