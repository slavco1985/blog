
<?php
include './header.php';
?>
<div class="container">
    <?php
    if (isset($_GET['postid'])) {
        $post_id = $_GET['postid'];
        $sql = "SELECT * FROM posts WHERE post_id =$post_id ";
        $result = mysqli_query($con, $sql);

        $sql_visits = "SELECT  visits FROM posts WHERE post_id =$post_id";
        $result_visits = mysqli_query($con, $sql_visits);

        while ($row_visits = mysqli_fetch_assoc($result_visits)) {
            $visits = $row_visits['visits'];
            $update_visits = $visits + 1;
        }

        $sql_visits_update = "UPDATE posts SET visits = $update_visits WHERE post_id =$post_id";
        $result_visits_update = mysqli_query($con, $sql_visits_update);





        while ($row = mysqli_fetch_assoc($result)) {
            $post_name = $row['post_name'];
            $post_content = $row['post_content'];
            $post_name_wrap = wordwrap($post_name, 33, "\n", true);
            $post_content_wrap = wordwrap($post_content, 33, "\n", true);
            $post_image = $row['image1'];
            echo"<div id=\"whole\">";
            //echo $visits;
            echo "<h3 id=\"post_name_whole\">" . $post_name_wrap . "</h3>";
            echo "<div id = \"post_image_whole\"><img src=\"./admin/uploads/" . $post_image . " \">";
            echo"</div>";
            echo "<div id = \"post_content_whole\">";
            echo "<p> $post_content_wrap </p>";
            echo"</div>";

            echo"</div>";
        }
    }



    include './right.php';
    include './footer.php';
    ?>   

</div>


</body>
</html>
