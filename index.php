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
            // login failed
        }
    }
}

//logout
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
}

//register
if (isset($_POST['register-submit'])) {
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    if ($user != "" && $pass != "") {
        $user_check_query = "SELECT * FROM users WHERE user='$user' LIMIT 1";
        $result = mysqli_fetch_assoc(mysqli_query($con, $user_check_query));
        
        if ($result) { // if user exists
            // array_push($errors, "Username already exists");
        } else {
            $query = "INSERT INTO users (user, pass) 
                      VALUES('$user', '$pass')";

            mysqli_query($con, $query);

            $_SESSION['user'] = $user;
            header('location: index.php');
        }
    }
}

require 'templates/index.view.php';