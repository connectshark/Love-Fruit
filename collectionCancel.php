<?php 
session_start();
$_SESSION["mem_no"] = 1;
$errMsg = "";
try{

    require_once("connect-dd101g3.php");
    $sql = "delete from collection where mem_no=:mem_no and prod_no=:prod_no";
    $cancelCollect= $pdo->prepare($sql);
    $cancelCollect->bindValue(":mem_no",$_SESSION["mem_no"]);
    $cancelCollect->bindValue(":prod_no",$_POST["prod_no"]);
    $cancelCollect->execute();
    echo "OK";
}catch(PDOException $e){
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}
?>