<?php 
session_start();
$prod_no = $_REQUEST["prod_no"];

unset($_SESSION["cart"][$prod_no]);
if(isset($_SESSION["cart"])==false){
	echo "{}";
}else{
	echo json_encode($_SESSION["cart"]);	
}
?>