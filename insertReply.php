<?php 
$errMsg="";
    try {
        require_once("mac-require.php");
        $sql = "insert msg_reply set msg_no = :msg_no , mem_no=:mem_no,reply_content = :reply_content,reply_date = :reply_date ";
        $mem_no = 1;//session抓
        
        $msg_no  = $_REQUEST['msg_no'];
        $reply_content = $_REQUEST['reply_content'];

        $insertReply = $pdo->prepare($sql);
        $insertReply ->bindValue(':mem_no',$mem_no);
        $insertReply ->bindValue(':msg_no',$msg_no);
        $insertReply ->bindValue(':reply_content',$reply_content);
        $insertReply ->bindValue(':reply_date',date("Y-m-d h:i:s"));
        
        $insertReply->execute();
        
    } catch (PDOException $e) {
        $errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
        $errMsg .= "行數:". $e->getLine()."<br>";
        echo $errMsg;
    }

    
?>