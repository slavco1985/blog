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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Blog</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">

        <title>Motika Admin</title>
    </head>
    <body>
        <div class="container">
            <h3>Welcome : <?php echo $user; ?></h3>
            <a href="logout.php" class="btn btn-primary" >LOG OUT</a><br><br>
            <span class="glyphicon glyphicon-plus"></span><a href="add_post.php" class="btn btn-primary"> Add post</a>

            <table class="table table-bordered well" >
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Category</th>
                    <th ></th>

                </tr>


<?php
$sql = "SELECT * FROM posts INNER JOIN cat ON posts.cat_id = cat.cat_id";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($result)) {

    $post_content = $row['post_content'];
    $post_content_sub = substr($post_content, 0, 22);

    echo "<tr>";
    echo"<td>" . $row['post_id'] . "</td>";
    echo"<td>" . $row['post_name'] . "</td>";
    echo"<td>" . $post_content_sub . "</td>";
    echo"<td>" . $row['cat_name'] . "</td>";

    echo "<td><a href=\"delete_post.php?delete=" . $row['post_id'] . " \"><span class=\"glyphicon glyphicon-remove \"></span></a> <a href=\"edit_post.php?edit=" . $row['post_id'] . " \"><span class=\"glyphicon glyphicon-edit\"></span></a> </td>  ";



    echo "</tr>";
}
?>
            </table>


            <span class="glyphicon glyphicon-plus"></span><a href="add_cat.php" class="btn btn-primary"> Add Category</a>
            <table class="table table-bordered well" >
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th></th>
                </tr>


<?php
$sql1 = "SELECT * FROM cat";
$result1 = mysqli_query($con, $sql1);
while ($row1 = mysqli_fetch_assoc($result1)) {


    echo "<tr>";
    echo"<td>" . $row1['cat_id'] . "</td>";
    echo"<td>" . $row1['cat_name'] . "</td>";


    echo "<td><a href=\"delete_cat.php?delete=" . $row1['cat_id'] . " \"><span class=\"glyphicon glyphicon-remove \"></span></a> <a href=\"edit_cat.php?edit=" . $row1['cat_id'] . " \"><span class=\"glyphicon glyphicon-edit\"></a> </td>  ";



    echo "</tr>";
}
?>
            </table>





        </div>




    </body>
</html>
