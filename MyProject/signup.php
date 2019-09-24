<html>
    <head>
        <title>SIGNUP</title>
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
            .ta{margin-top: 100px;}
            .row_style{margin-top: 20px;
           
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
                            <input type="text" class="form-control" placeholder="email" name="email"><br>
                            <input type="text" class="form-control row_style" placeholder="password" name="password"><br>
                <button type="submit" class="btn btn-primary row_style" value="login_submit">Submit</button>
                     
                    </form> </div>
                </div>
                <br><br> <div class="panel-footer">
                    <a href="signup.php"><p>Don't have an account? Register!</p></a> 
                </div>
                         
                        
                </div>
        </div>
    </div></div></div>
        <br>
        
           <div class="col-xl-5 offset-xl-4 ta">
               
               <div class="panel panel-default">
                   <div class="panel-heading"><h2>SIGN UP</h2></div>
                   <div class="panel-body">
                       <form method="post" action="user_registration_script.php">
                           <div class="input-group-lg">
                               <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                               <input type="text" class="form-control row_style" placeholder="e-mail" name="email" id="email">
                               <input type="text" class="form-control row_style" placeholder="password" name="password" id="password">
                               <input type="text" class="form-control row_style" placeholder="contact" name="contact" id="contact">
                               <input type="text" class="form-control row_style" placeholder="city" name="city" id="city">
                               <input type="text" class="form-control row_style" placeholder="address" name="address" id="address">
                      <button type="submit" class="btn btn-primary row_style" value="registration_submit">Submit</button>
                       </form>
                   </div>
               </div>
            </div>
           </div>
            
            
        
        <?php
        require 'footer.php';
        ?>
        
        
     
    </body>
</html>
