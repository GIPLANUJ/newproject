<?php
include "connection.php";

$username=$_POST["username"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$course=$_POST["course"];


//insert query

$sql = "INSERT INTO resister(username,email,phone,course)VALUES('$username','$email','$phone','$course')";
$insert=mysqli_query($conn,$sql);
if($insert){
echo"<script>alert('sucessful')</script>";
echo"<script>location.replace('paramount.html')</script>";
}else{
echo "not insreted";	
}
?>