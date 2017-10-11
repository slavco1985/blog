<?php
include '../db.php';

if (isset($_GET['edit'])) {
    $edit = $_GET['edit'];
    $sql = "SELECT * FROM cat WHERE cat_id= $edit";
    $result = mysqli_query($con, $sql);
    $edit_cat = mysqli_fetch_assoc($result);
}
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class = "cat">
            <form action="edit_cat_action.php" method="GET">
                <input class="input_field" type="text" name="cat_name" value="<?php echo $edit_cat['cat_name']; ?>"><br>
                <input type="hidden" name="cat_id" value="<?php echo $edit_cat['cat_id']; ?>">
                <input  class="input_field" type="submit" name="submit" value="Edit">

            </form>
        </div>

    </body>
</html>

