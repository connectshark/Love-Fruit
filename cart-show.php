<?php 
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="keywords" content="菓籽戀冰所" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>菓籽戀冰所</title>
  <link rel="icon" href="img/navBar/logo.png" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/cart-show.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>

<body class="page-cartlist">

  <input type="checkbox" id="menu-control" />
  <header id="header">
    <div class="item-group">
      <div class="logo-item">
        <a href="index.html" class="logo" title="菓籽戀冰所"><img src="img/navBar/logo.png" alt="菓籽戀冰所" /></a>
        <label class="hb" for="menu-control">
          <span class="bar bar1"></span>
          <span class="bar bar2"></span>
          <span class="bar bar3"></span>
        </label>
      </div>
      <div class="nav-item">
        <ul class="nav-list nav-list-mp">
          <li>
            <a id="qa-item-show" class="nav-text" href="qa.html" title="戀愛冰品"><img src="img/navBar/navIcon.png"
                alt="iceIcon" /><span>戀愛冰品</span></a>
          </li>
          <li>
            <a id="custom-item-show" class="nav-text" href="custom.html" title="冰棒客製"><img src="img/navBar/navIcon.png"
                alt="iceIcon" /><span>冰棒客製</span></a>
          </li>
          <li>
            <a id="message-item-show" class="nav-text" href="leavemessage.html" title="愛的留言"><img
                src="img/navBar/navIcon.png" alt="iceIcon" /><span>愛的留言</span></a>
          </li>
          <li>
            <a id="newshop-item-show" class="nav-text" href="newshop.html" title="冰品商城"><img
                src="img/navBar/navIcon.png" alt="iceIcon" /><span>冰品商城</span></a>
          </li>
        </ul>
        <ul class="nav-list nav-list-login">
          <li id="nav-drop-down-menu-hover" class="nav-drop-down-menu-hover">
            <a id="course-item-show" class="nav-text" href="course.html" title="體驗課程"><img src="img/navBar/navIcon.png"
                alt="iceIcon" /><span>體驗課程</span></a>
            <ul id="nav-drop-down-menu" class="nav-drop-down-menu">
              <li><a href="courseGroup.html">揪團課程</a></li>
              <li><a href="courseGeneral.html">一般課程</a></li>
            </ul>
          </li>
          <li>
            <a id="new-item-show" class="nav-text" href="news.html" title="最新消息"><img src="img/navBar/navIcon.png"
                alt="iceIcon" /><span>最新消息</span></a>
          </li>
          <li>
            <a id="about-item-show" class="nav-text" href="javascript:;" title="關於園區"><img src="img/navBar/navIcon.png"
                alt="iceIcon" /><span>關於園區</span></a>
          </li>
          <li class="nav-item-icom-group">
            <ul class="nav-item-icom">
              <li class="shopping-cart-icon">
                <a href="javascript:;"><img src="img/navBar/shoppingCartIcon.png" alt="購物車" /></a>
              </li>
              <li class="member-icon">
                <a class="nav-icon-login" href="javascript:;"><img src="img/navBar/memberIcon.png" alt="會員" />
                  <span>登入</span></a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <img class="nav-bar-mp" src="img/navBar/ＭpNavBar.png" alt="ＭpNavBar" />

    <div class="icon-mp">
      <div class="icon-login-box-mp">
        <a class="nav-icon-login" href="javascript:;"><img src="img/navBar/memberIcon.png" alt="會員" />
          <span>登入</span></a>
      </div>
      <a href="javascript:;"><img src="img/navBar/shoppingCartIcon.png" alt="購物車" /></a>
    </div>
    <img class="shopping-cart-icon-mp" src="img/navBar/shoppingCartIcon.png" alt="shoppingCartIcon.png" />
  </header>
 

  
  <div class="cart-head m-a">
    <h2 class="cart-title">購物清單</h2>
    <div class="cart-column des-flex ai-c ju-c  p-10 dis-mobile-n ">
      <div class="col-lg-2"><span class="text-20">商品</span></div>
      <div class="col-lg-2"><span class="text-20">品名</span></div>
      <div class="col-lg-2"><span class="text-20">單價</span></div>
      <div class="col-lg-2"><span class="text-20">數量</span></div>
      <div class="col-lg-2"><span class="text-20">小計</span></div>
      <div class="col-lg-2 "><span class="text-20">刪除</span></div>
    </div>
  </div>

  <?php
  foreach($_SESSION['cart'] as $i=>$value){

    // echo $_SESSION["cart"][$prod_no];
  
  ?>

  <form action="get">
    <div class="cart-list-item fw-w container text-center p-10 cart-row flex ju-c ai-c rela">
      <div class="col-lg-2 col-6 item-pic">
        <div class="col-2 m-a"><img src="img/shop/<?php echo $_SESSION["cart"][$i]["prod_pic"]?>" alt=""></div>
      </div>
      <div class="col-lg-2 col-6 mobile-price">
        <p><?php echo $_SESSION["cart"][$i]["prod_name"] ?></p>
        <p class="dis-lg-n">NT<?php echo $_SESSION["cart"][$i]["prod_price"] ?></p>
      </div>
      <div class="col-lg-2 col-6 dis-mobile-n unit-price">NT<?php echo $_SESSION["cart"][$i]["prod_price"] ?></div>
      <div class="col-lg-2 col-6 cartlist-btn">
        <span class="btn-numbox col-4">
          <input type='button' value='-' class='qtyminus' field='quantity' />
          <input type='text' name='quantity' value='0' class='qty' />
          <input type='button' value='+' class='qtyplus' field='quantity' />
        </span>
      </div>
      <div class="col-lg-2 col-6 small-total"><span>NT<?php echo ($_SESSION["cart"][$i]["prod_price"])*($_SESSION["cart"][$i]["qty"])?></span></div>
      <div class="col-lg-2 delete"><span><i class="fas fa-trash"></i></span></div>
    </div>
  </form>
 
 
<?php
  }
 ?>

  <div class="total-pri container p-10 ">
    <p><span>總計:450元</span></p>
  </div>
 <div class="cart-btn container des-flex ju-c">
    <a href="shop.html">
      <div class="continue-shop"><span class="continue-shop-in">繼續購物</span></div>
    </a>

  </div>





