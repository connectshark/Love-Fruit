<?php 
session_start();
$errMsg="";

try {
    require_once("mac-require.php");
    $sql = "insert course_msg set mem_no = :memNo , course_class_no = :courseClassNo, msg_date = :msgDate, msg_title = :msgTitle , msg_content = :msgContent";
    $courseClassNo = $_REQUEST['courseClassNo'];
    $memNo =  $_SESSION['mem_no'];
    $msgTitle  = $_REQUEST['msgTitle'];
    $msgContent = $_REQUEST['msgContent'];
    $courseMsg = $pdo->prepare($sql);
    $courseMsg->bindValue(':memNo',$memNo);
    $courseMsg->bindValue(':courseClassNo',$courseClassNo);
    $courseMsg->bindValue(':msgDate',date("Y-m-d h:i:s"));
    $courseMsg->bindValue(':msgTitle',$msgTitle);
    $courseMsg->bindValue(':msgContent',$msgContent);
    $courseMsg->execute();
    echo "sucess";
    } catch (PDOException $e) {
        $errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
        $errMsg .= "行數:". $e->getLine()."<br>";
        echo $errMsg;
    }
    if($courseClassNo ==1){
        header("location:course-group.php");
    }else{
        header("location:course-general.php");
    }
    
?>