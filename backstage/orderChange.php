<?php
session_start();
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlmem = "update prod_order set order_state= :order_state where order_no = :order_no";
    $mem = $pdo->prepare($sqlmem);
    $mem->bindValue(":order_no", $_REQUEST["order_no"]);
    $mem->bindValue(":order_state", $_REQUEST["order_state"]);
    $mem->execute();

    header("location:backstage-order.php");

} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}

?>