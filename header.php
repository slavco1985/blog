<?php
include './db.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="style.css">

        <title>Blog</title>
    </head>
    <body> 


        <div class="header">

            <?php
            $sql_cat = "SELECT * FROM cat";
            $result_cat = mysqli_query($con, $sql_cat);
            echo "<ul class=\"header\">";
            echo"<li id=\"home_button\" ><a  href=\"index.php\"><h2>HOME</h2></a></li>";

            while ($row_cat = mysqli_fetch_assoc($result_cat)) {
                $cat_name = $row_cat['cat_name'];
                $cat_id = $row_cat['cat_id'];

                echo "<li><a href=\"cat_action.php?cat_id=$cat_id \"> <h2>$cat_name    </h2> </a></li>";
            }

            echo "<li id=\"admin_button\"><a href=\"admin/index.php\"> <h2>ADMIN</h2> </a></li>";
            ?>
        </ul>
    </div> 


