<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

<?php
	$bh=$_POST['bh'];
	$lb=$_POST['lb'];
	include "connect.php";
	$sql="update class set classNO='$bh',filmClass='$lb' where classNO='$bh'";
	$result=mysqli_query($link,$sql);
	if($result){
		echo "<script>alert('修改成功');window.location='classiFication.php';</script>";
	}else{
		echo mysqli_error($link);
		exit;
	}
?>
	</body>
</html>