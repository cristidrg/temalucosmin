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
            echo 1;
        } else {
            echo 0;
        }
    }
}

//logout
if (isset($_POST['logout'])){
    session_destroy();
    header('Location: index.php');
}

require 'templates/index.view.php';