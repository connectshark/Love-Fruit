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
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/news.css">
  <link rel="stylesheet" href="css/common.css">
  
</head>

<body>
  <input type="checkbox" id="menu-control" />
  <?php
    require_once("nav.php");
    ?>
    <div id="robot-container" class="robot-container">
      <div id="robot-title-block" class="robot-title-block">
        <span class="robot-title-icon"
          ><img
            id="robot-title-icon-img"
            src="img/navBar/robot/robot-icon.png"
            alt="robot-icon"
          />
        </span>
        <h3>冰棒小達人</h3>
        <div class="robot-pic">
          <img src="img/navBar/robot/robot.png" alt="robot-pic" />
        </div>
      </div>
      <div id="robot-conversation-block" class="robot-conversation-block">
        <div id="robot-conversation-list">
          <div class="robot-conversation">
            <p class="robot_text"><span>小達人:</span>請問有需要幫忙嗎？</p>
          </div>
        </div>
      </div>
      <ul class="chatBot-keyword">
        <li class="fruit">草莓</li>
        <li class="fruit">香蕉</li>
        <li class="fruit">青蘋果</li>
        <li class="fruit">葡萄</li>
        <li class="fruit">橘子</li>
        <li class="fruit">藍莓</li>
      </ul>
      <form>
        <div class="robot-input-block">
          <textarea name="message" id="message"></textarea>
          <button type="button" id="robot-submit">送出</button>
        </div>
      </form>
    </div>


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
  
      <div class="title-box ">
        <div class="before">
          <div class="img"><img src="img/btn/ICE.png" alt=""></div>
          <p class="text-box">
            <span class="text" id="time">2019.06.28</span>
            <span class="text" id="sort">園區公告</span>
          </p>
          <h3 id="title">3F創意遊戲室 暫停開放公告</h3>
          <div class="clear"></div>
        </div>
      </div>

      <div class="article-image"><img src="img/course/article-img.png" alt="article-img"></div>

      <p class="article-text">
        【緊急公告】<br>
        1/22-1/25 導覽場次、DIY課程部份時段暫停<br>

        導覽時段 暫停場次如下：<br>
        1/22(二)➡11:00<br>
        1/23(三)➡11:00<br>
        <br>
        DIY課程 暫停場次如下：<br>
        1/22(二)➡11:00、11:30(心願可可果)、13:00、14:00<br>
        1/23(三)➡11:00、11:30(心願可可果)<br>
        1/24(四)➡11:30(心願可可果)、14:00、14:30(心願可可果)<br>
        1/25(五)➡11:30(心願可可果、14:30(心願可可果)、15:00<br>
        <br>
        除上列場次外，其餘場次皆可正常報名<br>
        1/22-1/25 導覽場次、DIY課程部份時段暫停<br>
        感謝可可粉們的體諒~~~<br>
      </p>

      <div class="change-page">
        <div class="page-btn pre ">
          <span>上一篇</span>
          <p>一起GO PARTY！</p>
        </div>
        <div class="page-btn post">
          <span>下一篇</span>
          <p>暑假檔期</p>
        </div>
      </div>

    </section>

  </section>

  <footer>
    <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
  </footer>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/news.js" ></script>
  
</body>

</html>