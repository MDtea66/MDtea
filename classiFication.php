<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>
			body{
				text-align: center;
			}
			table{
				width: 60%;
				margin: 50px auto;
				border-collapse: collapse;
				border: 5px solid orange;
			}
			.bt{
				color: orange;
				font-weight: bold;
			}
			tr{
				height: 50px;
			}
			a{
				text-decoration: none;
				color: red;
			}
		</style>
		</head>
		<body>
			<?php
				if(!isset($_SESSION['userName'])){
					echo "<script>alert('未登录，无法操作');window.location='denglu.html';</script>";
					exit();
				}
				include "connect.php";
				$sql="select * from class";
				$result=mysqli_query($link,$sql);
				echo "<h1>电影分类</h1>";
				echo "<a class='bt' href='insertFen.php'>增加新分类</a>";
				while($row=mysqli_fetch_assoc($result)){
					echo "<table>
							<tr>
							<td><a href='deletfen.php?id={$row['classNO']}'><h5>删除</h5></a></td>
							<td><a href='updateFen.php?id={$row['classNO']}'><h5>修改</h5></a></td>
							<td>
								分类编号：{$row['classNO']}<br>
							</td>
							<td>分类名字：{$row['filmClass']}</td>
							
					</tr>";
				}
			?>
		</body>
	</html>	