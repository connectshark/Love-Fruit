<?php
session_start();
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlemp = "update employee set emp_permission= :emp_permission, emp_state= :emp_state where emp_no = :emp_no";
    $emp = $pdo->prepare($sqlemp);
    $emp->bindValue(":emp_no", $_REQUEST["emp_no"]);
    $emp->bindValue(":emp_permission", $_REQUEST["emp_permission"]);
    $emp->bindValue(":emp_state", $_REQUEST["emp_state"]);
    $emp->execute();

    header("location:backstage-member.php");

} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}

?>