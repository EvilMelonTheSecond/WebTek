<?php
session_start();

$stored_username = "g221210371@sakarya.edu.tr";
$stored_password = password_hash("g221210371", PASSWORD_DEFAULT);

    $myusername = $_POST['username'];
    $mypassword = $_POST['password']; 

    // Validate credentials
    if($myusername == $stored_username && password_verify($mypassword, $stored_password)) {
       // If credentials are valid, start a session
        $_SESSION['login_user'] = $myusername;
        header("location: success.php"); // Redirect to a welcome page
    } else {
        $error = "Your Login Name or Password is invalid";
        echo $error;
        header( "refresh:3;url=Login.php" );
    }

?>
