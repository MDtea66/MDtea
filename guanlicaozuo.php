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
				height: 600px;
				justify-content: center;
				align-items: center;
				flex-flow: column;
				font-weight: bold;
				background: url(upload/bizhi3.jpg) no-repeat;
				background-size: cover;
				color: white;
			}
			a{
				text-decoration: none;
				color: white;
			}
			.t1{
				color: red;
				font-size: 15px;
				position: absolute;
				left: 56%;
				top: 31%;
			}
			ul{
				display: flex;
				flex-flow: column;
				height: 100px;
				width: 250px;
				list-style-type: none;
				text-align: center;
			}
			h1{
				color: orange;
			}
			.s1{
				color: red;
			}
			.a1{
				height: 50px;
				margin-left: -40px;
				display: flex;
				align-items: center;
				justify-content: center;
				background-color: orange;
				border-radius: 5px;
			}
			.a2{
				height: 50px;
				margin-left: -40px;
				display: flex;
				align-items: center;
				justify-content: center;
				background-color: orange;
				margin-top: 15px;
				border-radius: 5px;
			}
		</style>
	</head>
	<body>
		<?php
			if(isset($_SESSION['userName'])){
				echo "欢迎".$_SESSION['userName']."来到管理页面";
				echo "<a class='t1' href='zhuxiao.php'>注销</a>";
				echo "<ul>
						<li class='a1'><a href='Administration.php'>电影信息管理</a></li>
						<li class='a2'><a href='classiFication.php'>电影分类管理</a></li>
				</ul>";
			}else{
				echo "<h1>当前为后台管理系统，无权访问，请<a class='s1' href='denglu.html'>登录</a></h1>";
			}
		?>
	</body>
</html>	