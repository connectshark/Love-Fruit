<?php 
session_start();
$errMsg="";
$num = $_REQUEST['cfo_no'];
// echo $num;
try {
	require_once("connect-dd101g3.php");
	$sql = "SELECT cfs_good FROM confessions WHERE cfs_no = $num";
	$great = $pdo->query($sql);
	$row = $great -> fetchObject();
	$origin = $row->cfs_good;
	$origin++;
	$sql = "UPDATE confessions SET cfs_good = $origin WHERE cfs_no = $num";
	$setgreat = $pdo -> query($sql);
	echo $origin;
} catch (PDOException $e) {
	$errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
	$errMsg .= "行數:". $e->getLine()."<br>";
	echo $errMsg;
}
// if (isset($_SESSION['great']) === true) {
// 	$num = $_SESSION['great'];
// 	$num++;
// 	$_SESSION['great'] = $num;
// 	echo $_SESSION['great'];
// }else{
// 	$_SESSION['great'] = 1;
// 	echo $_SESSION['great'];
// }
 ?>