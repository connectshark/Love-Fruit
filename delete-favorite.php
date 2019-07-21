<?php
$mem_no = 1;
$prod_no = $_REQUEST["prod_no"];
$errMsg ="";
try{
    require_once("connect-dd101g3.php");
    $sql = "delete from collection where mem_no = :mem_no  AND prod_no = :prod_no ";
        $collection = $pdo-> prepare($sql);
        $collection ->bindValue(":mem_no" ,$mem_no);
        $collection ->bindValue(":prod_no" , $prod_no);
        $collection ->execute();
}catch (PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
}
?>