<html lang="UTF-8">
  <head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="菓籽戀冰所" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>菓籽戀冰所</title>
    <link rel="icon" href="img/navBar/logo.png" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/courseP.css">
    <link rel="stylesheet" href="css/common.css">
  </head>   
  <body>
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

    <section class="welcome-wrap">
    <div class="spaceship"><img src="img/course/spaceship.png" alt="spaceship"></div>
            <div class="wrapper">
              
                <div class="kanban kanban-y col-md-6 ">
                    <a href="courseP-group.html">
                        <div class="group-item item">
                            <div class="gift gift-y"> <img src="img/course/gift-yellow.png" alt="禮物黃帶"> <span class="group-subtitle subtitle">不定時開課</span></div>
                            <div class="title-box"><h2 class="group-title title">揪團課程</h2></div>
                        </div>
                   </a>
                </div>

                <div class="kanban kanban-p col-md-6 ">
                    <a href="courseP-general.html">
                        <div class="general-item item">
                            <div class="gift gift-p"> <img src="img/course/gift-pink.png" alt="禮物粉帶"> <span class="general-subtitle subtitle">每日固定開課</span></div>
                            <div class="title-box"> <h2  class="general-title title"> 一般課程</h2></div>
                        </div>
                    </a>
                </div>
            </div>
    </section>

    <footer>
      <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
    </footer>

    <script src="js/nav.js"></script>
  </body>
</html>
