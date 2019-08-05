<?php
session_start();
$prod_no = $_REQUEST["prod_no"];
$errMsg ="";
    try{
        require_once("connect-dd101g3.php");
        $sql = "insert into collection (mem_no,prod_no) 
                                values (:mem_no,:prod_no)";
            $collection = $pdo-> prepare($sql);
            $collection ->bindValue(":mem_no" ,$_SESSION["mem_no"]);
            $collection ->bindValue(":prod_no" ,$prod_no);
            $collection ->execute();
            alert($_SESSION["mem_no"]);
    }catch (PDOException $e) {
        echo "錯誤 : ", $e -> getMessage(), "<br>";
        echo "行號 : ", $e -> getLine(), "<br>";
    }
// try{
//     require_once("connect-dd101g3.php");
//     $sql = "insert into collection (mem_no,prod_no) 
//                             values (:mem_no,:prod_no)";
//         $collection = $pdo-> prepare($sql);
//         $collection ->bindValue(":mem_no" ,$_SESSION["mem_no"]);
//         $collection ->bindValue(":prod_no" ,$prod_no);
//         $collection ->execute();
//         alert($_SESSION["mem_no"]);
// }catch (PDOException $e) {
//     echo "錯誤 : ", $e -> getMessage(), "<br>";
//     echo "行號 : ", $e -> getLine(), "<br>";
// }
?>