<?php 
$errMsg="";
    try {
        $dsn="mysql:host=127.0.0.1;port=3306;dbname=dd101g3;charset=utf8";
        $user = "root";
        $psw = "";
        $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
        $pdo = new PDO( $dsn , $user , $psw, $options );
        $sql = "insert course_msg set mem_no = :memNo , course_class_no = :courseClassNo, msg_date = :msgDate, msg_title = :msgTitle , msg_content = :msgContent";
        $memNo = 1;//session抓
        $courseClassNo = $_REQUEST['courseClassNo'];
        $msgTitle  = $_REQUEST['msgTitle'];
        $msgContent = $_REQUEST['msgContent'];
        $courseMsg = $pdo->prepare($sql);
        $courseMsg->bindValue(':memNo',$memNo);
        $courseMsg->bindValue(':courseClassNo',$courseClassNo);
        $courseMsg->bindValue(':msgDate',date("Y-m-d"));
        $courseMsg->bindValue(':msgTitle',$msgTitle);
        $courseMsg->bindValue(':msgContent',$msgContent);
        $courseMsg->execute();
        echo "sucess";
    } catch (PDOException $e) {
        $errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
        $errMsg .= "行數:". $e->getLine()."<br>";
        echo $errMsg;
    }
    // if($courseClassNo==1){
    //     header("location:course-group.php");
    // }else{
    //     header("location:course-general.php");
    // }
    
?>