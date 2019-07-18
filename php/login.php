<?php
session_start();
try {
    require_once("connect-LoveFruitIce.php");
    $sql = "select * from member where mem_id=:mem_id and mem_psw=:mem_psw";
    $member = $pdo->prepare($sql);
    $member->bindValue(":mem_id", $_REQUEST["mem_id"]);
    $member->bindValue(":mem_psw", $_REQUEST["mem_psw"]);
    $member->execute();

    if ($member->rowCount() == 0) { //查無此人, 帳密錯誤
        echo "1";
    } else { //登入成功
        //自資料庫中取回資料
        $memRow = $member->fetch(PDO::FETCH_ASSOC);
        //寫入SESSION
        $_SESSION["mem_no"] = $memRow["mem_no"];
        $_SESSION["mem_name"] = $memRow["mem_name"];
        $_SESSION["mem_id"] = $memRow["mem_id"];
        $_SESSION["email"] = $memRow["email"];

        //送出登入者的姓名資料
        echo $memRow["mem_id"];
    }
} catch (PDOException $e) {
    echo $e->getMessage();
    //echo "系統異常,請通知系統維護人員";	
}
