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

        <title>Motika Admin</title>
        
        
    </head>
    <body>
         <div class="container-fluid ">
             <div class="row ">
                 <div class=" center-block col-lg-12 well ">
                    
                    
                    <?php
                    
                    if(isset($_POST['submit'])){
                        $cat_name = $_POST['cat_name'];
                        
                       
                        
                        $insert_sql = "INSERT INTO cat (cat_name) VALUES ('$cat_name')";
                        $insert_result = mysqli_query($con, $insert_sql);
                       header('location: index.php');
                        
                    }
                    
                    
                    ?>
                    
                     
                     <form  action="" method="POST" >
                         <input type="text" class="center-block" name="cat_name" placeholder="Category name"><br>
                         
                   
                         <input type="submit" class="center-block btn btn-primary " name="submit" value="Add Category">
                     </form>

                   
                    </div>
                    </div>
                </div>


</body>
</html>








