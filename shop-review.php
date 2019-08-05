<?php 
session_start();
$errMsg="";
$prod_no = $_REQUEST["prod_no"];
try {
    require_once("connect-dd101g3.php");
        $sql = "insert into reviews (rev_no,prod_no,mem_no,rev_content,rev_score,rev_date)
                            values  (null,:prod_no,:mem_no,:rev_content,:rev_score,:rev_date)";
        // $courseClassNo = $_REQUEST['courseClassNo'];
        // $memNo =  $_SESSION['mem_no'];
        // $msgTitle  = $_REQUEST['msgTitle'];
        // $msgContent = $_REQUEST['msgContent'];
        $review = $pdo->prepare($sql);
        $review->bindValue(':prod_no',$prod_no);
        $review->bindValue(':mem_no',"2");
        $review->bindValue(':rev_content',$_REQUEST['review-content']);
        $review->bindValue(':rev_score',"4");
        $review->bindValue(':rev_date',date("Y-m-d h:i:s"));
        $review->execute();
        // $_SESSION["where"] = $_SERVER["PHP_SELF"];
        // // echo "sucess";
        // header("location:shop-inside?prod_no = $prod_no");
    } catch (PDOException $e) {
        $errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
        $errMsg .= "行數:". $e->getLine()."<br>";
        echo $errMsg;
    }
?>