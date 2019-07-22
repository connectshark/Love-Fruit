<?php 
session_start();
$errMsg="";
$path = 'database/img_cto/';
$img = $_REQUEST['ctoPic'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $path . uniqid() . '.png';
$success = file_put_contents($file, $data);

try {
    require_once("connect-dd101g3.php");
    // 接前一頁資料
    $memNo = $_SESSION['mem_no'];//session撈
    $moldNo = $_REQUEST['texture'];
    $iiNo = $_REQUEST['fruite-slice'];
    $ctoPrice = $_REQUEST['price'];
    $ctoWords = $_REQUEST['parse'];
    $stageNo = rand()%4+1;
    $sql = "SELECT mem_no,cto_no FROM customize WHERE mem_no = $memNo";
    $search = $pdo->query($sql);
    $row = $search->fetchObject();
	$sql="INSERT INTO customize SET mem_no = :memNo ,mold_no = :moldNo ,ii_no = :iiNo ,stage_no = :stageNo ,cto_pic = :ctoPic, cto_words = :ctoWords ,cto_price = :ctoPrice";
    $custom = $pdo->prepare($sql);
    $custom ->bindValue(':memNo',$memNo);
	$custom ->bindValue(':moldNo',$moldNo);
	$custom ->bindValue(':iiNo',$iiNo);
    $custom ->bindValue(':stageNo',$stageNo);
    $custom ->bindValue(':ctoPic',$file);
    $custom ->bindValue(':ctoWords',$ctoWords);
    $custom ->bindValue(':ctoPrice',$ctoPrice);
	$custom -> execute();
    $orderNo = $pdo->lastInsertId();
    for ($i=0; $i < 2; $i++) { 
        $sql="INSERT INTO base_item SET fruit_no = :fruite ,cto_no = $orderNo";
        $fruite = $pdo -> prepare($sql);
        $fruite -> bindValue(':fruite',$_REQUEST['fruite'][$i]);
        $fruite -> execute();
    }
    echo $path;
} catch (PDOException $e) {
    $errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
    $errMsg .= "行數:". $e->getLine()."<br>";
    echo $errMsg;
}
 ?>