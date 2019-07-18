<?php
// session_start();
// $memId = $_REQUEST["memId"];
// $memPsw = $_REQUEST["memPsw"];

$errMsg = "";
try {
    // 將dbname 改成自己的資料表名稱
    require_once("connect-LoveFruitIce.php");
    if ($_REQUEST["type"] == "text") { // 如果前端送來的 type 等於 text 就執行以下 ↓↓↓
        // select 你想選擇的欄位名 from 資料表名 where LOCATE(關鍵字, :輸入框)>0
        $sql = "select keyword, answer from robot where LOCATE(keyword, :message)>0";
        $qa = $pdo->prepare($sql);
        // 將前端輸入框的訊息送進 DB, 如果有相對的值就會抓到
        $qa->bindValue(":message", $_REQUEST["message"]);
    } else { //tag使用標籤來查
        $sql = "select * from robot where keyword = :keyword";
        $qa = $pdo->prepare($sql);
        $qa->bindValue(":keyword", $_REQUEST["keyword"]);
    }

    $qa->execute();
    if ($qa->rowCount() == 0) { //没有符合的關鍵字
        echo "{}";
    } else {
        $qaRow = $qa->fetch(PDO::FETCH_ASSOC);
        echo json_encode($qaRow); //回應前端的Ajax
    }
} catch (PDOException $e) {
    $errMsg .=  $e->getMessage() . "<br>";
    $errMsg .=  $e->getLine() . "<br>";
}
