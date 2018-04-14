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
        
        <title>Admin Login</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <form action="login_action.php" method="POST">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                        </div>

                        <button type="submit" name="submit" class="btn btn-default">Submit</button>
                    </form>
                    <?php
            if(isset($_GET['errorMsg'])){
                $errorMsg = $_GET['errorMsg'];
                
                if( $errorMsg == 1){
                    echo'<p class="login_error_msg">Both fields are required</p>';
                }
                if( $errorMsg == 2){
                    echo'<p class="login_error_msg">Only alphanumeric characters</p>';
                }
                 if( $errorMsg == 3){
                    echo'<p class="login_error_msg">Wrong username or password</p>';
                }
                 if( $errorMsg == 4){
                    echo'<p class="login_error_msg">Log In </p>';
                }
                
                
            }
            
            
            
            ?>
                    
                    
                    
                </div>
            </div>
        </div>
            
            
        
       
        
    </body>
</html>
