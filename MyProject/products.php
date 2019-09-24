<?php

  session_start();
?>
<html>
    <head>
        <title>TODO supply a title</title>
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
            #ma {margin-top:100px;
            padding-left: 120px;
            background-color:#b3b7bb;}
            .mn{ margin-top:10px;
                 margin-bottom:20px;}
           
            </style>
    
    
    
    </head>
    <body>
        <?php
        include 'nav2.php';
       ?>
        <div class="offset-xl-2 col-xl-8">
            <div class="jumbotron " id="ma"  >
                <div><h1>Welcome To Our Lifestyle Store!</h1>
            <p>We have the best cameras,shirts and watches for you.No need to hunt around,we have all in one place.</p>
                </div>
            </div>
             <div class="row">
            <div class="col-xl-3 mn">
                <img src="img/5.jpg" class="img-thumbnail" style="margin-left:0px">
                <center><div class="caption"><h4>CANON-EOS</h4>
                    Price:Rs36000<br>
                    <input type="button"class="btn btn-primary" value="Add to cart"></center>
                </div>
                     <div class="col-xl-3 mn">
                <img src="img/2.jpg" class="img-thumbnail" style="margin-left:0px">
                <center><div class="caption"><h4>SONY DSLR</h4>
                    Price:Rs46000<br>
                    <input type="button"class="btn btn-primary" value="Add to cart"></center>
                     </div>
                     
                     <div class="col-xl-3 mn">
                <img src="img/3.jpg" class="img-thumbnail" style="margin-left:0px">
                <center><div class="caption"><h4>SONY DSLR</h4>
                    Price:Rs46000<br>
                    <input type="button"class="btn btn-primary" value="Add to cart"></center>
                     </div>
                    
                    
                    <div class="col-xl-3 mn">
                <img src="img/4.jpg" class="img-thumbnail" style="margin-left:0px">
                <center><div class="caption"><h4>OLYMPUS DSLR</h4>
                    Price:Rs46000<br>
                    <input type="button"class="btn btn-primary" value="Add to cart"></center>
                     </div>
                    
                    
                     
                     
                     </div>
                
                    
                    
                    
                    <div class="row">
                        
                    <div class="col-xl-3 mn">
                <img src="img/9.jpg" class="img-thumbnail " style="margin-left:0px">
                <center><div class="caption"><h4>TITAN-MODEL#301</h4>
                    Price:Rs24000<br>
                    <input type="button"class="btn btn-primary" value="Add to cart"></center>
                    </div>
                    
                    
                     <div class="col-xl-3 mn">
                <img src="img/10.jpg" class="img-thumbnail " style="margin-left:0px">
                <center><div class="caption"><h4>TITAN-MODEL#201</h4>
                    Price:Rs54000<br>
                    <input type="button"class="btn btn-primary" value="Add to cart"></center>
                    </div>
                    
                    
                     <div class="col-xl-3 mn">
                <img src="img/11.jpg" class="img-thumbnail " style="margin-left:0px">
                <center><div class="caption"><h4>HMT MILAN</h4>
                    Price:Rs54000<br>
                    <input type="button"class="btn btn-primary" value="Add to cart"></center>
                    </div>
                    
                    
                    
                     <div class="col-xl-3 mn">
                <img src="img/12.jpg" class="img-thumbnail " style="margin-left:0px">
                <center><div class="caption"><h4>FABER-LUBA#111</h4>
                    Price:Rs46000<br>
                    <input type="button"class="btn btn-primary" value="Add to cart"></center>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    </div>
                      
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <div class="row" style="margin-bottom:75px">
                   <div class="col-xl-3 mn">
                <img src="img/8.jpg" class="img-thumbnail" style="margin-left:0px">
                <center><div class="caption"><br><h4>H&W</h4>
                    Price:Rs20000<br>
                    <input type="button"class="btn btn-primary" value="Add to cart"></center>
                </div>
                    
                    
                     <div class="col-xl-3 mn">
                <img src="img/6.jpg" class="img-thumbnail" style="margin-left:0px">
                <center><div class="caption"><h4>LUIS PHIL</h4>
                    Price:Rs20000<br>
                    <input type="button"class="btn btn-primary" value="Add to cart"></center>
                </div>
                     <div class="col-xl-3 mn">
                <img src="img/13.jpg" class="img-thumbnail" style="margin-left:0px">
                <center><div class="caption"><h4>H&W</h4>
                    Price:Rs16000<br>
                    <input type="button"class="btn btn-primary" value="Add to cart"></center>
                </div>
                     <div class="col-xl-3 mn">
                <img src="img/14.jpg" class="img-thumbnail" style="margin-left:0px">
                <center><div class="caption"><h4>H&W</h4>
                    Price:Rs18000<br>
                    <input type="button"class="btn btn-primary" value="Add to cart"></center>
                </div>
                     </div></div>
                    
                    
                    
               <?php
               require 'footer.php';
     ?>
                    
                    
   </body>
</html>


