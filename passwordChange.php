<?php
session_start();
// $_SESSION["mem_no"] = 1;
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sql = "update member set mem_psw = :mem_psw where mem_no = :mem_no";
    $profileChange = $pdo->prepare($sql);
    $profileChange->bindValue(":mem_psw", $_POST["mem_psw"]);
    $profileChange->bindValue(":mem_no", $_SESSION["mem_no"]);
    $profileChange->execute();
    
} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}



?>