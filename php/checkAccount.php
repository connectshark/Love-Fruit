<?php
session_start();
try {
    require_once("connect-LoveFruitIce.php");
    $sql = "select * from member where mem_id=:mem_id";
    $member = $pdo->prepare($sql);
    $member->bindValue(":mem_id", $_REQUEST["mem_id"]);
    $member->execute();

    if ($member->rowCount() == 0) { //查無此人, 帳密錯誤
        echo "ok";
    } else { //帳號有重複
        echo "error";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
    //echo "系統異常,請通知系統維護人員";	
}
