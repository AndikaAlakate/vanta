<?php
    session_start();
    include 'conn.php';

    // Handle login form submission
    $enteredEmail = $_POST["email"];
    $enteredPassword = $_POST["password"];

    // Query to check if the provided username and password match
    $sql = "SELECT * FROM admin WHERE email = '$enteredEmail'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, check if the password matches
        $row = $result->fetch_assoc();
        $hashedPasswordFromDatabase = $row["password"];

        // Convert entered password to MD5
        $enteredPasswordMD5 = md5($enteredPassword);

        if ($enteredPasswordMD5 === $hashedPasswordFromDatabase) {
            // Authentication successful
            $_SESSION["loggedin"] = true;
            $userName = $row["username"];
            header("Location: ../../../admin/dashboard");
            exit(); // Stop script execution
        }
    }

    // Authentication failed
    $_SESSION["error"] = "Invalid email or password";
    header("Location: ../../../index.php");
    exit(); // Stop script execution
?>
