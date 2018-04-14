<?php
session_start();
include '../db.php';
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user']['username'];
} else {
    header('location: login.php');
}

if(isset($_GET['edit'])){
    $edit = $_GET['edit'];
   $sql ="SELECT * FROM posts WHERE post_id= $edit";
   $result = mysqli_query($con, $sql);
   $edit_post = mysqli_fetch_assoc($result);
   
    
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Blog</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <form class="well" action="edit_post_action.php" method="GET">
            <input  class=" form-control " type="text" name="post_name" value="<?php  echo $edit_post['post_name'];?>"><br>
            <textarea  class=" form-control" rows="10" cols="50" name="post_content"  ><?php  echo $edit_post['post_content'];?> </textarea><br>
            <input type="hidden" name="cat_id" value="<?php  echo $edit_post['cat_id'];?>"><br>
            <input type="hidden" name="post_id" value="<?php  echo $edit_post['post_id'];?>"><br>
            <input class="center-block btn btn-primary" type="submit" name="submit" value="Edit">
            
        </form>
        
        
    </body>
</html>

