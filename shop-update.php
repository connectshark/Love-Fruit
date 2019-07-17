<?php 
session_start();
$prod_no = $_REQUEST["prod_no"];
//商品累加
if(isset($_SESSION["cart"][$prod_no])){
	$new_qty = $_SESSION["cart"][$prod_no]["qty"]+(int)$_REQUEST["qty"];
}else{
	$new_qty = (int)$_REQUEST["qty"];
}



if($_REQUEST["qty"] != 0){ //數量不為0, 直接改
	$_SESSION["cart"][$prod_no]=array("prod_name"=>$_REQUEST["prod_name"],"prod_price"=>$_REQUEST["prod_price"],"prod_pic"=>$_REQUEST["prod_pic"],"qty"=>$new_qty);
}else{//數量若為0, 則將其從購物車中移除
	if(isset($_SESSION["cart"]) && isset($_SESSION["cart"][$prod_no])){
		unset($_SESSION["cart"][$prod_no]);
	}
}

//將購物車回傳
if(isset($_SESSION["cart"])==false){
	echo "{}";
}else{
	echo json_encode($_SESSION["cart"]);	
}
?>