<?php

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    if (!empty($username) && !empty($password)) {


        include '../db.php';

        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);


        $sql = "SELECT * FROM users WHERE username='$username' "
                . "AND password='$password'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);

        mysqli_close($con);
        if (is_null($user)) {
            header('location: login.php');
            exit;
        } else {
            session_start();
            $_SESSION['user'] = $user;

            header('location: index.php');
            exit;
        }
    }
} else {
    header('location: login.php');
    exit;
}
?>