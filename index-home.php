<?php
session_start();
if (isset($_SESSION["mem_id"]) != true) {
  $_SESSION["mem_id"] = null;
}
?>
<?php
$errMsg = "";
try {
  require_once("php/connect-LoveFruitIce.php");
  $sql = "SELECT m.mem_name, m.mem_pic, con.cfs_to, con.cfs_content, con.cfs_pic, con.cfs_good,cus.cto_pic, cus.cto_words, cus.stage_no,con.cfs_no from confessions con JOIN customize cus ON con.cto_no = cus.cto_no JOIN member m on m.mem_no = con.mem_no ORDER BY con.cfs_no DESC ";
  $confessions = $pdo->prepare($sql);
  $confessions->execute();
} catch (PDOException $e) {
  $errMsg .= "錯誤訊息:" . $e->getMessage() . "<br>";
  $errMsg .= "行數:" . $e->getLine() . "<br>";
  echo $errMsg;
}
?>

<?php
$errMsg = "";
try {
  require_once("php/connect-LoveFruitIce.php");
  $sql = "SELECT*from product";
  $product = $pdo->prepare($sql);
  $product->execute();
} catch (PDOException $e) {
  $errMsg .= "錯誤訊息:" . $e->getMessage() . "<br>";
  $errMsg .= "行數:" . $e->getLine() . "<br>";
  echo $errMsg;
}
?>
<?php
$errMsg = "";
try {
  require_once("php/connect-LoveFruitIce.php");
  $sql = "SELECT*from customize ORDER BY cto_no DESC";
  $customize = $pdo->prepare($sql);
  $customize->execute();
} catch (PDOException $e) {
  $errMsg .= "錯誤訊息:" . $e->getMessage() . "<br>";
  $errMsg .= "行數:" . $e->getLine() . "<br>";
  echo $errMsg;
}
?>
<?php
$errMsg = "";
try {
  require_once("php/connect-LoveFruitIce.php");
  $sql = "SELECT*from news";
  $news = $pdo->prepare($sql);
  $news->execute();
} catch (PDOException $e) {
  $errMsg .= "錯誤訊息:" . $e->getMessage() . "<br>";
  $errMsg .= "行數:" . $e->getLine() . "<br>";
  echo $errMsg;
}
?>

<html lang="UTF-8">

<head>
  <meta charset="UTF-8" />
  <meta name="keywords" content="菓籽戀冰所" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>菓籽戀冰所</title>
  <link rel="icon" href="img/navBar/logo.png" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/common.css" />
  <link rel="stylesheet" href="css/temporary-cart.css">
  <link rel="stylesheet" href="WOW-master/css/libs/animate.css" />
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
</head>

