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
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/courseP.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>

<body>
  <?php
    require_once("nav.php");
    ?>
  <div id="robot-container" class="robot-container">
    <div id="robot-title-block" class="robot-title-block">
      <span class="robot-title-icon"><img id="robot-title-icon-img" src="img/navBar/robot/robot-icon.png"
          alt="robot-icon" />
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

  <section class="group-wrap">
    <div class="wrapper">
  
        <img class="cloud " src="img/cloud.png" alt="雲" />
        <img class="cloud " src="img/course/styleCloud.png" alt="雲" />
        <img class="cloud " src="img/cloud.png" alt="雲" />
        <img class="cloud " src="img/course/styleCloud.png" alt="雲" />
        <img class="cloud " src="img/cloud.png" alt="雲" />

      <div class="group-ribbon">
        <h2 class="title"> 揪團課程</h2>
        <span class="subtitle">不定時開課</span>


      </div>
      <div class="kanban">
        <div class="item">
          <div class="gift"> <img src="img/course/gift-yellow.png" alt="禮物黃帶"> <span class="subtitle">你儂我儂甜心冰淇淋蛋糕
            </span></div>
          <div class="content-box">
            <div class="diy-img col-md-6">
              <img src="img/course/diyimg3.png" alt="你儂我儂甜心冰淇淋蛋糕">
            </div>
            <div class="info  col-md-6">
              <div class="info-title">
                <h4>課程資訊</h4>
              </div>
              <div class="info-dec">
                <ul>
                  <li>創作時間：</li>
                  <p> 180分鐘</p>

                  <li>手做地點：</li>
                  <p> 2F DIY教室C </p>

                  <li>收費方式：</li>
                  <p> 每份$1,000元(雙人課程，歡迎使用門票上之抵用券)</p>

                  <li>報名方式：</li>
                  <p> 1.線上揪團：由揪團主發起課程，並於三天前報名課程<br>2.入館後至1F客服中心使用QR
                    Code報到劃位</p>
                </ul>
              </div>
            </div>
            <div id="scroll-message" class="course-btn  col-md-12">
              <div class="course-ice-btn-out">
                <span class="course-ice-btn-in">
                  <img src="img/btn/ICE.png" alt="btn">
                  我要開團
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <div id="comment" class="group-message-cloud"></div>
  <section class="group-message-wrap">
   
    <div class="title-box">
      <h3 class="message-title">開團留言板</h3>
      <span>快來開團玩課程！</span>
    </div>
    <div class="group-message">
      <div class="open-group">
        <div class="message-meb col-md-2">
          <i class="fas fa-user-circle"></i>
          <p>會員名稱</p>
          <p class="time">2019-07-07</p>
        </div>
        <div class="write-area  col-md-10">
          <p>你的團名：</p>
          <input type="text" minlength="1" maxlength="10" placeholder="寫下最吸引人的團名！">
          <p>開團資訊：</p>
          <textarea name="" id="" cols="90" rows="8" 

placeholder="揪團課程時間：
聯絡電話：
e-mail：
邀請的話～"></textarea>
        </div>
        <div class="message-btn col-md-12">
          <div class="message-btn-out">
            <span class="message-btn-in">
              我要留言
            </span>
          </div>
        </div>
      </div>
      <div class="love-line"><img src="img/course/love-line.png" alt="love-line"></div>
      <div class="array-btn">
        <a class="array-ice-btn-out" href="courseGroupForm.html">
          <span class="array-ice-btn-in">
            <img src="img/btn/ICE.png" alt="btn">
            主揪報團
          </span>
        </a>
      </div>
      <div class="team-name">
        <span>團名：</span><span>快來一起玩～～～</span>
      </div>
      <div class="main-group-message">

        <div class="message-meb col-md-2 col-2">
          <i class="fas fa-user-circle"></i>
          <p>Sandra</p>
          <p class="time">2019-07-07</p>
        </div>

        <div class="message-con col-md-10 col-10">
          <p>
            揪團課程時間：2019/07/02---上午 10:00<br>
            聯絡電話：0960529999<br>
            e-mail：abc123@gmail.com<br>
            快來一起做冰淇淋蛋糕！！！！！！！<br>
          </p>
        </div>

        <div id="showBtn" class="message-btn col-md-12 join-pop-btn">
          <div class="message-btn-out">
            <span class="message-btn-in">
              我要參加
            </span>
          </div>
        </div>
      </div>
      <div  id="dialog" class="pop-box">
        <div class="pop-up">
          <span  id="closeBtn" ><img src="img/pop-close.png" alt="關閉"></span> 

          <div class="pop-team-name">
            <p>團名：山抓手作團山抓手作團</p>
          </div>

          <div class="pop-content">
            <div class="pop-main-message col-md-7 col-10">
              <div class="message-meb col-md-2 col-2">
                <i class="fas fa-user-circle"></i>
                <p>Sandra</p>
                <p class="time">2019-07-07</p>
              </div>

              <div class="message-con col-md-10 col-10">
                <p>
                  揪團課程時間：2019/07/02---上午 10:00<br>
                  聯絡電話：0960529999<br>
                  e-mail：abc123@gmail.com<br>
                  快來一起做冰淇淋蛋糕！！！！！！！<br>
                </p>
              </div>
            </div>
            <div class="all-message col-md-7 col-10">
              <div class="meb-add-message ">
                <div class="meb col-md-2 ">
                  <i class="fas fa-user-circle"></i>
                  <p class="name">Sandra</p>
                </div>
                <p class="text col-md-10">+1+1+1</p>
              </div>
            </div>
            <div class="pop-leave-message col-md-8 col-10">
              <div class="leave-message col-md-9 col-12"> <input type="text" name="" id="leave-message-box"></div>
              <div class="message-btn col-md-2 col-12">
                <div class="message-btn-out">
                  <span class="message-btn-in">
                    留言參加
                  </span>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </section>

  <footer>
    <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
  </footer>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/course.js"></script>
</body>

</html>