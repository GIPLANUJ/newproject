<?php
$server="localhost";
$username="root";
$password="root";
$database="paramount";

//create connection

$conn = mysqli_connect($server,$username,$password,$database);

//check the connection

if(!$conn){

die("connection incorect".mysqli_connect_error());
}
//echo "conection sucssesful";
?>