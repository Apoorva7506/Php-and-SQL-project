<?php
session_start();
$con=mysqli_connect("localhost","root","","store");
$email=$_POST['email'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$password=$_POST['password'];
$address=$_POST['address'];
$city=$_POST['city'];
$user_registration_query="insert into users(email,name,contact,password,city,address) 
    values ('$email','$name','$contact','$password','$city','$address')";

$user_registration_submit=mysqli_query($con,$user_registration_query)
        or die(mysqli_error($con));
echo "User Inserted";
$_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);
header('Location: products.php')
    
?>