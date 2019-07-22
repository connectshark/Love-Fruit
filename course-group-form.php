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
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/courseP.css">
  <link rel="stylesheet" href="css/temporary-cart.css">

</head>

<body>

<?php
    require_once("nav.php");
?>

<section class="group-form-wrap">
  <div class="wrapper">
      <div class="title">
        <img src="img/ribbon.png" alt="title-img">
         <h3 class="group-form-title">揪團課程預約</h3>
      </div>
  <form action="course-reservation.php" method="post" enctype="multipart/form-data">
        <span><img src="img/btn/ICE.png" alt="">你的團名：
        <input type="text" name="courseName" id="gname" placeholder="ex:揪團戀冰"></span>
       
        <span><img src="img/btn/ICE.png" alt="">選擇日期： </span>
        <div class="calendar-box">
              <div class="calendar-top">
                  <div class="yy">
                      <p>
                          <span id="yy-sp">年份</span>
                      </p>
                  </div>

                  <div class="mm">
                      <!-- <div class="arrow_left" id="left-1"></div> -->
                      <i id="left-1" class="fas fa-chevron-left"></i>
                      <p>
                          <span id="mm-sp">月份</span>月
                      </p>
                      <!-- <div class="arrow_right" id="right-1"></div> -->
                      <i id="right-1" class="fas fa-chevron-right"></i>
                  </div>
                  
              </div>

              <div class="calendar-bottom">
                  <table class="calendar">
                      <tbody>
                          <tr>
                              <th>日</th>
                              <th>一</th>
                              <th>二</th>
                              <th>三</th>
                              <th>四</th>
                              <th>五</th>
                              <th>六</th>
                          </tr>
                      </tbody>
                      <tbody id="calendar-tb"></tbody>
                  </table>
              </div>
              <!-- <input type="hidden" name="courseDate"> -->
        </div>
       
        <span><img src="img/btn/ICE.png" alt="">填寫時段：<input type="text" name="courseSlot" id=""
            placeholder="ex:上午10:00"></span>
        <span><img src="img/btn/ICE.png" alt="">選擇人數：<select name="resPpl" id="apply-num"></select></span>
        <div class="form-btn">
          <button type="submit" class="form-ice-btn-out" >
            <span class="form-ice-btn-in">
              <img src="img/btn/ICE.png" alt="">
              確認預約
            </span>
          </button>
        </div>
      </form>

    </div>

  </section>

  <footer>
    <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
  </footer>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/course.js"></script>
  <script src="js/calendar.js"></script>
  <script src="js/shop.js"></script>
  <script src="js/login.js"></script>


</body>

</html>