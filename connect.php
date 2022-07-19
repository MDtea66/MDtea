<?php
	$link=mysqli_connect("localhost","root","");
	if(!$link){
		exit(mysqli_connect_error());
	}
	if(!mysqli_select_db($link,'myfilm')){
		
		exit(mysqli_error($link)); 
	}else{
		// echo "<script>alert('连接成功');</script>";
	}
	mysqli_set_charset($link,'utf8');
?>