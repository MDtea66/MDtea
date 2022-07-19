<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>
			form{
				height: 700px;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			h1{
				position: absolute;
				top: 5%;
			}
			table{
				border: 5px solid orange;
				width: 500px;
				height: 500px;
				text-align: center;
			}
			td{
				font-weight: bold;
			}
			.bh{
				width: 200px;
				height: 30px;
				border: 3px solid orange;
			}
			.an2{
				width: 150px;
				height: 30px;
				background-color: orange;
				border: none;
				border-radius: 10px;
				color: white;
				font-size: 15px;
			}
		</style>
		</head>
		<body>
			<?php
			if(!isset($_SESSION['userName'])){
						echo "<script>alert('未登录，无法操作');window.location='denglu.html';</script>";
						exit();
					}
			?>
	<form action="insertFenzi.php" method="post" >
		<h1>增加新分类</h1>
		<table>
			<tr>
				<td>电影类型号</td>
				<td><input class="bh" type="text" name="bh" id="bh" /></td>
			</tr>
			<tr>
				<td>电影类别</td>
				<td>
					<input class="bh" type="text" name="lb" />
				</td>
			</tr>
			<tr><td><input class="an2" type="submit" value="增加"/></td></tr>
		</table>
	</form>
	
	</body>
</html>	