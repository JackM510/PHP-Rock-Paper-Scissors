<?php

    // Cancel button in the HTML form
    // If cancel exists within the $_POST data array
    if ( isset($_POST['cancel'] ) ) {
        header("Location: index.php"); // Redirect the browser to index.php
        return;
    }

    $salt = 'XyZzy12*_'; // Random salt added to $stored_hash
    $stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';  // This stored hash is the value of $salt concatenated with "php123"
    $failure = false;  // If we have no POST data - used to display a username/password prompt to the user

    // Check to see if there is POST data from the username and password HTML form elements
    if ( isset($_POST['username']) && isset($_POST['password']) ) {
        if ( strlen($_POST['username']) < 1 || strlen($_POST['password']) < 1 ) {
            $failure = "User name and password are required";
        } else { // If both the username and password in the HTML form are populated with data
            $check = hash('md5', $salt.$_POST['password']); // Hash the password input value with $salt
            if ( $check == $stored_hash ) { // Compare that the password value is euqal to the value of $stored_hash (the actual password)
                // If both variables are equal redirect the browser to game.php
                header("Location: game.php?username=".urlencode($_POST['username'])); // And the username is appended to the URL as a GET parameter
                return;
            } else { // Default block if the password input value is not the same as $stored_hash
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
    // $failure initially was declared as false
    // if $failure is not identical to false, there has been input from the user
    if ( $failure !== false ) {
        // Return the value of $failure back to the page in a paragraph tag with red text
        // The value will either be that a "Username and password are required" or "Incorrect password"
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