<?php

$sql_posts = "SELECT * FROM posts ORDER BY post_id DESC";
$result_posts = mysqli_query($con, $sql_posts);



while ($row_posts = mysqli_fetch_assoc($result_posts)) {


    $post_id = $row_posts['post_id'];
    
    $post_name = $row_posts['post_name'];
    $post_name_sub = substr($post_name, 0, 80);
    $post_name_wrap = wordwrap($post_name_sub, 33, "\n", true);

    $post_content = $row_posts['post_content'];
    $post_cont_sub = substr($post_content, 0, 200);
    $post_content_wrap = wordwrap($post_cont_sub, 33, "\n", true);

    $post_image = $row_posts['image'];


    echo "<div class = \"post\">";
    echo "<div class = \"post_name\">";
    echo" <a href=\"show_whole_post.php?postid=" . $post_id . "\"> <h3> $post_name_wrap </h3> </a>  ";
    echo" </div>";

    echo "<div class =\" image\"><img src=\"./admin/uploads/" . $post_image . " \"></div>";
    echo "<div class = \"post_content\">";
    echo "<p> $post_content_wrap </p>";
    echo" </div>";

    echo " <div class=\"post_btn\">";
    echo" <a href=\"show_whole_post.php?postid=" . $post_id . "\"> More </a>  ";
    echo" </div>";
    echo " <div class=\"post_count\">";

    $sql_visits = "SELECT  visits FROM posts WHERE post_id =$post_id";
    $result_visits = mysqli_query($con, $sql_visits);

    while ($row_visits = mysqli_fetch_assoc($result_visits)) {
        $visits = $row_visits['visits'];
    }

    echo"<p>Visits: $visits</p>";
    echo" </div>";
    echo" </div>";
}
?>
              

