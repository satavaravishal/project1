<?php session_start();

	require_once("classes/cart_class.php");
	
	if(
		! isset($_GET["id"]) ||
		! isset($_GET["name"]) ||
		! isset($_GET["cat"]) ||
		! isset($_GET["rate"]) ||
		! isset($_GET["qty"])
	) { header("location: index.php"); }
	
	$c = new cart();
	$c->addItem($_GET["id"],$_GET["name"],$_GET["cat"],$_GET["rate"],$_GET["qty"]);
	
	header("location: details.php?did=".$_GET["id"]);
?>