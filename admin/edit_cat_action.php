<?php
session_start();
include '../db.php';
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user']['username'];
} else {
    header('location: login.php');
}

if(isset($_GET['submit'])){
    $cat_name = $_GET['cat_name'];
    $cat_id = $_GET['cat_id'];
    
    $sql="UPDATE cat SET cat_name= '$cat_name' WHERE cat_id = $cat_id";
    $result = mysqli_query($con, $sql);
    header('location: index.php');
     
}


?>