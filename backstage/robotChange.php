<?php
session_start();
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlrobot = "update robot set keyword= :keyword,answer= :answer where qus_no = :qus_no";
    $robot = $pdo->prepare($sqlrobot);
    $robot->bindValue(":qus_no", $_REQUEST["qus_no"]);
    $robot->bindValue(":keyword", $_REQUEST["keyword"]);
    $robot->bindValue(":answer", $_REQUEST["answer"]);
    $robot->execute();

    header("location:backstage-robot.php");

} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}

?>