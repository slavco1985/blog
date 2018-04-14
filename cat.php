<?php
        include 'header.php';
        include 'right.php';
        
        if(isset($_GET['cat_id'])){  
            $cat_id = $_GET['cat_id'];
            
        $sql_post = "SELECT * FROM posts WHERE cat_id= $cat_id ORDER BY post_id DESC ";
        $result_posts = mysqli_query($con, $sql_post);
        
        while ($row = mysqli_fetch_assoc($result_posts)) {
            $post_id = $row['post_id'];
            $cat_id = $row['cat_id'];
            $post_name = $row['post_name'];
            $post_content = $row['post_content'];
            $post_image = $row['image'];
            $post_name_sub = substr($post_name, 0,333);
            $post_content_sub = substr($post_content, 0,400);

            echo "<div class=\"col-lg-8 col-sm-12 col-xs-12 well \">";
            echo"<div class=\"media\">";
            echo "<div class=\"media-left\">";
            echo"<img src=\"admin/uploads/$post_image\"    class=\"media-object\" style=\"width:200px\">";
            echo" </div>";
            echo"<div class=\"media-body\">";
            echo"<h4 class=\"media-heading\"><a href=\"show_whole_post.php?post_id=$post_id&cat_id=$cat_id\">$post_name_sub</a></h4>";
            echo"<h5  class=\" hide-on-portrait \">$post_content_sub</h5>";
            echo"</div>";
            echo"</div>";
            $sql_visits = "SELECT  visits FROM posts WHERE post_id =$post_id";
            $result_visits = mysqli_query($con, $sql_visits);

            while ($row_visits = mysqli_fetch_assoc($result_visits)) {
            $visits = $row_visits['visits'];
             }

            echo"<h4>Visits: $visits</h4>";
            echo" <a href=\"show_whole_post.php?post_id=$post_id&cat_id=$cat_id \"  class=\"btn btn-primary pull-right\" > Read more... </a>  ";
            echo"</div>";
        }
        }
        ?>
        
            
        </div>


    </div>