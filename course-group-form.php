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

  <section class="group-form-wrap">


    <div class="wrapper">

      <div class="title">
          <img src="img/ribbon.png" alt="title-img">
        <h3 class="group-form-title">揪團課程預約</h3>
      </div>

      <form action="" method="" class="">
        <span><img src="img/btn/ICE.png" alt="">你的團名：<input type="text" name="gname" id="" placeholder="ex:揪團戀冰"></span>
        <span><img src="img/btn/ICE.png" alt="">選擇日期：
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
        </span>
        <span><img src="img/btn/ICE.png" alt="">填寫時段：<input type="text" name="gname" id=""
            placeholder="ex:上午10:00"></span>
        <span><img src="img/btn/ICE.png" alt="">選擇人數：<select name="" id="apply-num"></select></span>
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