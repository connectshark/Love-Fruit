<?php
// 註冊 register
try {
    if ($_REQUEST["mem_id"] != '' || $_REQUEST["email"] != '' || $_REQUEST["mem_psw"] != '') {
        require_once("connect-LoveFruitIce.php");
        $sql = "insert into member (mem_name,mem_id,email,mem_psw) values (:mem_name,:mem_id,:email,:mem_psw)";
        $member = $pdo->prepare($sql);
        $member->bindValue(":mem_name", $_REQUEST["mem_name"]);
        $member->bindValue(":mem_id", $_REQUEST["mem_id"]);
        $member->bindValue(":mem_psw", $_REQUEST["mem_psw"]);
        $member->bindValue(":email", $_REQUEST["email"]);
        $member->execute();
    } else {
        echo "error";
    }
} catch (PDOException $e) {
    echo "error";
}
