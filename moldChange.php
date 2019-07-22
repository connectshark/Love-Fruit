<?php
session_start();
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlmold = "update mold set mold_name=:mold_name ,mold_pic=:mold_pic, mold_state= :mold_state where mold_no = :mold_no";
    $mold = $pdo->prepare($sqlmold);
    $mold->bindValue(":mold_no", $_REQUEST["mold_no"]);
    $mold->bindValue(":mold_name", $_REQUEST["mold_name"]);
    $mold->bindValue(":mold_pic", $_REQUEST["mold_pic"]);
    $mold->bindValue(":mold_state", $_REQUEST["mold_state"]);
    $mold->execute();

    header("location:backstage-cto.php");

} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}

?>