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
				display: flex;
				flex-flow: row wrap;
				background: url(upload/bizhi.jpg) no-repeat ;
				color: white;
				background-position:center ;
				background-size: cover;
				
			}
			h1{
				height: 50px;
				position: absolute;
				left: 45%;
				top: -1%;
			}
			.bt{
				position: absolute;
				top: 4%;
				left: 85%;
				color: orange;
				font-weight: bold;
			}
			a{
				text-decoration: none;
				color: red;
			}
			table{
				width: 50%;
				height: 350px;
			}
			tr{
				margin-left: 30px;
				margin-top: 100px;
				width: 600px;
				height: 350px;
				display: flex;
				flex-flow: row;				
			}
			td{
				margin-left: 20px;				
				border-bottom: 1px solid white;
				
			}
			td a{
				margin-top: 60px;
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
			$sql="select * from film";
			$result=mysqli_query($link,$sql);
			echo "<h1>系列电影</h1>";
			echo "<a class='bt' href='insertNew.php'>增加新电影</a>";
			while($row=mysqli_fetch_assoc($result)){
				echo "<table><tr><td><img src='{$row['Photo']}' width='200px'/></td>
						<td width='400px'><h3>电影名称：{$row['filmName']}</h3><br>
							电影编号：{$row['filmID']}<br>
							电影类型号：{$row['classNO']}<br>
							电影简介：{$row['filmJianjie']}<br>
							导演：{$row['filmAuthor']}<br>
							类型：{$row['filmClass']}<br>
							<a href='delet.php?id={$row['filmID']}'><h5>删除</h5></a>
							<a href='updateNew.php?id={$row['filmID']}'><h5>修改</h5></a>
						</td>
				</tr>";
			}
			mysqli_close($link);
		?>
	</body>
</html>	