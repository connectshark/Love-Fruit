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

<?php
    require_once("nav.php");
    ?>
 

  
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
<div class="show-wrap">
  <div id="empty-text"><span></span></div>
      <?php
      $total = 0;
      foreach($_SESSION['cart'] as $i=>$value){
      $total += $_SESSION["cart"][$i]["prod_price"]*$_SESSION["cart"][$i]["qty"];
      ?>
  <div class="cart-list-item fw-w container text-center p-10 cart-row flex ju-c ai-c rela">
      <input type="hidden" value="<?php echo $i ?>">
      <div class="col-lg-2 col-6 item-pic">
        <div class="col-3 m-a"><img src="<?php echo $_SESSION["cart"][$i]["prod_pic"]?>" alt=""></div>
      </div>
      
      <div class="col-lg-2 col-6 mobile-price">
        <p>品名:<?php echo $_SESSION["cart"][$i]["prod_name"] ?></p>
        <p class="dis-lg-n">單價:NT<?php echo $_SESSION["cart"][$i]["prod_price"] ?></p>
      </div>
      <div class="col-lg-2 col-6 dis-mobile-n unit-price">NT <span><?php echo $_SESSION["cart"][$i]["prod_price"] ?></span> </div>
      <div class="col-lg-2 col-6 cartlist-btn">
        <form action="">
          <span class="btn-numbox col-4">
              <input type='button' value='-' class='qtyminus' field='quantity' />
              <input type='number' value='<?php echo $_SESSION["cart"][$i]["qty"] ?>' class='qty'    name='qty'  />
              <input type='button' value='+' class='qtyplus' field='quantity' />
              <input type="hidden" name="prod_no" value="<?php echo $i; ?>">
              <input type="hidden" name="prod_name" value="<?php echo $_SESSION["cart"][$i]["prod_name"]?>">
              <input type="hidden" name="prod_price" value="<?php echo $_SESSION["cart"][$i]["prod_price"]?>">	
          </span>
        </form>
      </div>
      <div class="col-lg-2 col-6 small-total">NT<span class="small-total-span"><?php echo ($_SESSION["cart"][$i]["prod_price"])*($_SESSION["cart"][$i]["qty"])?></span></div>
      <form action=" delete-cart.php " class="col-lg-2 delete">
        <div class="col-lg-2 col-1 "><img src="database/img_prod/trash.png" alt="" class="trash-img"></div>
      </form>
  </div>
    <?php
      }
    ?>
</div>
<div class="total-pri container p-10 ">
  <p>總計:NT<span id="big-total"><?php echo $total ?></span></p>
</div>
 <div class="cart-btn container des-flex ju-c">
    <a href="shop.php">
      <div class="continue-shop"><span class="continue-shop-in">繼續購物</span></div>
    </a>
    <a href="cart-order.php">
          <div class="go-buy"><span class="go-buy-in">進行結帳</span></div>
      </a>
</div>

 




  <!-- <section class="maybe-like container ">
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
  </section> -->


  <footer>
    <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
  </footer>
  <script src="js/nav.js"></script>
  <script src="js/cart-show.js"></script>
  <script src="js/login.js"></script>
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