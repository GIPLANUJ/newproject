<?php
include 'connection.php';
$id = $_GET['id'];
$q = " DELETE FROM `resister` where id = $id ";
mysqli_query($conn,$q);
header('location:veiw_record.php');
?>

