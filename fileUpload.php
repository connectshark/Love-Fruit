<?php
session_start();
$_SESSION["mem_no"] = 1;
switch($_FILES["upFile"]["error"]){
	case UPLOAD_ERR_OK:
	    if( file_exists("database/img_mem") === false){  //若資料夾不存在
	    	mkdir("database/img_mem"); //make directory
	    }
	    $from = $_FILES["upFile"]["tmp_name"];
	    $to = "database/img_mem//{$_FILES['upFile']['name']}";
	    if(copy($from, $to)){
	    	echo "上傳成功~<br>檔案名稱為:{$_FILES['upFile']['name']}";
	    }else{
	    	echo "上傳失敗~<br>";
	    }
		break;
	case UPLOAD_ERR_INI_SIZE:
		echo "上傳檔案太大, 不可超過", ini_get("upload_max_filesize"), "<br>";
		break;
	case UPLOAD_ERR_FORM_SIZE:
	echo "上傳檔案太大, 不可超過", $_POST["MAX_FILE_SIZE"], "<br>";
		break;
	case UPLOAD_ERR_PARTIAL:
		echo "上傳檔案不完整<br>";
		break;
	case UPLOAD_ERR_NO_FILE:
		echo "没有上傳檔案<br>";
		break;		
}

$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sql = "update member set mem_pic=:mem_pic where mem_no = :mem_no";
    $profileChange = $pdo->prepare($sql);
    $profileChange->bindValue(":mem_pic", $_FILES['upFile']['name']);
    $profileChange->bindValue(":mem_no", $_SESSION["mem_no"]);
    $profileChange->execute();
    header("location:account.php");
    
} catch (PDOException $e) {
    $errMsg .=  $e->getMessage() . "<br>";
    $errMsg .=  $e->getLine() . "<br>";
}

?>