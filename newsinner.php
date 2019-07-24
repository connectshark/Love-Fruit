<?php 
$news_no = $_REQUEST["news_no"];
$errMsg="";

session_start();

    try {
      require_once("mac-require.php");
      $sql = "select * from news WHERE news_no = :news_no";
      $newsInner = $pdo->prepare($sql);
      $newsInner -> bindValue(":news_no", $news_no);
      $newsInner -> execute();
    } catch (PDOException $e) {
        $errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
        $errMsg .= "行數:". $e->getLine()."<br>";
        echo $errMsg;
    }

function newsName($newsClass)
{
	switch ($newsClass) {
		case '0':
			return '揪團新訊';
			break;
		case '1':
			return '新品上市';
			break;
		case '2':
			return '園區公告';
			break;
		case '3':
			return '季節限定';
			break;
	}
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum=1.0,user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>菓籽戀冰所</title>
  <link rel="icon" href="img/navBar/logo.png" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/news.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/temporary-cart.css">
  
</head>

 <body>

  <?php
    require_once("nav.php");
    ?>
 <?php 
    if( $errMsg != ""){ //例外
    echo "<div><center>$errMsg</center></div>";
    }elseif($newsInner->rowCount()==0){
        echo "<div><center>查無此篇消息</center></div>";
    }else{
        $newsRow = $newsInner->fetchObject();
    }
?>

  <section class="news-inner-wrap">

    <section class="banner bubble-box">
      <div class="title">
        <div class="img-bg">
          <img src="img/ribbon.png" alt="標題底圖">
          <span class="news">最新消息</span>
        </div>
      </div>
      <div class="air-ball">
        <img class="apple-ball"src="img/news/apple-ball.png" alt="蘋果熱氣球">
        <img class="apple-ball"src="img/news/apple-ball.png" alt="頻果熱氣球">
      </div>
    </section>

    <section class="inner-wrapper ">
  
      <div class="title-box">
        <div class="before">
          <div class="img"><img src="img/btn/ICE.png" alt=""></div>
          <p class="text-box">
            <span class="text" id="time"><?php echo $newsRow->news_date; ?></span>
            <span class="text" id="sort">【<?php echo newsName($newsRow->news_class); ?>】 </span>
          </p>
          <h3 id="title"><?php echo $newsRow->news_title; ?></h3>
          <div class="clear"></div>
        </div>
      </div>

      <div class="article-image"><img src="<?php echo $newsRow->news_pic; ?>" alt="article-img"></div>

      <p class="article-text">
       <?php echo $newsRow->news_content; ?>
      </p>

      <!-- <div class="change-page">
        <div class="page-btn pre ">
          <span>上一篇</span>
          <p>一起GO PARTY！</p>
        </div>
        <div class="page-btn post">
          <span>下一篇</span>
          <p>暑假檔期</p>
        </div>
      </div> -->

    </section>

  </section>

  <footer>
    <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
  </footer>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/news.js"></script>
  <script src="js/shop.js"></script>
  <script src="js/login.js"></script>
 </body>


</html>