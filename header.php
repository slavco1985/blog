<?php
include 'db.php';

?>
<!DOCTYPE html>
<html lang="en">
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
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>


        <header>
            <nav class="navbar " >
                  <a class="navbar-brand visible-xs" href="index.php">BLOG</a>
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar bg-primary"></span>
        <span class="icon-bar bg-primary"></span>
        <span class="icon-bar bg-primary"></span> 
       
      </button>
            
           
            
            
            <div class="collapse navbar-collapse  " id="myNavbar">
            <ul class="nav navbar-nav nav-tabs nav-justified  ">
                
                <?php
                $sql_cat = "SELECT * FROM cat";
                $result_cat = mysqli_query($con, $sql_cat);
                echo "<li><a href=\"index.php\" class=\"btn btn-primary\" >HOME</a></li>";
                while ($row = mysqli_fetch_assoc($result_cat)) {
                    $cat_id = $row['cat_id'];
                    $cat_name = $row['cat_name'];
                    
                    echo"<li  ><a href=\"cat.php?cat_id=$cat_id\"class=\"btn btn-primary\">$cat_name</a></li>";
                }
                ?>


            </ul>
            
                 </div>
                <br>
                </nav>
        </header>
        <div class="container">
          <div class="row">
        