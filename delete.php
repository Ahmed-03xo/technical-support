<?php
$id=$_GET['id'];
?>

<?php

include"conn.php";
$delete=mysqli_query($con,"delete data11 from data11 where id=$id");
if($delete){
	header("Location:Requests.php");
}
else{
	die("error".mysqli_error($con));
}



?>
