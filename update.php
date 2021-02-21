<?php
include("connection.php");
error_reporting(0);
$id = $_GET['id'];
$us = $_GET['username'];
$em = $_GET['email'];
$ph = $_GET['phone'];
$co = $_GET['course'];
?>
<html>
<head>
<title>hey</title>
<style>
table{
	color:white;
	border-radius:20px;
}
#button{
background-color:green;
color:white;
height:32px;
width:145px;
border-radius:25px;
font-size:16px;	
}
body{
background:linear-gradient(red,blue);
	
}
</style>
</head>
<body>
<br><br><br><br><br><br><br>
<form action="update.php"method="get">
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<td>id</td>
<td><input type="text" value="<?php echo "$id"
?>"name="id"</td>
</tr>
<tr>
<td>username</td>
<td><input type="text" value="<?php echo "$us"
?>"name="username"</td>
</tr>
<tr>
<td>email</td>
<td><input type="text" value="<?php echo "$em"
?>" name="email"></td>
</tr>
<tr>
<td>phone</td>
<td><input type="text" value="<?php echo "$ph"
?>" name="phone"></td>
</tr>
<tr>
<td>course</td>
<td><input type="text" value="<?php echo "$co"
?>" name="course"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" id="button"name="submit"value="Update detail"></td>
</tr>
</form>
</body>
</html>
<?php
if($_GET['submit'])
{	
$i = $_GET['id'];
$u = $_GET['username'];
$e = $_GET['email'];
$p = $_GET['phone'];
$c = $_GET['course'];	
$q="UPDATE resister SET id='$i',username='$u',email='$e',phone='$p',course='$c' WHERE id='$i'";
$data = mysqli_query($conn,$q);
if($data)
{
	echo"<script>alert('record updated')</script>";
echo"<script>location.replace('veiw_record.php')</script>";
}
else
{
	echo"failed to update record";
	echo"<script>location.replace('update.php')</script>";

}
}
?>