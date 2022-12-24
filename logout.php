<?php session_start();
	
unset($_SESSION["uid"]);
unset($_SESSION["unm"]);
unset($_SESSION["cart"]);

header("location:index.php");

?>