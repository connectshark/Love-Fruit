<?php 
session_start();

if(isset($_SESSION["cart"]) && count($_SESSION["cart"])!=0){
	echo json_encode($_SESSION["cart"]);
}else{
	echo "{}";
}
		
?>