<!-- 備份 -->
  <!-- <form action="get">
    <div class="cart-list-item fw-w container text-center p-10 cart-row flex ju-c ai-c rela">
      <div class="col-lg-2 col-6 item-pic">
        <div class="col-2 m-a"><img src="img/shop/inlove/inlove-ball01.png" alt=""></div>
      </div>
      <div class="col-lg-2 col-6 mobile-price ">
        <p>芋頭牛奶</p>
        <p class="dis-lg-n">價格:450</p>
      </div>
      <div class="col-lg-2 col-6 dis-mobile-n unit-price">NT450</div>
      <div class="col-lg-2 col-6 cartlist-btn">
        <span class="btn-numbox col-4">
          <input type='button' value='-' class='qtyminus' field='quantity' />
          <input type='text' name='quantity' value='0' class='qty' />
          <input type='button' value='+' class='qtyplus' field='quantity' />
        </span>
      </div>
      <div class="col-lg-2 col-6 small-total"><span>小計450</span></div>
      <div class="col-lg-2 delete"><span><i class="fas fa-trash"></i></span></div>
    </div>
  </form>
  <div class="total-pri container p-10 ">
    <p><span>總計:450元</span></p>
  </div>
  <div class="cart-btn container des-flex ju-c">
    <a href="shop.html">
      <div class="continue-shop"><span class="continue-shop-in">繼續購物</span></div>
    </a>

  </div>

 -->

  <div class="cart-btn container des-flex ju-c;">
    <a href="cart-order.html">
      <button type="submit" class="button">
        <div class="go-buy"><span class="go-buy-in">進行結帳</span>
      </button>
    </a>

  </div>














  <section class="maybe-like container ">
    <h2 class="maybe-title">推薦商品</h2>
    <div class="maybe-wrap des-flex rela">
      <img src="img/shop/left-arrow.png" alt="" class="left-arrow">
      <img src="img/shop/right-arrow.png" alt="" class="right-arrow">

      <div class="news-item col-7 col-lg-3 m-a rela">
        <div class="newpic">
          <img src="img/shop/inlove/inlove-ball01.png" alt="">
          <img src="img/shop/collection-red.png" alt="" class="new-collection-love">
        </div>
        <p class="new-name">芋頭芒果</p>
        <p class="new-pic">NT280$</p>
      </div>
      <div class="news-item col-7 col-lg-3 m-a rela">
        <div class="newpic">
          <img src="img/shop/inlove/inlove-ball01.png" alt="">
          <img src="img/shop/collection-red.png" alt="" class="new-collection-love">
        </div>
        <p class="new-name">芋頭芒果</p>
        <p class="new-pic">NT280$</p>
      </div>
      <div class="news-item col-7 col-lg-3 m-a rela">
        <div class="newpic">
          <img src="img/shop/inlove/inlove-ball01.png" alt="">
          <img src="img/shop/collection-red.png" alt="" class="new-collection-love">
        </div>
        <p class="new-name">芋頭芒果</p>
        <p class="new-pic">NT280$</p>
      </div>
    </div>
  </section>


  <footer>
    <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
  </footer>
  <script src="js/nav.js"></script>
  <!-- <script src="js/cartlist.js"></script> -->
  <!-- <script src="js/jquery-3.4.1.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- <script>
    $(function () {
      var $li = $('ul.tabtitle li');
      $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.tab-inner').hide();

      $li.click(function () {
        $($(this).find('a').attr('href')).show().siblings('.tab-inner').hide();
        $(this).addClass('active').siblings('.active').removeClass('active');
      });
    });




  </script> -->
</body>

</html>