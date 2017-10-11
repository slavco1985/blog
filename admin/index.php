<?php
session_start();
include '../db.php';
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user']['username'];
} else {
    header('location: login.php');
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">

        <title></title>
    </head>
    <body>
        <div class="container">
            <h3>Welcome : <?php echo $user; ?></h3>
            <button><a href="logout.php">LOG OUT</a></button><br><br>
            <a href="add_post.php"> <img src="images/add.gif" >Add Post</a>

            <table class="table table-bordered" >
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Content</th>

                    <th>Category</th>
                    <th >Action</th>

                </tr>


                <?php
                $sql = "SELECT * FROM posts INNER JOIN cat ON posts.cat_id = cat.cat_id";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                    $post_name = $row['post_content'];
                    $post_name_sub = substr($post_name, 0, 88);

                    $post_content = $row['post_content'];
                    $post_content_sub = substr($post_content, 0, 22);

                    echo "<tr>";
                    echo"<td>" . $row['post_id'] . "</td>";
                    echo"<td>" . $post_name_sub . "</td>";
                    echo"<td>" . $post_content_sub . "</td>";
                    echo"<td>" . $row['cat_name'] . "</td>";

                    echo "<td><a href=\"delete_post.php?delete=" . $row['post_id'] . " \"><img src=\"images/delete.gif\" ></a> <a href=\"edit_post.php?edit=" . $row['post_id'] . " \"><img src=\"images/edit.gif\" ></a> </td>  ";



                    echo "</tr>";
                }
                ?>
            </table>


            <a href="add_cat.php"> <img src="images/add.gif" >Add Category</a>
            <table class="table table-bordered" >
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>


                <?php
                $sql1 = "SELECT * FROM cat";
                $result1 = mysqli_query($con, $sql1);
                while ($row1 = mysqli_fetch_assoc($result1)) {


                    echo "<tr>";
                    echo"<td>" . $row1['cat_id'] . "</td>";
                    echo"<td>" . $row1['cat_name'] . "</td>";


                    echo "<td><a href=\"delete_cat.php?delete=" . $row1['cat_id'] . " \"><img src=\"images/delete.gif\" ></a> <a href=\"edit_cat.php?edit=" . $row1['cat_id'] . " \"><img src=\"images/edit.gif\" ></a> </td>  ";



                    echo "</tr>";
                }
                ?>
            </table>

        </div>

    </body>
</html>
