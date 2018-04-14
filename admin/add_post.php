<?php
session_start();
include '../db.php';
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user']['username'];
} else {
    header('location: login.php');
}
?>
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
        <script src="./ckeditor/ckeditor.js"></script>
        
        
    </head>
    <body>
         <div class="container-fluid ">
             <div class="row ">
                 <div class=" center-block col-lg-12 well ">
                    
                    
                    <?php
                    
                    if(isset($_POST['submit'])){
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
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
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
	                
	             
        

	

                        
                        
                        $insert_sql = "INSERT INTO posts (post_name, post_content,image, cat_id) VALUES ('$post_name','$post_content','$fileNameNew', $post_cat_id)";
                        $insert_result = mysqli_query($con, $insert_sql);
                        header('location: index.php');
                        
                    }
                    
                    
                    ?>
                    
                     
                     <form action="" method="POST" enctype="multipart/form-data">
                         <textarea rows="4" cols="50" class="form-group form-group-lg" type="text" name="post_name" placeholder="post name"></textarea><br>
                         
                         <textarea  type="text" class="ckeditor" name="post_content" ></textarea>
                         <br>
                         <input type="file"   name="file" id="fileField"  ">
                         <br>
                         <input list="cat" name="cat_id">
                         <datalist id="cat">
                             <?php  
                             $sql = "SELECT * FROM cat";
                             $result = mysqli_query($con, $sql);
                             while($row = mysqli_fetch_assoc($result)){
                                 $cat_id = $row['cat_id'];
                             echo "<option  value=\" $cat_id \" name=\" $cat_id \">"  ;
                }
                             
                             
                             ?>
                         
                         </datalist>
                         <br>
                         <input type="submit" class="btn btn-primary" name="submit" value="Add Post">
                     </form>

                   
                    
                    
                </div>
                 </div>
             </div>


</body>
</html>








