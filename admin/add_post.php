<?php
include '../db.php';
?>
<html>
    <head>
        <script src="./ckeditor/ckeditor.js"></script>


    </head>
    <body>
        <div>


            <?php
            if (isset($_POST['submit'])) {
                $post_name = $_POST['post_name'];
                $post_content = $_POST['post_content'];
                $post_cat_id = $_POST['cat_id'];

                $file = $_FILES['file'];


                $fileName = $file['name'];
                $fileTmpName = $file['tmp_name'];
                $fileSize = $file['size'];
                $fileError = $file['error'];
                $fileType = $file['type'];



                $fileExt = explode('.', $fileName);

                $fileActualExt = strtolower(end($fileExt));


                $allowed = array('jpg', 'jpeg', 'png', 'pdf');

                if (in_array($fileActualExt, $allowed)) {
                    if ($fileError === 0) {
                        if ($fileSize < 1000000) {
                            $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                            $fileDestination = 'uploads/' . $fileNameNew;
                            move_uploaded_file($fileTmpName, $fileDestination);
                            //header("Location: index.php?uploadsuccess");
                        } else {
                            echo "Your file is too big!";
                        }
                    } else {
                        echo "There was an error uploading your file!";
                    }
                } else {
                    echo "You cannot upload files of this type!";
                }


                ////////////////////////////////////////////////////////////////////////////////////
                $file1 = $_FILES['file1'];

                $fileName1 = $file1['name'];
                $fileTmpName1 = $file1['tmp_name'];
                $fileSize1 = $file1['size'];
                $fileError1 = $file1['error'];
                $fileType1 = $file1['type'];



                $fileExt1 = explode('.', $fileName1);

                $fileActualExt1 = strtolower(end($fileExt1));


                $allowed1 = array('jpg', 'jpeg', 'png', 'pdf');

                if (in_array($fileActualExt1, $allowed1)) {
                    if ($fileError1 === 0) {
                        if ($fileSize1 < 1000000) {
                            $fileNameNew1 = uniqid('', true) . "." . $fileActualExt1;
                            $fileDestination1 = 'uploads/' . $fileNameNew1;
                            move_uploaded_file($fileTmpName1, $fileDestination1);
                            //header("Location: index.php?uploadsuccess");
                        } else {
                            echo "Your file is too big!";
                        }
                    } else {
                        echo "There was an error uploading your file!";
                    }
                } else {
                    echo "You cannot upload files of this type!";
                }

                ////////////////////////////////////////////////////////
                $insert_sql = "INSERT INTO posts (post_name, post_content,image,image1, cat_id) VALUES ('$post_name','$post_content','$fileNameNew','$fileNameNew1', $post_cat_id)";
                $insert_result = mysqli_query($con, $insert_sql);
                header('location: index.php');
            }
            ?>


            <form action="" method="POST" enctype="multipart/form-data">
                <textarea rows="4" cols="88" type="text" name="post_name" placeholder="post name"></textarea><br>

                <textarea   class="ckeditor" name="post_content" ></textarea>
                <br>
                <input type="file" name="file" id="fileField" >
                <br>
                <input type="file" name="file1" id="fileField" >
                <br>
                <input list="cat" name="cat_id">
                <datalist id="cat">
                    <?php
                    $sql = "SELECT * FROM cat";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $cat_id = $row['cat_id'];
                        echo "<option  value=\" $cat_id \" name=\" $cat_id \">";
                    }
                    ?>

                </datalist>
                <br>
                <input type="submit" name="submit" value="Add Post">
            </form>




        </div>


    </body>
</html>








