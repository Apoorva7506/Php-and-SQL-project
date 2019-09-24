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
        <title>TODO supply a title</title>
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
            .he{height:250 px;
            margin-top: 90px;}
            .cell{
                width:150px;
                
            }
           </style>
    </head>
    <body>
        
        
        
        <?php
        include 'nav2.php';
       ?>
       
        
        
        
        
        
        
        
        
        
        
        
        <div class="justify-content-center container">
            <table class="table table-light he" style="height: 200px">
               
                
                <thead>
                <tr class="table-active table-dark justify-content-center">
                
                    
                    <th>Item no.</th>
                    <th >Item name</th>
                    <th>Price</th>
                    
                </tr>
              
            </thead>
            <tbody>
                <tr>
                    <td>1</td><td>Sony Camera</td><td>35000 Rs.</td>
                   
                </tr>
                <tr><td></td><td> Price:</td><td>36000</td></tr></tbody>
                
                
            </table>
        </div>
            <br><br><div class=" container">
            <a href="success.html"> <button class=" float-right btn btn-danger "><h2>Confirm</h2></button></a>
        </div>
       
         </body>
</html>
