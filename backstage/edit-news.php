<?php
session_start();
$_SESSION["emp_no"] = 1;
echo $_FILES["newsFile"]["tmp_name"];
switch($_FILES["newsFile"]["error"]){
	case UPLOAD_ERR_OK:
	    if( file_exists("database/img_news") === false){  //若資料夾不存在
	    	mkdir("database/img_news"); //make directory
	    }
	    $from = $_FILES["newsFile"]["tmp_name"];
	    $to = "database/img_news//{$_FILES['newsFile']['name']}";
	    if(copy($from, $to)){
	    	echo "上傳成功~<br>檔案名稱為:"."{$_FILES['newsFile']['name']}";
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
    $sqlnews = "update news set news_title=:news_title ,news_pic=:news_pic,news_content=:news_content,news_date=:news_date,news_class=:news_class where news_no = :news_no";
    $news = $pdo->prepare($sqlnews);
    $news->bindValue(":news_no", $_REQUEST["news_no"]);
    $news->bindValue(":news_title", $_REQUEST["news_title"]);
    $news->bindValue(":news_pic", "database/img_news/"."{$_FILES['newsFile']['name']}");
    $news->bindValue(":news_content", $_REQUEST["news_content"]);
    $news->bindValue(":news_date", $_REQUEST["news_date"]);
    $news->bindValue(":news_class", $_REQUEST["news_class"]);
    $news->execute();

    header("location:backstage-news.php");

} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}

?>