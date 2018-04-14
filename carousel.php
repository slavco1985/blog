
 
  <div id="myCarousel" class="carousel slide col-lg-8" data-ride="carousel" data-interval="3000" data-pause="hover">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" ></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    
    <?php
    $sql_c = "SELECT * FROM posts ORDER  BY post_id DESC LIMIT 3 ";
    $result_c = mysqli_query($con, $sql_c);
    
    $a = array();
    
    while($row_c = mysqli_fetch_assoc($result_c)){
    
      $a[] = $row_c['post_name'];
      $a[] = $row_c['image']; 
      $a[] = $row_c['post_id'];
      $a[] = $row_c['cat_id'];
    }
    
    
    ?>
    
    <div class="carousel-inner">

      <div class="item active">
          
          <img src="admin/uploads/<?php echo $a[1]; ?>"  style="width:100%;height:250px;">
        <div class="carousel-caption ">
          <h3><?php echo "<a href=\"show_whole_post.php?post_id=$a[2]&cat_id=$a[3]  \"> <h3 class=\"white\">  $a[0] </h3> </a> "?>
          
        </div>
      </div>

      <div class="item ">
        <img src="admin/uploads/<?php echo $a[5]; ?>"  style="width:100%;height:250px;">
        <div class="carousel-caption">
          <h3><?php echo "<a href=\"show_whole_post.php?post_id=$a[6]&cat_id=$a[7]  \"> <h3 class=\"white\">  $a[4] </h3> </a> "?></h3>
          
        </div>
      </div>
    
      <div class="item">
        <img src="admin/uploads/<?php echo $a[9]; ?>"  style="width:100%;height:250px;">
        <div class="carousel-caption">
          <h3><?php echo "<a href=\"show_whole_post.php?post_id=$a[10]&cat_id=$a[11]  \"> <h3 class=\"white\">  $a[8] </h3> </a> "?></h3>
          
        </div>
      </div>
  
    </div>
   
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


       
        
        
          
        
     
