<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                position:fixed;
 
 
            }
            .row_style{margin-top: 30px;
                
            }
            .res{height: 562px;}
            </style>
    
   </head>
    
    
    <body>
        <?php
        require 'nav1.php';
        ?>
        <br><br><br>
        
        
        
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
                            <button type="submit" class="btn row_style btn-primary" value="login_submit">Submit</button>
                     
                        </div> </form> 
                </div>
                <br><br> <div class="panel-footer">
                    <a href="signup.php"><p>Don't have an account? Register!</p></a> 
                </div>
                         
                        
                </div>
        </div>
    </div></div></div>
           
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="row_style">
            <div class=" offset-xl-4 col-xl-5">
                <div class="col-lg">
           
            <div class="panel panel-default res">
                <div class="panel-heading"><h2>Login</h2></div><br><br>
                <div class="panel-body">
                     <form method="post" action="user_login_script.php">
                        <div class="input-group-lg">
                        <input type="text" class="form-control " placeholder="email" name="email">
                         <input type="text" class="form-control row_style" placeholder="password" name="password">
                <button type="submit" class="btn row_style btn-primary" value="login_submit">Submit</button>
                 
                     
                        </div>
                     </form> 
                </div>
                <div class="panel-footer">
                    <a href="signup.php"><p>Don't have an account? Register!</p></a> 
                </div>
                         
                        
                </div>
          
            </div>
            </div>
        </div>
       <?php
        require 'footer.php';
        ?>
        
        
       
       
    </body>
</html>



