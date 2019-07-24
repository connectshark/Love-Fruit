<?php 
session_start();
$errMsg = "";
try{

    require_once("connect-dd101g3.php");
    $sql = "update course_reservation set res_state='0' where mem_no=:mem_no and res_no=:res_no";
    $cancelCollect= $pdo->prepare($sql);
    $cancelCollect->bindValue(":mem_no",$_SESSION["mem_no"]);
    $cancelCollect->bindValue(":res_no",$_POST["res_no"]);
    // $cancelCollect->bindValue(":res_state","0");
    $cancelCollect->execute();
}catch(PDOException $e){
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}
?>