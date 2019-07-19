<?php 
$errMsg="";
session_start();
try {
    require_once("connect-dd101g3.php");
    // 接前一頁資料
    $memNo = 2;//session撈
    $texture = $_REQUEST['texture'];
    $fruite1 = $_REQUEST['fruite'][0];
    $fruite2 = $_REQUEST['fruite'][1];
    $slice = $_REQUEST['fruite-slice'];
    $price = $_REQUEST['price'];
    $parse = $_REQUEST['parse'];
    $sql = "SELECT mem_no FROM customize WHERE mem_no = $memNo";
    $search = $pdo->query($sql);
    $row = $search->fetchObject();
    if ($row->mem_no) {
    	$usql="";
    	$custom = $pdo->prepare($sql);
    	$custom ->bindValue();
    	$custom ->bindValue();
    	$custom ->bindValue();
    	$custom -> execute();
    }else{
    	$isql="";
    	$custom = $pdo->prepare($sql);
    	$custom ->bindValue();
    	$custom ->bindValue();
    	$custom ->bindValue();
    	$custom -> execute();
    }
    echo $row->mem_no;

    $texture = $_REQUEST['texture'];
    $fruite1 = $_REQUEST['fruite'][0];
    $fruite2 = $_REQUEST['fruite'][1];
    $slice = $_REQUEST['fruite-slice'];
    $price = $_REQUEST['price'];
    $parse = $_REQUEST['parse'];
} catch (PDOException $e) {
    $errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
    $errMsg .= "行數:". $e->getLine()."<br>";
    echo $errMsg;
}

 ?>