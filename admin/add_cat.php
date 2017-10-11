<?php
include '../db.php';
?>
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        <div class = "cat">


            <?php
            if (isset($_POST['submit'])) {
                $cat_name = $_POST['cat_name'];



                $insert_sql = "INSERT INTO cat (cat_name) VALUES ('$cat_name')";
                $insert_result = mysqli_query($con, $insert_sql);
                header('location: index.php');
            }
            ?>


            <form action="" method="POST" >
                <input class="input_field" type="text" name="cat_name" placeholder="category name"><br>


                <input class="input_field" type="submit" name="submit" value="Add Category">
            </form>




        </div>


    </body>
</html>








