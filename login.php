<?php

    // Cancel button in the HTML form
    if ( isset($_POST['cancel'] ) ) {
        header("Location: index.php");
        return;
    }

    $salt = 'XyZzy12*_'; // Random salt
    $stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';  // This hash is the value of $salt concatenated with "php123"
    $failure = false;

    // Check username and password input in the HTML form
    if ( isset($_POST['username']) && isset($_POST['password']) ) {
        if ( strlen($_POST['username']) < 1 || strlen($_POST['password']) < 1 ) {
            $failure = "User name and password are required";
        } else { // Valid user input
            $check = hash('md5', $salt.$_POST['password']); // Hash the password input value with $salt
            if ( $check == $stored_hash ) { // Compare that the password input is euqal to the value of $stored_hash
                header("Location: game.php?username=".urlencode($_POST['username']));
                return;
            } else { // Password input is not the same as $stored_hash
                $failure = "Incorrect password";
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <?php require_once "bootstrap.php"; ?>
    <title>Jack Marshalls Login Page</title>
</head>
<body>
    <div class="container">
    <h1>Please Log In</h1>
    <?php
    // Render any error messages to the page
    if ( $failure !== false ) {
        echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
    }
    ?>
    <form method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br/>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br/>
        <input type="submit" value="Log In">
        <input type="submit" name="cancel" value="Cancel">
    </form>
    <p>For a password hint, view source and find a password hint in the HTML comments.</p>
    </div>
</body>
