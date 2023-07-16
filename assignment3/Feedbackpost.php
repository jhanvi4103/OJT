<?php
//   $Name1=$_POST['Name'];
//   $Emailid1=$_POST['Emailid'];
//   $phone1=$_POST['phone'];
//   $Feedback1=$_POST['Feedback'];
 
 $UserName="root";
 $Servername="localhost";
 $Password="";
 $dbname="feedback";
 $conn=mysqli_connect($Servername,$UserName,$Password,$dbname);
 if(!$conn)
 {
     die("Connection faild".mysqli_connect_error());
 }
//  $sql="Create database feedBack";
//  if(mysqli_query($conn,$sql))
//  {
//      echo "Database Created";
//  }
//  else{
//      echo "Error";
//  }
//   $sql1="CREATE TABLE feedbackTABLE(Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Name VARCHAR(20),Emailid VARCHAR(20),phone INT(10),Feedback VARCHAR(50))";
//   if($conn->query($sql1)===TRUE)
//   {
//       echo "Table Created";
//   }
//   else{
//       die("Connection faild".mysqli_connect_error());
//   }
//   $sql2="INSERT INTO feedbackTABLE(Name,Emailid,phone,Feedback) VALUES('jhanvi','jhanvi@gmail.com',9874560123,'Nice')";
//   if(mysqli_query($conn,$sql2))
//   {
//       echo "Value Insert Successfully";
//   }
//   else{
//       echo "Error";
//   }
//  $sql3="INSERT INTO feedbackTABLE(Name,Emailid,Phone,Feedback) VALUES('dhvani','ert1@gamil.com',5647389234,'good')";
//  if(mysqli_query($conn,$sql3))
//  {
//      echo "Value Insert Successfully";
//  }
//  else{
//      echo "Error";
//  }
//  $sql4="INSERT INTO feedbackTABLE(Name,Emailid,Phone,Feedback) VALUES('kashish','kishu@gamil.com',8923165882,'bad')";
//  if(mysqli_query($conn,$sql4))
//  {
//      echo "Value Insert Successfully";
//  }
//  else{
//      echo "Error";
//  }
//  $sql5="INSERT INTO feedbackTABLE(Name,Emailid,Phone,Feedback) VALUES('aryan','aj13@gamil.com',1357896424,'joyfull')";
//  if(mysqli_query($conn,$sql5))
//  {
//      echo "Value Insert Successfully";
//  }
//  else{
//      echo "Error";
//  }
//  $sql6="DELETE FROM feedbackTABLE WHERE Id=1";
//  if(mysqli_query($conn,$sql6))
//  {
//      echo "Deleted Successfully";
//  }
//  else{
//      echo "Error";
//  }
//  $sql7="DELETE FROM feedbackTABLE WHERE Id=4";
//  if(mysqli_query($conn,$sql7))
//  {
//      echo "Deleted Successfully";
//  }
//  else{
//      echo "Error";
//  }
 $sql8="UPDATE feedbackTABLE SET Name='juhi', Emailid='juhi@gmail.com',  WHERE Id=2";
 if(mysqli_query($conn,$sql8))
 {
     echo "Updated Successfully";
 }
 else{
     echo "Error";
 }
?>