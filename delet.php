<?php
	$id=$_GET['id'];
	include "connect.php";
	$sql="delete from film where filmID={$id}";
	$result=mysqli_query($link,$sql);
	echo "<script>window.location='Administration.php';</script>";
?>