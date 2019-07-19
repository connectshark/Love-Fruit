<?php 
ob_start();
session_start();
$prod_no = $_SESSION["prod_no"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>order-insert</title>
</head>
<body>
    <?php
$errMsg = "";
try {
	require_once("connect-dd101g3.php");
    $pdo->beginTransaction();
    $sql = "insert into prod_order (order_no,mem_no,order_total,   order_creat_date,order_cancle_date,order_state,order_name,order_add,order_phone,order_pay,order_ship)
                             values(NULL ,   :mem_no,:order_total, NOW(),           :order_cancle_date,:order_state,:order_name,:order_add,:order_phone,:order_pay,:order_ship)";  
    $prod_order = $pdo->prepare($sql);
    $prod_order->bindValue(":mem_no","001");
    $prod_order->bindValue(":order_total",496);
    $prod_order->bindValue(":order_cancle_date","2019/10/28");
    $prod_order->bindValue(":order_state","1");
    $prod_order->bindValue(":order_name", $_REQUEST["name"]);
    $prod_order->bindValue(":order_add", $_REQUEST["add"]);
    $prod_order->bindValue(":order_phone", $_REQUEST["phone"]);
    $prod_order->bindValue(":order_pay", $_REQUEST["pay"]);
    $prod_order->bindValue(":order_ship", $_REQUEST["transport"]);
    $prod_order->execute();




        $order_no = $pdo->lastInsertId();
        $sql = "insert into order_item (item_no, order_no, prod_no, cto_no, item_qty) 
                                values (NULL, $order_no ,:prod_no, :cto_no, :item_qty)";
		$order_item = $pdo->prepare( $sql );
		foreach( $_SESSION["cart"] as $prod_no => $cartItem ){
            $order_item->bindValue(":prod_no", $prod_no);
            $order_item->bindValue(":cto_no",null);
            $order_item->bindValue(":item_qty", $cartItem["qty"]);
			$order_item->execute();
		}
		$pdo->commit(); //確認交易
        unset($_SESSION["cart"]);
		echo "下單成功，您的訂單編號為 $order_no<br>~~";
        // if(isset($_SESSION["cart"])==false){
        //     echo "{}";
        // }else{
        //     echo json_encode($_SESSION["cart"]);	
        // }









} catch (PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
}




?>
</body>
</html>



