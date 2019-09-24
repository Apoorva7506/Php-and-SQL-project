<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

  session_start();
?>
<html>
    <head>
        <title>Settings</title>
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
        include 'nav2.php';
       ?>
        
        
        
        
        
        <div class="jumbotron container" style="margin-top:75px; height: 40px; align-content: center; padding-bottom: 110px">
            <h1>Settings</h1>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="container" style="margin-top:100px;">
           
            
                <div class="panel panel-default">
                    <div class="panel-heading"><b><h2>Change Password</h2></b></div>
                    <div class="panel-body">
                        <form>
                            <div class="input-group-lg">
                            <input type="text" class="form-control row_style" placeholder="Password" name="password">
                             <input type="text" class="form-control row_style" placeholder="New password" name=" new_password">
                             <a href="index.php">  <input type="button" class="btn btn-primary btn-lg row_style" value="Confirm"></a>
                            </div>
                        </form>
                    </div>
                    
                </div>
           
            
        </div>
        
         <footer>
            <center>
                <div class="container">
                    Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000Ɖ 
                </div>
            </center>
     
    </body>
</html>
