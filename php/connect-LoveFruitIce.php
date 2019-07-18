<?php
$dsn = "mysql:host=127.0.0.1;port=8080;dbname=dd101g3;charset=utf8";
$user = "root";
$password = "";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
$pdo = new PDO($dsn, $user, $password, $options);
