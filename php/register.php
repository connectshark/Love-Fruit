<?php
// 註冊 register
try {
    if ($_REQUEST["mem_id"] != '' || $_REQUEST["mem_email"] != '' || $_REQUEST["mem_psw"] != '') {
        require_once("connect-LoveFruitIce.php");
        $sql = "insert into member (mem_name,mem_id,mem_email,mem_psw) values (:mem_name,:mem_id,:mem_email,:mem_psw)";
        $member = $pdo->prepare($sql);
        $member->bindValue(":mem_name", $_REQUEST["mem_name"]);
        $member->bindValue(":mem_id", $_REQUEST["mem_id"]);
        $member->bindValue(":mem_email", $_REQUEST["mem_email"]);
        $member->bindValue(":mem_psw", $_REQUEST["mem_psw"]);
        $member->execute();
    }
} catch (PDOException $e) {
    echo "error";
}
