<?php
session_start();
include '../db.php';
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user']['username'];
} else {
    header('location: login.php');
}


if(isset($_GET['delete'])){
    $id = $_GET['delete'];
 
   $sql = "DELETE  FROM cat WHERE cat_id = $id";
   $result = mysqli_query($con, $sql);
   header('location: index.php');
    
}



?>
