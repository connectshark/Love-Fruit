<?php
session_start();
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlmem = "update member set mem_state= :mem_state where mem_no = :mem_no";
    $mem = $pdo->prepare($sqlmem);
    $mem->bindValue(":mem_no", $_REQUEST["mem_no"]);
    $mem->bindValue(":mem_state", $_REQUEST["mem_state"]);
    $mem->execute();

    header("location:backstage-member.php");

} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}

?>