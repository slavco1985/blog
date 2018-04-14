<?php
include 'db.php';
if(isset($_POST['comment']) && isset($_POST['post_id']) && isset($_POST['cat_id'])){
    
   $post_comment = $_POST['comment'];
   $post_comment = mysqli_real_escape_string($con, $post_comment);
    $post_id = $_POST['post_id'];
    $cat_id = $_POST['cat_id'];
    
    
 $sql = "INSERT INTO comments (com_content,post_id) VALUES ('$post_comment','$post_id')";
                   $result = mysqli_query($con, $sql);
                        header('location: show_whole_post.php?post_id='.$post_id.'&cat_id='.$cat_id);
}
?>