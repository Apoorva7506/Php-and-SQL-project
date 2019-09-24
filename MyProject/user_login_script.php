<?php
session_start();
$con=mysqli_connect("localhost","root","","store");
$email=$_POST['email'];
$password=$_POST['password'];

$ret=mysqli_query( $con, "SELECT * FROM users WHERE email='$email' AND password='$password' ") or die("Could not execute query: " .mysqli_error($con));
$row= mysqli_fetch_assoc($ret);
if(!$row)
{
   echo("<h1><center> Wrong email or password</h1></center>");
    echo('<center><h2><a href="login.php">Click here to try again</a></h2></center>');
 
}

else
{
    session_start();
    $_SESSION['email']=$email;
    header("Location: products.php");
}
?>