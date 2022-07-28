<?php
	header("Location: index.php");

	$cor = $_POST['corSelect'];
	
	setcookie('corCookie',$cor, time()+300);
?>