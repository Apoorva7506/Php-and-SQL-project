<?php
$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
        
        ?>
<html>
    <head>
        <title>trybtst4</title>
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        
        <link type="text/css" href="1.css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <style>
            footer{
                padding: 10px 0; 
                background-color: #101010; 
                color:#9d9d9d; 
                bottom: 0; 
                width: 100%; 
 
 
            }
            </style>
    
    
    
    </head>
    <body>
      <?php
      require 'nav1.php';
        ?>
        
        
         <div class="modal" id="mm">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">LOGIN</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        <div class="modal-body">
           
            
            <div class="panel panel-default res">
            
                <div class="panel-body">
                    <form method="post" action="user_login_script.php">
                        
                        <div class="input-group-lg">
                            <input type="text" class="form-control " placeholder="email" name="email"><br>
                            <input type="text" class="form-control row_style" placeholder="password" name="password"><br>
                            <button type="submit" class="btn btn-primary row_style" value="login_submit">Submit</button>
                    </form>
                    
                        
               
                     
                    </div>
                </div>
                <br><br> <div class="panel-footer">
                    <a href="signup.php"><p>Don't have an account? Register!</p></a> 
                </div>
                         
                        
                </div>
        </div>
    </div></div></div>
           
 <div id="banner_image" class="img-responsive">
            <center>
                <div id="banner_content">
                <h1>We Sell LifeStyle.</h1>
                    Flat 40% off on premium brands <br><br><br>
                    <a href="login.php" class="btn btn-danger btn-lg">Shop Now</a>
                
                </div>
            </center>
        </div>
        <?php
      include ("footer.php");
        ?>
    </body>
</html>



