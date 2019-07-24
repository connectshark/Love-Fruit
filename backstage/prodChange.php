<?php
session_start();
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlprod = "update product set prod_name=:prod_name, prod_pic=:prod_pic, prod_desc=:prod_desc, prod_price=:prod_price, stage_no=:stage_no, type_no=:type_no, prod_state=:prod_state where prod_no = :prod_no";
    $prod = $pdo->prepare($sqlprod);
    $prod->bindValue(":prod_no", $_REQUEST["prod_no"]);
    $prod->bindValue(":prod_name", $_REQUEST["prod_name"]);
    $prod->bindValue(":prod_pic", $_REQUEST["prod_pic"]);
    $prod->bindValue(":prod_desc", $_REQUEST["prod_desc"]);
    $prod->bindValue(":prod_price", $_REQUEST["prod_price"]);
    $prod->bindValue(":stage_no", (int)$_REQUEST["stage_no"]);
    $prod->bindValue(":type_no", (int)$_REQUEST["type_no"]);
    $prod->bindValue(":prod_state", $_REQUEST["prod_state"]);
    $prod->execute();

    header("location:backstage-prod.php");

} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}

?>