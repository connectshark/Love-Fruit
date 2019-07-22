<?php
session_start();
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlfruit = "update fruit_base set fruit_name=:fruit_name ,fruit_price=:fruit_price,fruit_sour=:fruit_sour,fruit_sweet=:fruit_sweet,fruit_bitter=:fruit_bitter, fruit_state= :fruit_state where fruit_no = :fruit_no";
    $fruit = $pdo->prepare($sqlfruit);
    $fruit->bindValue(":fruit_no", $_REQUEST["fruit_no"]);
    $fruit->bindValue(":fruit_name", $_REQUEST["fruit_name"]);
    $fruit->bindValue(":fruit_price", $_REQUEST["fruit_price"]);
    $fruit->bindValue(":fruit_sour", $_REQUEST["fruit_sour"]);
    $fruit->bindValue(":fruit_sweet", $_REQUEST["fruit_sweet"]);
    $fruit->bindValue(":fruit_bitter", $_REQUEST["fruit_bitter"]);
    $fruit->bindValue(":fruit_state", $_REQUEST["fruit_state"]);
    $fruit->execute();

    header("location:backstage-cto.php");

} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}

?>