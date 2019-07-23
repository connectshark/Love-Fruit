<?php 
session_start();
$errMsg="";
    try {
        require_once("mac-require.php");
        $sql = "insert course_reservation set mem_no = :memNo , course_name = :courseName, course_date = :courseDate, course_slot = :courseSlot , res_ppl = :resPpl,res_date = :resDate";
        $memNo =  $_SESSION['mem_no'];
        $courseName = $_REQUEST['courseName'];
        $courseDate  = $_REQUEST['courseDate'];
        $courseSlot = $_REQUEST['courseSlot'];
        $resPpl = $_REQUEST['resPpl'];

        $courseR = $pdo->prepare($sql);
        $courseR->bindValue(':memNo',$memNo);
        $courseR->bindValue(':courseName',$courseName);
        $courseR->bindValue(':courseDate',$courseDate);
        $courseR->bindValue(':courseSlot',$courseSlot);
        $courseR->bindValue(':resPpl',$resPpl);
        $courseR->bindValue(':resDate',date('Y-m-d h:i:s'));
        $courseR->execute();

        echo "sucess";

    } catch (PDOException $e) {
        $errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
        $errMsg .= "行數:". $e->getLine()."<br>";
        echo $errMsg;
    }
   
    header("location:account.php");
?>