<?php

$page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT);
if (!$page) {
    $page = 1;
}

$limit = 2;
$offset = 0;

if ($page > 0) {
    $offset = ($page * $limit) - $limit;
}



$sql_posts = "SELECT * FROM posts ORDER BY post_id DESC LIMIT $limit OFFSET $offset";
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

$query = "SELECT COUNT(post_id) as rows FROM posts ";

$result = mysqli_query($con, $query);
$contactCount = mysqli_fetch_assoc($result);
$contactCount = $contactCount['rows'];

$pages = ceil($contactCount / $limit);
echo "<div id = \"pagi\">";
if ($page > 1) {
    echo '<a href="index.php?page=' . ($page - 1) . '">Prev</a> ';
}
for ($i = 1; $i <= $pages; $i++) {
    if ($page == $i) {
        echo $i . ' ';
    } else {
        echo '<a href="index.php?page=' . $i . '">' . $i . '</a> ';
    }
}
if ($page < $pages) {
    echo '<a href="index.php?page=' . ($page + 1) . '">Next</a> ';
}
echo "</div>";
?>
              

