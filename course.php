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
    <link rel="stylesheet" href="css/courseP.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/temporary-cart.css">
  </head>   
  <body>
    <?php
    require_once("nav.php");
    ?>

    <section class="welcome-wrap">
    <div class="spaceship"><img src="img/course/spaceship.png" alt="spaceship"></div>
            <div class="wrapper">
              
                <div class="kanban kanban-y col-md-6 ">
                    <a href="course-group.php">
                        <div class="group-item item">
                            <div class="gift gift-y"> <img src="img/course/gift-yellow.png" alt="禮物黃帶"> <span class="group-subtitle subtitle">不定時開課</span></div>
                            <div class="title-box"><h2 class="group-title title">揪團課程</h2></div>
                        </div>
                   </a>
                </div>

                <div class="kanban kanban-p col-md-6 ">
                    <a href="course-general.php">
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
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/shop.js"></script>
     <script src="js/nav.js"></script>
     <script src="js/login.js"></script>
  </body>
</html>
