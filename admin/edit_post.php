<?php
include '../db.php';

if (isset($_GET['edit'])) {
    $edit = $_GET['edit'];
    $sql = "SELECT * FROM posts WHERE post_id= $edit";
    $result = mysqli_query($con, $sql);
    $edit_post = mysqli_fetch_assoc($result);
}
?>

<html>
    <head></head>
    <body>

        <form action="edit_post_action.php" method="GET">
            <input type="text" name="post_name" value="<?php echo $edit_post['post_name']; ?>"><br>
            <textarea   rows="10" cols="50" name="post_content"  ><?php echo $edit_post['post_content']; ?> </textarea><br>
            <input type="hidden" name="cat_id" value="<?php echo $edit_post['cat_id']; ?>"><br>
            <input type="hidden" name="post_id" value="<?php echo $edit_post['post_id']; ?>"><br>
            <input type="submit" name="submit" value="Edit">

        </form>


    </body>
</html>

