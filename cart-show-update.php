<?php
session_start();
$prod_no = $_REQUEST["prod_no"];
if($_REQUEST["qty"] != 0){ //數量不為0, 直接改
    $_SESSION["cart"][$prod_no]=array("prod_name"=>$_REQUEST["prod_name"],"prod_price"=>$_REQUEST["prod_price"],"qty"=>$_REQUEST["qty"]);
    // $_SESSION["cart"][$prod_no]=$_REQUEST["qty"]);
    // $_SESSION[$prod_no]["qty"]=$_REQUEST["qty"];	
}

//將購物車回傳
if(isset($_SESSION["cart"])==false){
	echo "{}";
}else{
	echo json_encode($_SESSION["cart"]);	
}

?>
