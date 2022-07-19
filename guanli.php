<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
			$userName=$_POST['user'];
			$Password=$_POST['pass'];
			include "connect.php";
			$sql="select * from admin where User='$userName' and Password = '$Password' ";
			$result=mysqli_query($link,$sql);
			$n=mysqli_num_rows($result);
			if($n>0){
				$_SESSION['userName']=$userName;
				echo "<script>alert('登录成功');window.location='guanlicaozuo.php';</script>";
			}else{
				echo "<script>alert('账号密码错误');window.location='denglu.html';</script>";
			}
		?>
	</body>
	</html>