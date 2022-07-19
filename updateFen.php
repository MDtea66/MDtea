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
	$id=$_GET['id'];
	include "connect.php";
	$sql="select * from class where classNO={$id}";
	$result=mysqli_query($link,$sql);
	if(!$result){
		echo mysqli_error($link);
		exit();
	}
	$row=mysqli_fetch_assoc($result);
?>
	<form action="updateFenzi.php" method="post">
		<h1>分类信息修改</h1>
		<table>
			<tr>
				<td>分类编号</td>
				<td><input class="bh" type="text" name="bh" value="<?php echo $id; ?>"/></td>
			</tr>
			<tr>
				<td>电影类别</td>
				<td>
					<select class="bh" name="lb">
						<?php
							$sql="select * from class";
							$result=mysqli_query($link,$sql);
							while($row_class=mysqli_fetch_assoc($result)){
								if($row['classNO']===$row_class['classNO']){
									echo "<option value='{$row_class['filmClass']}' selected>{$row_class['filmClass']}</option>";
								}else{
									echo "<option value='{$row_class['filmClass']}'>{$row_class['filmClass']}</option>";
								}
							}
						?>
					</select>
				</td>
			</tr>
			<tr><td><input class="an2" type="submit" value="修改"/></td></tr>
		</table>
	</form>
	
	</body>
</html>	