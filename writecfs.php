<?php 
session_start();
$errMsg="";  //檢查資料夾存不存在
switch ($_FILES['pic']['error']) {
	case UPLOAD_ERR_OK:
		$from = $_FILES['pic']['tmp_name'];
		$to = "database/img_cfs/".(rand()%10).$_FILES['pic']['name'];
		if (copy($from,$to)) {
		}else{
			echo "上傳失敗~<br>";
		}
		break;
	case UPLOAD_ERR_INI_SIZE:
	echo "上傳檔案太大，不可超過<br>";
		break;
	case UPLOAD_ERR_FORM_SIZE:
	echo "上傳檔案太大，不可超過<br>";
		break;
	case UPLOAD_ERR_PARTIAL:
	echo "上傳檔案不完整 <br>";
		break;
	case UPLOAD_ERR_NO_FILE:
	echo "沒有上傳檔案 <br>";
		break;
}
if($to){
	try {
		require_once("connect-dd101g3.php");
		$sql = "insert confessions set cto_no = :ctoNo , mem_no = :memNo , cfs_to = :cfsTo , cfs_content = :cfsContent, cfs_pic = :cfsPic , cfs_good = '0'";
		$memNo = $_SESSION['mem_no'];//session抓
		$ctoNo = $_REQUEST['ctoNo'];
		$cfsTo = $_REQUEST['cfsTo'];
		$cfsContent = $_REQUEST['cfsContent'];
		$messages = $pdo->prepare($sql);
		$messages->bindValue(':ctoNo',$ctoNo);
		$messages->bindValue(':memNo',$memNo);
		$messages->bindValue(':cfsTo',$cfsTo);
		$messages->bindValue(':cfsContent',$cfsContent);
		$messages->bindValue(':cfsPic',$to);
		$messages->execute();
	} catch (PDOException $e) {
		$errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
		$errMsg .= "行數:". $e->getLine()."<br>";
		echo $errMsg;
	}
}

header("location:leavemessage.php");
 ?>