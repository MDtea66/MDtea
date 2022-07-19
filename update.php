<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

<?php
	$bh=$_POST['bh'];
	$mc=$_POST['mc'];
	$NO=$_POST['NO'];
	$dy=$_POST['dy'];
	$jj=$_POST['jj'];
	$lb=$_POST['lb'];
	if(isset($_FILES['zp'])){
		if($_FILES['zp']['error']===0){
			$new_name="upload/".$_FILES['zp']['name'];
			move_uploaded_file($_FILES['zp']['tmp_name'],$new_name);
		}else{
			$new_name="";
		}
	}else{
		$new_name="";
	}
	include "connect.php";
	if($new_name!=""){

		$sql="update film set filmName='$mc',classNO='$NO',filmAuthor='$dy',
		filmJianjie='$jj',filmClass='$lb',Photo='$new_name' where filmID='$bh'";
	}else{
		$sql="update film set filmName='$mc',classNO='$NO',
		filmAuthor='$dy',filmJianjie='$jj',filmClass='$lb' where filmID='$bh'";
	}
	$result=mysqli_query($link,$sql);
	if($result){
		echo "<script>alert('修改成功');window.location='Administration.php';</script>";
	}else{
		echo mysqli_error($link);
		exit;
	}
?>
	</body>
</html>