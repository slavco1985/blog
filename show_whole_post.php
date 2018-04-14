<?php

include 'header.php';
include 'right.php';
if(isset($_GET['post_id']) && isset($_GET['cat_id'])){
    $post_id = $_GET['post_id'];
    $cat_id = $_GET['cat_id'];
    $sql = "SELECT * FROM posts WHERE post_id = $post_id";
    $result = mysqli_query($con, $sql);
    
    $sql_visits =  "SELECT  visits FROM posts WHERE post_id =$post_id";
    $result_visits = mysqli_query($con, $sql_visits);
    
        while($row_visits = mysqli_fetch_assoc($result_visits)){
            
                      $visits = $row_visits['visits'];
                      $update_visits = $visits + 1;
                     
                 }
     $sql_visits_update = "UPDATE posts SET visits = $update_visits WHERE post_id =$post_id";
     $result_visits_update = mysqli_query($con, $sql_visits_update);
     
     while($row = mysqli_fetch_assoc($result)){
    $post_name = $row['post_name'];
    $post_content = $row['post_content'];
    //$post_content_wrap = wordwrap($post_content,333, "\n", false);  
    
    echo"<div class=\"container\">";
    echo"<div class=\"row\">";
    echo "<div class=\"col-lg-8  well\">";
    
    echo"<div class=\"media\">";
   
    echo "<div class=\"media-body\">";
      echo "<h4 class=\"media-heading\">$post_name</h4>";
      echo "<p>$post_content</p>";
    echo"</div>";
    echo"</div>";
    
    echo"</div>";
    
    
    
    echo"</div>";
    echo"</div>";
    
    
    echo"<div class=\"container\">";
    echo "<h4>Related Posts</h4>";
         echo"<div class=\"row \">";
    $sql_rel = "SELECT * FROM posts WHERE cat_id=$cat_id  ORDER BY RAND()  LIMIT 4";
    $result_rel = mysqli_query($con,$sql_rel);
    while($row_rel = mysqli_fetch_assoc($result_rel)){
        $post_id_r = $row_rel['post_id'];
        $cat_id_r = $row_rel['cat_id'];
     $rel_name = $row_rel['post_name'];
     $rel_image = $row_rel['image'];
     
          echo"<div class=\"col-lg-2  col-sm-5  well\">";
          
          echo "<a href=\"show_whole_post.php?post_id=$post_id_r&cat_id=$cat_id_r\"><img class=\"img-responsive \" src=\"admin/uploads/$rel_image\"  width=\"460\" height=\"345\"></a>"; 
          echo "<a href=\"show_whole_post.php?post_id=$post_id_r&cat_id=$cat_id_r\"><h5 class=\"text-primary\">$rel_name</h5></a>";    
          echo"</div>";
       
    }
    
    
         echo"</div>";
         echo"</div>";
    
}
  




}

?>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
<form action="comment_action.php" method="POST">
    <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control " name="comment" rows="5" id="comment" required=></textarea>
</div>
<input type="hidden" name="post_id" value="<?php echo $post_id?>">
<input type="hidden" name="cat_id" value="<?php echo $cat_id?>">
<input type="submit" class="btn btn-primary pull-right" value="Comment" >
    </form>
            <br><br>
       
    <?php
    $com_sql = "SELECT * FROM comments WHERE post_id=$post_id ORDER BY time DESC";
    $com_result = mysqli_query($con,$com_sql);
    while($row_com = mysqli_fetch_assoc($com_result)){
   $com_content = $row_com['com_content'];
   $com_time = $row_com['time'];
   
        echo "<p class=\"well\"><small>$com_time</small> <br>$com_content  </p>";
        
        
    }

    ?>
 </div>
    </div>
</div>