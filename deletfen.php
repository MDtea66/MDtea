<?php
	$id=$_GET['id'];
	include "connect.php";
	$sql="delete from class where classNO={$id}";
	$result=mysqli_query($link,$sql);
	echo "<script>window.location='classiFication.php';</script>";
?>