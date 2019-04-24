<?php

include "config.php";

//login
if (isset($_POST['login-submit'])) {
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    if ($user != "" && $pass != "") {
        $sql_query = "select count(*) as cntUser from users where user='".$user."' and pass='".$pass."'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['user'] = $user;
            header('Location: index.php');
        } else {
            
        }
    }
}

//logout
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
}

error_log('0');
if (isset($_POST['register-submit'])) {
    error_log('1');
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    if ($user != "" && $pass != "") {
        error_log('2');
        $user_check_query = "SELECT * FROM users WHERE user='$user' LIMIT 1";
        $result = mysqli_fetch_assoc(mysqli_query($con, $user_check_query));
        
        if ($result) { // if user exists
            error_log('3');
            array_push($errors, "Username already exists");
        } else {
            error_log('4');

            $query = "INSERT INTO users (user, pass) 
                      VALUES('$user', '$pass')";
            mysqli_query($con, $query);

            $_SESSION['user'] = $user;
            header('location: index.php');
        }
            
    }
}

require 'templates/index.view.php';