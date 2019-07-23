<?php
session_start();
$errMsg = "";
echo "ghk4";
try {
    require_once("connect-dd101g3.php");
    $sqlres = "update course_reservation set res_state= :res_state where res_no = :res_no";
    $res = $pdo->prepare($sqlres);
    $res->bindValue(":res_no", $_REQUEST["res_no"]);
    $res->bindValue(":res_state", $_REQUEST["res_state"]);
    $res->execute();

    header("location:backstage-course.php");

} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}

?>