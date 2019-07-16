<?php 
    try {
        $dsn="mysql:host=localhost;port=3306;dbname=dd101g3;charset=utf8";
        $user = "root";
        $psw = "";
        $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
        $pdo = new PDO( $dsn , $user , $psw, $options );
        $sql = "insert course_msg set msg_no = :msgNo, mem_no = :memNo , course_class_no = :courseClassNo, msg_title = :msgTitle , msg_date = :msgDate, msg_content = :msgContent,";
        $memNo = $_REQUEST['memNo'];//session抓
        $msg_date = $_REQUEST['msgDate'];
        $msg_title  = $_REQUEST['msgTitle'];
        $msg_content = $_REQUEST['msgContent'];
        $courseMsg = $pdo->prepare($sql);
        $courseMsg->bindValue(':memNo',$memNo);
        $courseMsg->bindValue(':msgDate',$msgDate);
        $courseMsg->bindValue(':msgTitle',$msgTitle);
        $courseMsg->bindValue(':msgContent',$msgContent);
        $courseMsg->execute();
    } catch (PDOException $e) {
        $errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
        $errMsg .= "行數:". $e->getLine()."<br>";
    }
    header("location:coursse-general.php");
?>