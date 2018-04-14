<?php
session_start();
include '../db.php';
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user']['username'];
} else {
    header('location: login.php');
}

if(isset($_GET['submit'])){
    $post_name = $_GET['post_name'];
    $post_content = $_GET['post_content'];
    $cat_id = $_GET['cat_id'];
    $post_id = $_GET['post_id'];
    
    $sql="UPDATE posts SET post_name= '$post_name', post_content='$post_content',cat_id=$cat_id WHERE post_id = $post_id";
    $result = mysqli_query($con, $sql);
    header('location: index.php');
     
}


?>