<?php
session_start();
$_SESSION["mem_no"] = 1;
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sql = "update member set mem_name=:name, email=:email, address=:address, phone=:phone where mem_no = :mem_no";
    $profileChange = $pdo->prepare($sql);
    $profileChange->bindValue(":name", $_POST["mem_name"]);
    $profileChange->bindValue(":email", $_POST["email"]);
    $profileChange->bindValue(":address", $_POST["address"]);
    $profileChange->bindValue(":phone", $_POST["phone"]);
    $profileChange->bindValue(":mem_no", $_SESSION["mem_no"]);
    $profileChange->execute();
    $profileChangeRow = $profileChange->fetch(PDO::FETCH_ASSOC);

    if($profileChangeRow.rowCount()==0){
        echo "erro";
    }else{
        echo json_encode($profileChangeRow);
    }
    
} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}



?>