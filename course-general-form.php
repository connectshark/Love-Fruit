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
  <link rel="stylesheet" href="css/course.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/courseP.css">
</head>

<body>
<?php
    require_once("nav.php");
    ?>
  
    <section class="general-form-wrap">

    <div class="wrapper">
      <div class="title">
        <img src="img/ribbon.png" alt="title-img">
        <h3 class="general-form-title">一般課程預約</h3>
      </div>

      <form action="" method="">
        <div class='form-info'>
          <img src="img/btn/ICE.png" alt="title-img">
          <p>選擇課程：</p>
          <div class="check">

            <input type="radio" name="course" id="course1" value="">
            <label for="course1">戀愛小馬夢幻冰品</label>
            <span class="check-pic"><img src="img/course/checked.png" alt=""></span>
            <input type="radio" name="course" id="course2" value="">
            <label for="course2">情人繽紛彩繪冰棒</label>
            <span class="check-pic"><img src="img/course/checked.png" alt=""></span>
          </div>
        </div>
        <div class='form-info'>
          <img src="img/btn/ICE.png" alt="title-img">
          <p>選擇日期：</p>
          <div id="date-picker">
            <table>
              <caption id="mon"></caption>
              <tr>
                <th>日</th>
                <th>一</th>
                <th>二</th>
                <th>三</th>
                <th>四</th>
                <th>五</th>
                <th>六</th>
              </tr>
              <tr>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
              </tr>
              <tr>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
              </tr>
              <tr>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
              </tr>
              <tr>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
              </tr>
              <tr>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
              </tr>
              <tr>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
                <td class="nowDate"></td>
              </tr>
            </table>
          </div>
        </div>
        <div class='form-info'>
          <img src="img/btn/ICE.png" alt="">
          <p>選擇時段：</p>
          <div class="check">
            <input type="radio" name="time" id="time1" value="">
            <label for="time1">上午 10:00</label> <span class="check-pic"><img src="img/course/checked.png" alt=""></span>

            <input type="radio" name="time" id="time2" value="">
            <label for="time2">下午 01:00</label> <span class="check-pic"><img src="img/course/checked.png" alt=""></span>

            <input type="radio" name="time" id="time3" value="">
            <label for="time3">下午 03:00</label> <span class="check-pic"><img src="img/course/checked.png" alt=""></span>
          </div>
        </div>
        <div class='form-info'>
          <img src="img/btn/ICE.png" alt="">
          <p>選擇人數：</p>
          <select name="" id="apply-num"></select>
        </div>
        <div class="form-btn">
          <a class="form-ice-btn-out" href="javascript:;">
            <span class="form-ice-btn-in">
              <img src="img/btn/ICE.png" alt="">
              確認預約
            </span>
          </a>
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

</body>

</html>