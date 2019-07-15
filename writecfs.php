<?php 
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
		$dsn="mysql:host=localhost;port=3306;dbname=dd101g3;charset=utf8";
		$user = "root";
		$psw = "root";
		$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		$pdo = new PDO( $dsn , $user , $psw, $options );
		$sql = "insert confessions set mem_no = :memNo , cfs_to = :cfsTo , cfs_content = :cfsContent, cfs_pic = :cfsPic , cfs_good = '0'";
		$memNo = $_REQUEST['memNo'];
		$cfsTo = $_REQUEST['cfsTo'];
		$cfsContent = $_REQUEST['cfsContent'];
		$products = $pdo->prepare($sql);
		$products->bindValue(':memNo',$memNo);
		$products->bindValue(':cfsTo',$cfsTo);
		$products->bindValue(':cfsContent',$cfsContent);
		$products->bindValue(':cfsPic',$to);
		$products->execute();
	} catch (PDOException $e) {
		$errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
		$errMsg .= "行數:". $e->getLine()."<br>";
	}
}

header("location:leavemessage.php");
 ?>