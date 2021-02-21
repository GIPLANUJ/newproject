
<html>
<head>
<title></title>
<style>
<!----link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"-->

.box{	

}
.table{
background-color:black;
border:solid 2px;
margin-top:10px;
}
 th{
background-color:#90B14F;
border:solid 1px;	
 }
td{
background-color:white;
border:solid 1px;	
}
</style>
</head>
<body bgcolor="#807A7F">
<center>
<div class="box">
<table class="table table-hover" border="0px" height="400px" width="800px" >
<tr>
<th>Id</th>
<th>Username</th>
<th>Email</th>
<th>Phone</th>
<th>Course</th>
<th colspan="2">Opration</th>
</tr>
<?php
include"connection.php";
$sql = "SELECT *FROM `resister`";
$result = $conn->query($sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_array($result))
{
?>                                                           
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['course'];?></td>
<td><a href='update.php?<?php echo "id=$row[id] & username=$row[username]& email=$row[email]& phone=$row[phone]& course=$row[course]";?>'>Edit/Update</a></td>
<td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
</tr>
<?php
}
}
?>
</center>
</table>
</div>
</body>
</html>
