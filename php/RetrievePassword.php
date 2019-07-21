<?php
session_start();
try {
    require_once("connect-LoveFruitIce.php");
    $sql = "select * from member where mem_id=:mem_id and email=:email";
    $member = $pdo->prepare($sql);
    $member->bindValue(":mem_id", $_REQUEST["mem_id"]);
    $member->bindValue(":email", $_REQUEST["email"]);
    $member->execute();

    if ($member->rowCount() == 0) { //查無此人, 帳密錯誤
        echo "error";
    } else { //登入成功
        //自資料庫中取回資料
        $memRow = $member->fetch(PDO::FETCH_ASSOC);
        //寫入SESSION
        $_SESSION["mem_psw"] = $memRow["mem_psw"];

        //送出登入者的姓名資料
        echo $memRow["mem_psw"];
    }
} catch (PDOException $e) {
    echo $e->getMessage();
    //echo "系統異常,請通知系統維護人員";	
}
