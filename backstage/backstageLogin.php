<?php
session_start();
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sql = "select * from employee where emp_id = :emp_id and emp_psw = :emp_psw ";
    $magLogin = $pdo->prepare($sql);
    $magLogin->bindValue(":emp_id", $_POST["emp_id"]);
    $magLogin->bindValue(":emp_psw", $_POST["emp_psw"]);
    $magLogin->execute();
    $magRow = $magLogin->fetch(PDO::FETCH_ASSOC);
    if ($magLogin->rowCount() == 0) {
        echo "error";
    } else {
        $_SESSION["emp_id"] = $magRow["emp_id"];
        $_SESSION["emp_no"] = $magRow["emp_no"];
        $_SESSION["emp_name"] = $magRow["emp_name"];
    }
} catch (PDOException $e) {
    $errMsg .= "錯誤 : " . $e->getMessage() . "<br>";
    $errMsg .= "行號 : " . $e->getLine() . "<br>";
    echo $errMsg;
}
