<?php 
session_start();
$memNo = $_SESSION['mem_no'];
$errMsg="";
try {
    require_once("connect-dd101g3.php");
	$sql = "SELECT * FROM customize WHERE mem_no = $memNo";
	$check = $pdo->query($sql);
	$row = $check->rowCount();
	echo $row;
} catch (PDOException $e) {
	$errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
	$errMsg .= "行數:". $e->getLine()."<br>";
	echo $errMsg;
}
 ?>