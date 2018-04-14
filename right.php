
    


<div class="col-lg-3 hidden-xs hidden-sm hidden-md well pull-right top"  >        

            <h4 class="text-center">Most Visited</h4>
            
<?php
    $sql_right = "SELECT * FROM posts ORDER BY visits DESC LIMIT 5 ";
    $result_right = mysqli_query($con,$sql_right);
    while($row_right = mysqli_fetch_assoc($result_right)){
        
        $post_id_right = $row_right['post_id'];
        $name_right =  $row_right['post_name'];
        $cat_id_right = $row_right['cat_id'];
        echo"<h3>";
        echo" <a href=\"show_whole_post.php?post_id=$post_id_right&cat_id=$cat_id_right  \"> <h4> $name_right </h4> </a>  ";
                      
        echo "</h3>";
        
        
    }
    
     
    
    
    ?>
        </div>

    
    
    