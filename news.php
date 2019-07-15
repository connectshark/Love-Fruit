<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<?php
    require_once("nav.php");
    ?>

  <div class="news-wrap ">
      <section class="banner bubble-box">
          <div class="title">
            <div class="img-bg">
              <img src="img/ribbon.png" alt="標題底圖">
              <span class="news">最新消息</span>
            </div>
          </div>
          <div class="air-ball">
            <img src="img/news/orange-ball.png" alt="橘子熱氣球">
            <img src="img/news/orange-ball.png" alt="橘子熱氣球">
          </div>
      </section>

    <section class="select ">
      <div class="select-group">
        <div class="select-filter-group">
          <h3>篩選條件:</h3>
        
            <div class="filter-item filter-active">
              <button type="button" class="all">全部消息</button>
            </div>
            <div class="filter-item">
              <button type="button" class="newgroup">揪團快訊</button>
            </div>
            <div class="filter-item">
              <button type="button" class="park">園區公告</button>
            </div>
            <div class="filter-item">
              <button type="button" class="newpds">新品上市</button>
            </div>
            <div class="filter-item">
              <button type="button" class="limit">季節限定</button>
            </div>
         
          <div class="mobile">
            <select name="" id="">
              <option value="all" class="all">全部消息</option>
              <option value="newgroup" class="newgroup">揪團快訊</option>
              <option value="park" class="park">園區公告</option>
              <option value="newpds" class="newpds">新品上市</option>
              <option value="limit" class="limit">季節限定</option>
            </select>
          </div>
        </div>
        
      </div>

    </section>

    <section class="wrapper">

      <div class="items-group">
        <div class="item">
          <a href="newsinner.php">
            <div class="sort">園區公告</div>
            <div class="img"><img src="" alt=""></div>
            <span class='time'>2019.07.08</span>
            <span class="content">
              <h3>3F創意遊戲室暫停開放公告</h3><img class="ice" src="img/btn/ICE.png" alt="">
            </span>
          </a>
        </div>
        <div class="item">
          <a href="newsinner.php">
            <div class="sort">園區公告 </div>
            <div class="img"><img src="" alt=""></div>
            <span class='time'>2019.07.08</span>
            <span class="content">
              <h3>3F創意遊戲室暫停開放公告</h3><img class="ice" src="img/btn/ICE.png" alt="">
            </span>
          </a>
        </div>
        <div class="item">
          <a href="newsinner.php">
            <div class="sort"> 園區公告</div>
            <div class="img"><img src="" alt=""></div>
            <span class='time'>2019.07.08</span>
            <span class="content">
              <h3>3F創意遊戲室暫停開放公告</h3><img class="ice" src="img/btn/ICE.png" alt="">
            </span>
          </a>
        </div>
        <div class="item">
          <a href="newsinner.php">
            <div class="sort">園區公告 </div>
            <div class="img"><img src="" alt=""></div>
            <span class='time'>2019.07.08</span>
            <span class="content">
              <h3>3F創意遊戲室暫停開放公告</h3><img class="ice" src="img/btn/ICE.png" alt="">
            </span>
          </a>
        </div>
        <div class="item">
          <a href="newsinner.php">
            <div class="sort">園區公告 </div>
            <div class="img"><img src="" alt=""></div>
            <span class='time'>2019.07.08</span>
            <span class="content">
              <h3>3F創意遊戲室暫停開放公告</h3><img class="ice" src="img/btn/ICE.png" alt="">
            </span>
          </a>
        </div>
        <div class="item">
          <a href="newsinner.php">
            <div class="sort">園區公告</div>
            <div class="img"><img src="" alt=""></div>
            <span class='time'>2019.07.08</span>
            <span class="content">
              <h3>3F創意遊戲室暫停開放公告</h3><img class="ice" src="img/btn/ICE.png" alt="">
            </span>
          </a>
        </div>
      </div>

      <div id="navigatediv">

      <div class="bookmark">
        <ul>
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
        </ul>
      </div>
    </section>

  </div>
  <footer>
    <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
  </footer> 
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/news.js" ></script>
  
</body>

</html>