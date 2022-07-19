<?php
	session_start();
	unset($_SESSION['userName']);
	session_destroy();
	echo "<script>window.location='guanli.php';</script>";
?>