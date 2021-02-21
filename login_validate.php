<?php
$emal=$_POST['email'];
$pass=$_POST['phone'];
//echo $ema;
include"connection.php";
$sql="select *from resister where email='$emal' AND phone='$pass'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row['email'] == $emal && $row['phone'] == $pass)
{
echo"<script>alert('login success')</script>";
echo"<script>location.replace('veiw_record.php')</script>";
}
else
{
echo"<script>alert('wrong password')</script>";
echo"<script>location.replace('login.php')</script>";
}
?>