<body class="index-body">
  <?php
  require_once("nav.php");
  ?>
  <section class="index-hero-bgc">
    <div class="mountain">
      <img src="img/indexImg/heroImg.png" alt="山" />
    </div>
    <img class="heroImg-watermelon" src="img/indexImg/heroImg-watermelon.png" alt="西瓜山" />
    <img class="heroImg-castle" src="img/indexImg/heroImg-castle.png" alt="城堡" />
    <img class="hero-bgi-cloud cloudA" src="img/indexImg/hero-bgi-cloud-a.png" alt="背景雲" />
    <img class="hero-bgi-cloud cloudB" src="img/indexImg/hero-bgi-cloud-b.png" alt="背景雲" />
    <img class="flyship" src="img/indexImg/flyship.gif" alt="fiyship-text" />
    <img class="style-cloud-a" src="img/indexImg/styleCloud.png" alt="styleCloud" />
    <img class="style-cloud-b" src="img/indexImg/styleCloud.png" alt="styleCloud" />
    <img class="style-cloud-c" src="img/indexImg/styleCloud.png" alt="styleCloud" />
    <img class="style-cloud-d" src="img/indexImg/styleCloud.png" alt="styleCloud" />
    <img class="style-cloud-e" src="img/indexImg/styleCloud.png" alt="styleCloud" />
    <div class="hero-green"></div>
    <img class="icecream-lemon icecream" src="img/indexImg/icecream-lemon .png" alt="冰棒" />
    <img class="icecream-b icecream" src="img/indexImg/icecream-b.png" alt="冰棒" />
    <img class="icecream-p icecream" src="img/indexImg/icecream-p.png" alt="冰棒" />
    <img class="icecream-r icecream" src="img/indexImg/icecream-r.png" alt="冰棒" />
    <img class="icecream-b1 icecream" src="img/indexImg/icecream-b1.png" alt="冰棒" />
    <img class="icecream-y icecream" src="img/indexImg/icecream-y.png" alt="冰棒" />
    <div class="heroIce">
      <img class="heroIce-p" src="img/indexImg/heroIce.png" alt="冰棒人物" />
      <img class="love-S" src="img/indexImg/love-S.png" alt="愛心" />
      <img class="love-S-a" src="img/indexImg/love-S.png" alt="愛心" />
    </div>
  </section>

  <section class="index-qa-bgc">
    <img class="qabgc-top" src="img/indexImg/QaBgc-1.png" alt="QaBgc" />

    <div class="index-title-group  wow bounceIn">
      <div class="index-title-icon">
        <img src="img/indexImg/love-icon1.png" alt="icon" />
      </div>
      <div class="index-title-content">
        <h2>戀冰測驗</h2>
        <span>推薦屬於你感情階段的水果冰搭配</span>
      </div>
    </div>

    <img class="mailer-top  wow bounceIn" src="img/indexImg/mailer-2.png" alt="QaBgc" />
    <div id="mailer-middle" class="mailer-middle wow bounceIn">
      <div class="mailer-qa-box">
        <h3 class="ml9">
          <span class="text-wrapper">
            <span class="letters">Q:你希望自己在愛情裡收穫到的是什麼呢？</span>
          </span>
        </h3>
      </div>
      <a class="qa-button-custom" href="qa.php">
        <div class="qa-button-style">
          <div class="qa-button-style-botton">
            <div class="qa-inner-style">
              <div class="qa-button-text-style">
                <span class="qa-button-text">
                  (A)真愛
                </span>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="qa-button-custom" href="qa.php">
        <div class="qa-button-style">
          <div class="qa-button-style-botton">
            <div class="qa-inner-style">
              <div class="qa-button-text-style">
                <span class="qa-button-text">
                  (Ｂ)信任
                </span>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="qa-button-custom" href="qa.php">
        <div class="qa-button-style">
          <div class="qa-button-style-botton">
            <div class="qa-inner-style">
              <div class="qa-button-text-style">
                <span class="qa-button-text">
                  (C)快樂
                </span>
              </div>
            </div>
          </div>
        </div>
      </a>
      <form action="qa.html" method="POST"></form>
    </div>
    <img class="mailer-bottom  wow bounceIn" data-aos="fade-down-left" src="img/indexImg/mailer-1.png" alt="QaBgc" />
    <img class="qabgc-bottom" src="img/indexImg/QaBgc.png" alt="background" />
  </section>

  <section class="index-cp-bgc">
    <div class="index-title-group  wow tada">
      <div class="index-title-icon">
        <img src="img/indexImg/love-icon2.png" alt="icon" />
      </div>
      <div class="index-title-content">
        <h2>客製戀冰菓</h2>
        <span>讓愛情來打造專屬於你們的戀曲水果冰</span>
      </div>
    </div>
    <img id="iceShadow" class="iceShadow" src="img/indexImg/iceShadow.png" alt="iceShadow" />
    <img class="c-p-store wow tada" src="img/indexImg/customized-products-store.png" alt="store" />
    <div class="ice-panel wow tada">
      <h3>選擇製冰容器</h3>
      <div class="panel-button-item-group">
        <div id="model-general-button" class="panel-button-bottom">
          <div class="panel-button-center">
            <div class="panel-button-bottom-pink">
              <img src="img/indexImg/model-general.png" alt="model-general" />
            </div>
            <span>一般模型</span>
            <div class="panel-button-center-triangle-group">
            </div>
          </div>
        </div>
        <div id="model-bear-paw-button" class="panel-button-bottom">
          <div class="panel-button-center">
            <div class="panel-button-bottom-pink">
              <img src="img/indexImg/model-bear-paw.png" alt="model-bear-paw" />
            </div>
            <span>熊掌模型</span>
            <div class="panel-button-center-triangle-group"></div>
          </div>
        </div>
        <div id="model-rabbit-button" class="panel-button-bottom">
          <div class="panel-button-center">
            <div class="panel-button-bottom-pink">
              <img src="img/indexImg/model-rabbit.png" alt="model-rabbit" />
            </div>
            <span>兔子模型</span>
            <div class="panel-button-center-triangle-group"></div>
          </div>
        </div>
        <div id="model-rocket-button" class="panel-button-bottom">
          <div class="panel-button-center">
            <div class="panel-button-bottom-pink">
              <img src="img/indexImg/model-rocket.png" alt="model-rocket" />
            </div>
            <span>火箭模型</span>
            <div class="panel-button-center-triangle-group"></div>
          </div>
        </div>
      </div>
      <a class="c-p-button-custom" href="custom.php">
        <div class="c-p-button-style">
          <div class="c-p-button-style-botton">
            <div class="inner-style">
              <div class="c-p-button-text-style">
                <span class="c-p-button-text">
                  <img class="btn-ice" src="img/btn/ICE.png" alt="ICE" />
                  立即製作
                </span>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <img id="model-general" class="model-general wow tada" src="img/indexImg/model-general.png" alt="general" />
    <img id="model-bear" class="model-bear" src="img/indexImg/model-bear-paw.png" alt="general" />
    <img id="model-rabbit" class="model-rabbit" src="img/indexImg/model-rabbit.png" alt="general" />
    <img id="model-rocket" class="model-rocket" src="img/indexImg/model-rocket.png" alt="general" />

    <img class="diyIcebgc-top" src="img/indexImg/diyIcebgc-top.png" alt="diyIcebgc-top" />
    <img class="diy-ice-bgc" src="img/indexImg/diyIcebgc.png" alt="diyIcebgc" />
    <?php $customizeRow = $customize->fetch(PDO::FETCH_ASSOC) ?>
    <div class="c-p-single">
      <img id="user-ice1" class="wow bounceInDown" src="<?php echo $customizeRow["cto_pic"] ?>" alt="userIce" />
      <img id="single" src="img/indexImg/single.png" alt="single" />
    </div>
    <?php $customizeRow = $customize->fetch(PDO::FETCH_ASSOC) ?>
    <div class="c-p-firstLove">
      <img id="user-ice2" class="wow bounceInDown" data-wow-delay="0.5s" src="<?php echo $customizeRow["cto_pic"] ?>" alt="userIce" />
      <img src="img/indexImg/firstLove.png" alt="firstLove" />
    </div>
    <?php $customizeRow = $customize->fetch(PDO::FETCH_ASSOC) ?>
    <div class="c-p-love">
      <img id="user-ice3" class="wow bounceInDown" data-wow-delay="1s" src="<?php echo $customizeRow["cto_pic"] ?>" alt="userIce" />
      <img src="img/indexImg/love.png" alt="love" />
    </div>
    <?php $customizeRow = $customize->fetch(PDO::FETCH_ASSOC) ?>
    <div class="c-p-lostLove">
      <img id="user-ice4" class="wow bounceInDown" data-wow-delay="1.3s" src="<?php echo $customizeRow["cto_pic"] ?>" alt="userIce" />
      <img src="img/indexImg/lostLove.png" alt="love" />
    </div>
  </section>

  <section class="index-store-bgc">
    <img class="store-bgc" src="img/indexImg/store-bgc.png" alt="store" />
    <div class="index-title-group wow swing">
      <div class="index-title-icon">
        <img src="img/indexImg/love-icon3.png" alt="icon" />
      </div>
      <div class="index-title-content">
        <h2>戀菓商店</h2>
        <span>各式各樣的冰品都在戀冰商店唷</span>
      </div>
    </div>

    <div class="store-group">
      <a href="shop.php"> <img src="img/indexImg/store.png" alt="store" /></a>
    </div>
    <div class="store-group-item-group">
      <div class="store-item-single wow bounceInRight">
        <span class="store-item-text">SINGLE</span>
        <div class="store-item-img">
          <div class="store-item-img-box">
            <?php $productRow = $product->fetch(PDO::FETCH_ASSOC) ?>
            <img src="<?php echo $productRow["prod_pic"] ?>" alt="index-ice-first-love-single" />
          </div>
          <span><?php echo $productRow["prod_name"] ?></span>
          <span>NT:<?php echo $productRow["prod_price"] ?></span>
        </div>
        <a class="store-button-custom" href="shop.php">
          <div class="store-button-style">
            <div class="store-button-style-botton">
              <div class="store-inner-style">
                <div class="store-button-text-style">
                  <span class="store-button-text">
                    立即選購
                  </span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="store-item-first-love wow bounceInRight" data-wow-delay="0.5s">
        <span class="store-item-text">FIRST LOVE</span>
        <div class="store-item-img">
          <div class="store-item-img-box">
            <?php $productRow = $product->fetch(PDO::FETCH_ASSOC) ?>
            <img src="<?php echo $productRow["prod_pic"] ?>" alt="index-ice-first-love-single" />
          </div>
          <span><?php echo $productRow["prod_name"] ?></span>
          <span>NT:<?php echo $productRow["prod_price"] ?></span>
        </div>
        <a class="store-button-custom" href="shop.php">
          <div class="store-button-style">
            <div class="store-button-style-botton">
              <div class="store-inner-style">
                <div class="store-button-text-style">
                  <span class="store-button-text">
                    立即選購
                  </span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="store-item-fall-in-love wow bounceInRight" data-wow-delay="1s">
        <span class="store-item-text">FALL IN LOVE</span>
        <div class="store-item-img">
          <div class="store-item-img-box">
            <?php $productRow = $product->fetch(PDO::FETCH_ASSOC) ?>
            <img src="<?php echo $productRow["prod_pic"] ?>" alt="index-ice-first-love-single" />
          </div>
          <span><?php echo $productRow["prod_name"] ?></span>
          <span>NT:<?php echo $productRow["prod_price"] ?></span>
        </div>
        <a class="store-button-custom" href="shop.php">
          <div class="store-button-style">
            <div class="store-button-style-botton">
              <div class="store-inner-style">
                <div class="store-button-text-style">
                  <span class="store-button-text">
                    立即選購
                  </span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="store-item-break-up wow bounceInRight" data-wow-delay="1.5s">
        <span class="store-item-text">BREAK UP</span>
        <div class="store-item-img">
          <div class="store-item-img-box">
            <?php $productRow = $product->fetch(PDO::FETCH_ASSOC) ?>
            <img src="<?php echo $productRow["prod_pic"] ?>" alt="index-ice-first-love-single" />
          </div>
          <span><?php echo $productRow["prod_name"] ?></span>
          <span>NT:<?php echo $productRow["prod_price"] ?></span>
        </div>
        <a class="store-button-custom" href="shop.php">
          <div class="store-button-style">
            <div class="store-button-style-botton">
              <div class="store-inner-style">
                <div class="store-button-text-style">
                  <span class="store-button-text">
                    立即選購
                  </span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <img class="store-bgc-mountain" src="img/indexImg/store-bgc-mountain.png" alt="mountain" />
    <div class="store-bgc-way"></div>
  </section>

  <section class="index-leavemessage-bgc">
    <div class="index-title-group wow rotateInDownLeft">
      <div class="index-title-icon">
        <img src="img/indexImg/love-icon4.png" alt="icon" />
      </div>
      <div class="index-title-content">
        <h2>愛的留言</h2>
        <span>大聲說出你心裡的話語吧</span>
      </div>
    </div>
    <div class="leavemessage-item-group">
      <?php $row = $confessions->fetch(PDO::FETCH_ASSOC) ?>
      <div class="message-item single wow flipInY">
        <a href="leavemessage.php">
          <div class="leavemessage-cloud">
            <img src="img/indexImg/store/store-single-item-icon.png" alt="" />
          </div>
          <div class="message-header">
            <div class="message-header-icon">
              <img src="<?php echo $row["mem_pic"] ?>" alt="user-icon" />
            </div>
            <p><?php echo $row["mem_name"] ?></p>
          </div>
          <div class="message-body">
            <figure>
              <img src="<?php echo $row["cfs_pic"] ?>" alt="上傳照片" />
            </figure>
            <div class="message-text">
              <h3><span>To:</span><?php echo $row["cfs_to"] ?></h3>
              <p><?php echo $row["cfs_content"] ?></p>
              <span class="s-text">#<?php echo $row["cto_words"] ?></span>
            </div>
          </div>
          <div class="custom-ice">
            <img src="<?php echo $row["cto_pic"] ?>" alt="客製冰棒" />
          </div>
        </a>
      </div>
      <div class="message-item first-love wow flipInY" data-wow-delay="0.5s">
        <a href="leavemessage.php">
          <div class="leavemessage-cloud">
            <img src="img/indexImg/store/store-first-lovepng-item-icon.png" alt="" />
          </div>
          <?php $row = $confessions->fetch(PDO::FETCH_ASSOC) ?>
          <div class="message-header">
            <div class="message-header-icon">
              <img src="<?php echo $row["mem_pic"] ?>" alt="user-icon" />
            </div>
            <p><?php echo $row["mem_name"] ?></p>
          </div>
          <div class="message-body">
            <figure>
              <img src="<?php echo $row["cfs_pic"] ?>" alt="上傳照片" />
            </figure>
            <div class="message-text">
              <h3><span>To:</span><?php echo $row["cfs_to"] ?></h3>
              <p><?php echo $row["cfs_content"] ?></p>
              <span class="s-text">#<?php echo $row["cto_words"] ?></span>
            </div>
          </div>
          <div class="custom-ice">
            <img src="<?php echo $row["cto_pic"] ?>" alt="客製冰棒" />
          </div>
        </a>
      </div>
      <div class="message-item fall-in-love wow flipInY " data-wow-delay="1s">
        <a href="leavemessage.php">
          <div class="leavemessage-cloud">
            <img src="img/indexImg/store/store-love-item-icon.png" alt="" />
          </div>
          <div class="message-header">
            <div class="message-header-icon">
              <?php $row = $confessions->fetch(PDO::FETCH_ASSOC) ?>
              <img src="<?php echo $row["mem_pic"] ?>" alt="user-icon" />
            </div>
            <p><?php echo $row["mem_name"] ?></p>
          </div>
          <div class="message-body">
            <figure>
              <img src="<?php echo $row["cfs_pic"] ?>" alt="上傳照片" />
            </figure>
            <div class="message-text">
              <h3><span>To:</span><?php echo $row["cfs_to"] ?></h3>
              <p><?php echo $row["cfs_content"] ?></p>
              <span class="s-text">#<?php echo $row["cto_words"] ?></span>
            </div>
          </div>
          <div class="custom-ice">
            <img src="<?php echo $row["cto_pic"] ?>" alt="客製冰棒" />
          </div>
        </a>
      </div>
      <div class="message-item break-up wow flipInY" data-wow-delay="1.5s">
        <a href="leavemessage.php">
          <div class="leavemessage-cloud">
            <img src="img/indexImg/store/store-lost-love-item-icon.png" alt="" />
          </div>
          <div class="message-header">
            <div class="message-header-icon">
              <?php $row = $confessions->fetch(PDO::FETCH_ASSOC) ?>
              <img src="<?php echo $row["mem_pic"] ?>" alt="user-icon" />
            </div>
            <p><?php echo $row["mem_name"] ?></p>
          </div>
          <div class="message-body">
            <figure>
              <img src="<?php echo $row["cfs_pic"] ?>" alt="上傳照片" />
            </figure>
            <div class="message-text">
              <h3><span>To:</span><?php echo $row["cfs_to"] ?></h3>
              <p><?php echo $row["cfs_content"] ?></p>
              <span class="s-text">#<?php echo $row["cto_words"] ?></span>
            </div>
          </div>
          <div class="custom-ice">
            <img src="<?php echo $row["cto_pic"] ?>" alt="客製冰棒" />
          </div>
        </a>
      </div>
    </div>
    <!-- 背景 -->
    <img class="leavemessage-bgc" src="img/indexImg/store/leavemessage-bgc.png" alt="leavemessage-bgc" />
    <img class="leavemessage-Material" src="img/indexImg/store/leavemessage-Material-bgc.png" alt="leavemessage-Material" />
  </section>

  <section class="index-course-bgc">
    <img class="course-cloud-bgc" src="img/indexImg/course/course-cloud-bgc.png" alt="course-cloud" />
    <div class="index-title-group wow rollIn">
      <div class="index-title-icon">
        <img src="img/indexImg/course/love-icon5.png" alt="icon" />
      </div>
      <div class="index-title-content">
        <h2>體驗課程</h2>
        <span>參加各種活動來增加自己的甜蜜愛情吧</span>
      </div>
    </div>
    <div id="course-blue-ship" class="course-blue-ship">
      <div class="course-blue-ship-content">
        <div class="course-title">
          <div class="course-ice-icon">
            <img src="img/indexImg/course/course-ice-icon.png" alt="course-ice-icon" />
          </div>
          <h3>揪團課程</h3>
        </div>
        <div class="course-title-content">
          <h4>你儂我儂甜心冰淇淋蛋糕</h4>
          <p>
            <span>報名方式：</span>
            1.線上揪團：由揪團主發起課程，並於三天前報名課程
            2.入館後至1F客服中心請揪團主使用QR Code報到
          </p>
        </div>
        <a class="course-button-custom" href="course-group.php">
          <div class="course-button-style">
            <div class="course-button-style-botton">
              <div class="course-inner-style">
                <div class="course-button-text-style">
                  <span class="course-button-text">
                    立即揪團
                  </span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="course-blue-ship-img">
        <img src="img/indexImg/course/course-blue-ship.png" alt="blue-ship" />
      </div>
    </div>

    <div id="course-pink-ship" class="course-pink-ship">
      <div class="course-pink-ship-content">
        <div class="course-title">
          <div class="course-ice-icon">
            <img src="img/indexImg/course/course-ice-icon.png" alt="course-ice-icon" />
          </div>
          <h3>一般課程</h3>
        </div>
        <div class="course-title-content">
          <h4>戀愛小馬夢幻冰品</h4>
          <p>
            <span>報名方式：</span>
            1.線上預約(須提前30分鐘至1F客服中心報到，逾時將留給現場後位)
            2.入館後至1F客服中心使用QR Code報到劃位
          </p>
        </div>
        <a class="course-button-custom" href="course-general.php">
          <div class="course-button-style">
            <div class="course-button-style-botton">
              <div class="course-inner-style">
                <div class="course-button-text-style">
                  <span class="course-button-text">
                    立即揪團
                  </span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="course-blue-ship-img">
        <img src="img/indexImg/course/course-pink-ship.png" alt="blue-ship" />
      </div>
    </div>
    <div class="ship-button">
      <img id="blue-ship-button" src="img/indexImg/course/arrow-right-button.png" alt="button" />
      <img id="pink-ship-button" src="img/indexImg/course/arrow-right-button.png" alt="button" />
    </div>
  </section>

  <section class="index-news-bgc">
    <div class="index-title-group wow bounceInDown">
      <div class="index-title-icon">
        <img src="img/indexImg/news/love-icon6.png" alt="icon" />
      </div>
      <div class="index-title-content">
        <h2>最新消息</h2>
        <span>菓籽戀冰所的最新消息都在這哦</span>
      </div>
    </div>
    <div class="index-news-content wow bounceInUp">
      <div class="index-news-content-group">
        <div class="index-news-content-item-group">
          <div class="index-news-content-img">
            <img src="img/indexImg/news/news-img.png" alt="" />
          </div>
          <div class="index-news-content-item">
            <?php $newsRow = $news->fetch(PDO::FETCH_ASSOC) ?>
            <div class="index-news-content-list">
              <div class="index-news-content-icon">最新消息</div>
              <div class="index-news-conten-text-group">
                <a href="http://140.115.236.71/demo-projects/DD101/DD101G3/newsinner.php?news_no=<?php echo $newsRow["news_no"] ?>">
                  <h3><?php echo $newsRow["news_title"] ?></h3>
                  <p><?php echo $newsRow["news_content"] ?></p>
                </a>
              </div>
            </div>
            <div class="index-news-content-list">
              <?php $newsRow = $news->fetch(PDO::FETCH_ASSOC) ?>
              <div class="index-news-content-icon-g">最新消息</div>
              <div class="index-news-conten-text-group">
                <a href="http://140.115.236.71/demo-projects/DD101/DD101G3/newsinner.php?news_no=<?php echo $newsRow["news_no"] ?>">
                  <h3><?php echo $newsRow["news_title"] ?></h3>
                  <p><?php echo $newsRow["news_content"] ?></p>
                </a>
              </div>
            </div>
            <div class="index-news-content-list">
              <?php $newsRow = $news->fetch(PDO::FETCH_ASSOC) ?>
              <div class="index-news-content-icon-y">最新消息</div>
              <div class="index-news-conten-text-group">
                <a href="http://140.115.236.71/demo-projects/DD101/DD101G3/newsinner.php?news_no=<?php echo $newsRow["news_no"] ?>">
                  <h3><?php echo $newsRow["news_title"] ?></h3>
                  <p><?php echo $newsRow["news_content"] ?></p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img class="news-cloud" src="img/indexImg/news/news-cloud.png" alt="news-cloud" />
    <img class="news-bgi" src="img/indexImg/news/news-bgi.png" alt="news-bgi" />
  </section>

  <footer>
    <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
  </footer>
  <script src="WOW-master/dist/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <script src="js/nav.js"></script>
  <script src="js/login.js"></script>
  <script src="js/index.js"></script>
  <script src="js/shop.js"></script>
</body>

</html>