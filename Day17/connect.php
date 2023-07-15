<?php
$UserName="root";
$Servername="localhost";
$Password="";
$conn=mysqli_connect($Servername,$UserName,$Password);
if(!$conn)
{
    die("Connection faild".mysqli_connect_error());
}
else{
    echo "Connection Succesfully";
}
$sql="Create database myDB";
 if(mysqli_query($conn,$sql))
 {
     echo "Database Created";
 }
 else{
    echo "Error";
 }
?>