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
					if($_FILES['zp']['error']===0){
						$new_name="upload/".$_FILES['zp']['name'];
						move_uploaded_file($_FILES['zp']['tmp_name'],$new_name);
					}
				include "connect.php";
				$sql="select * from film where filmID='$bh'";
				$result=mysqli_query($link,$sql);
				if(!$result){
					exit(mysqli_error($link));
				}else{
					$n=mysqli_num_rows($result);
					if($n!=0){
						echo "<script>alert('have the filmID');</script>";
					}else{
						$sql="insert into film values ('$bh','$mc','$NO','$dy','$new_name','$jj','$lb')";
						$result=mysqli_query($link,$sql);
						if($result){
							echo "<script>alert('insert succes');window.location='Administration.php';</script>";
						}else{
							echo "<script>alert('insert failure');window.location='Administration.php';</script>";
							echo mysqli_error($link);
						}
					}
				}
				mysqli_close($link);
			?>
		</body>
	</html>	