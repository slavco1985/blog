<?php

if(isset($_POST['username'])  &&  isset($_POST['password'])  ){
   
    $username = $_POST['username'];
    $password = $_POST['password'];
    
  
    if( !empty($username) && !empty($password) ) {
     
        if( ctype_alnum($username)  && ctype_alnum($password)   ){
            
            include '../db.php';
            
            $username = mysqli_real_escape_string($con, $username);
            $password = mysqli_real_escape_string($con, $password);
            
            include './db.php';
            $sql = "SELECT * FROM users WHERE username='$username' "
                    . "AND password='$password'";
            $result = mysqli_query($con, $sql);
            $user = mysqli_fetch_assoc($result);
            mysqli_close($con);
            
            if( is_null($user) ) {
                header('location: login.php?errorMsg=3');
                exit;
            } else {
               session_start();
               $_SESSION['user'] = $user;
                
                header('location: index.php'); exit;
            }
            
            
        }else{
            header('location: login.php?errorMsg=2');
             exit;
        }
        
        
    }else{
    header('location: login.php?errorMsg=1');
    exit;
}
    
   
}else{
    header('location: login.php');
    exit;
}
?>