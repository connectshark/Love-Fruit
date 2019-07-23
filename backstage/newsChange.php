<?php
session_start();
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlnews = "update news set news_class= :news_class,news_state= :news_state where news_no = :news_no";
    $news = $pdo->prepare($sqlnews);
    $news->bindValue(":news_class", $_REQUEST["news_class"]);
    $news->bindValue(":news_state", $_REQUEST["news_state"]);
    $news->bindValue(":news_no", $_REQUEST["news_no"]);
    $news->execute();

    header("location:backstage-news.php");

} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}

?>