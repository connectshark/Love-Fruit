<?php 
ob_start();
session_start();
// $prod_no = $_SESSION["prod_no"];
$total = 0;
foreach($_SESSION['cart'] as $i=>$value){
$total += $_SESSION["cart"][$i]["prod_price"]*$_SESSION["cart"][$i]["qty"];}
    
?>

<?php
$errMsg = "";
try {
	require_once("connect-dd101g3.php");
    $pdo->beginTransaction();
    $sql = "insert into prod_order (mem_no,order_total, order_creat_date, order_state,order_name,order_add,order_phone,order_pay,order_ship)
                             values(:mem_no,:order_total, NOW()           ,:order_state,:order_name,:order_add,:order_phone,:order_pay,:order_ship)";  
    $prod_order = $pdo->prepare($sql);  
    $prod_order->bindValue(":mem_no",$_SESSION["mem_no"]);
    $prod_order->bindValue(":order_total",$total);
    $prod_order->bindValue(":order_state","0");
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
            $order_item->bindValue(":prod_no",$prod_no);
            $order_item->bindValue(":cto_no",null);
            $order_item->bindValue(":item_qty", $cartItem["qty"]);
            $order_item->execute();
		}
		$pdo->commit(); //確認交易
        unset($_SESSION["cart"]);
        echo "下單成功，您的訂單編號為 $order_no~~";
        
    
} catch (PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
}

?>



