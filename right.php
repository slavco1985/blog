<div class="right">
    <h3 id="najcitani">POPULAR</h3>
    <?php
    $sql_right = "SELECT * FROM posts ORDER BY visits DESC LIMIT 5 ";
    $result_right = mysqli_query($con, $sql_right);
    
    while ($row_right = mysqli_fetch_assoc($result_right)) {

        $post_id_right = $row_right['post_id'];
        $name_right = $row_right['post_name'];
        $name_right_wrap = wordwrap($name_right, 33, "\n", true);
        echo "<div class = \"right_post\">";
        echo"<h3>";
        echo" <a href=\"show_whole_post.php?postid=" . $post_id_right . "\"> <h4>  $name_right_wrap </h4> </a>  ";
        echo "</h3>";
        echo"</div>";
    }
    ?>










</div>