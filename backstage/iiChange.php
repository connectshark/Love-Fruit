<?php
session_start();
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlii = "update ingredients set ii_name=:ii_name, ii_pic=:ii_pic, ii_price=:ii_price, ii_sour=:ii_sour, ii_sweet=:ii_sweet, ii_bitter=:ii_bitter, ii_state= :ii_state where ii_no = :ii_no";
    $ii = $pdo->prepare($sqlii);
    $ii->bindValue(":ii_no", $_REQUEST["ii_no"]);
    $ii->bindValue(":ii_name", $_REQUEST["ii_name"]);
    $ii->bindValue(":ii_price", $_REQUEST["ii_price"]);
    $ii->bindValue(":ii_pic", $_REQUEST["ii_pic"]);
    $ii->bindValue(":ii_sour", $_REQUEST["ii_sour"]);
    $ii->bindValue(":ii_sweet", $_REQUEST["ii_sweet"]);
    $ii->bindValue(":ii_bitter", $_REQUEST["ii_bitter"]);
    $ii->bindValue(":ii_state", $_REQUEST["ii_state"]);
    $ii->execute();

    header("location:backstage-cto.php");

} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}

?>