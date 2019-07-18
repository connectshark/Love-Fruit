<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>order-insert</title>
</head>
<body>
    <?php
$jsonStr = $_REQUEST["jsonStr"];
$memRow = json_encode($jsonStr);

try{
    require_once("connect-dd101g3.php");
    $pdo->beginTransaction();
    $sql = "insert into prod_prder values ";
    $prod_order = $pdo -> prepare($sql);
    

}catch(PDOException $e){
    echo $e->getMessage();

}




?>
</body>
</html>



