<?php
include "connection.php";

$mobile=$_POST["mobile"];
//insert query
//$sql = "INSERT INTO `contact` (`id`, `mobile`) VALUES (NULL,$mobile')"
//$sql="insert into contact mobile values'$mobile'";
$sql="INSERT INTO contact(mobile) VALUES ('$mobile')";
$result=mysqli_query($conn,$sql); 

//check condition

if($result){
echo "Data inserted sucssesfully";	
}else{
echo "Not inserted";	
}
?>