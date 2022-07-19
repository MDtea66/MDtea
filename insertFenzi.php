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
				$sql="select * from class where classNO='$bh'";
				$result=mysqli_query($link,$sql);
				if(!$result){
					exit(mysqli_error($link));
				}
						$sql="insert into class values ('$bh','$lb')";
						$result=mysqli_query($link,$sql);
						if($result){
							echo "<script>alert('insert succes');window.location='classiFication.php';</script>";
						}else{
							echo "<script>alert('insert failure');window.location='classiFication.php';</script>";
							echo mysqli_error($link);
						}
					
				
				mysqli_close($link);
			?>
		</body>
	</html>	