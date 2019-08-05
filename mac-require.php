<?php
    $dsn = "mysql:host=localhost;port=3306;dbname=dd101g3;charset=utf8";
    $user = "dd101g3";
    $password = "dd101g3";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
    $pdo = new PDO($dsn, $user, $password, $options);
?>