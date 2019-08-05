<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="UTF-8" />
    <meta name="keywords" content="菓籽戀冰所" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>菓籽戀冰所</title>
    <link rel="icon" href="img/navBar/logo.png" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/cart-order.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body class="page-confirm">
<?php
    require_once("nav.php");
    ?>

        <section class="confirm-column container ">
            <h2 class="confirm-title text-center">訂單確認</h2>
            <div class="list-wrap des-flex ju-c ai-c dis-mobile-n p-10">
                <div class="col-lg-3 text-center"><span>商品</span></div>
                <div class="col-lg-3 text-center"><span>品名</span></div>
                <div class="col-lg-3 text-center"><span>單價</span></div>
                <div class="col-lg-3 text-center"><span>數量</span></div>
                <div class="col-lg-3 text-center"><span>小計</span></div>
            </div>
        </section>
        <?php
        $total = 0;
        if (isset($_SESSION['cart'])){

       
        foreach($_SESSION['cart'] as $i=>$value){
        $total += $_SESSION["cart"][$i]["prod_price"]*$_SESSION["cart"][$i]["qty"];
        ?>
       
       
        <div class="confirm-row fw-w container text-center p-10 cart-row flex ju-c ai-c rela">
            <div class="row-pic col-lg-3 col-6 "><div class="row-pic-box m-a"><img src="<?php echo $_SESSION["cart"][$i]["prod_pic"]?>"></div></div>
            <div class="row-name col-lg-3 col-6  ">
              <p><?php echo $_SESSION["cart"][$i]["prod_name"] ?></p>
              <div>品名:
                  <span><?php echo $_SESSION["cart"][$i]["prod_name"] ?></span>
              </div>  
              <div>數量:
                  <span><?php echo $_SESSION["cart"][$i]["qty"] ?></span>
                </div>  
                <div>單價:
                  <span><?php echo $_SESSION["cart"][$i]["prod_price"]?></span>
                </div>  
            </div>
            <div class="confirm-unit-price col-lg-3 col-6 dis-mobile-n "><?php echo $_SESSION["cart"][$i]["prod_price"]?></div>
            <div class="confirm-btn col-lg-3 col-6">
              <span>
                <?php echo $_SESSION["cart"][$i]["qty"]?>
              </span>
          </div>
            <div class="col-lg-3 col-6 small-total"><span>NT<?php echo ($_SESSION["cart"][$i]["prod_price"])*($_SESSION["cart"][$i]["qty"])?></span></div>
        </div>

      
        
        <?php
        } //foreach
      } //if結束點
        ?>
         
        <div class="confirm-total container p-10 ">
            <p><span>總計:NT<?php echo $total ?></span></p>
        </div>
   
        <section class="pay-transport container p-20 ">
            <h3 class="pay-transport-title">付款&貨運</h3>
        <form>  
            <div class="pay-transport-btn">
              <ul class="tabtitle">
                <li class="pay col-lg-2 "><a href="#pay-way">付款方式</a></li>
                <li class="transport col-lg-2"><a href="#transport-way">貨運方式</a> </li>
                <li class="recipient col-lg-2"><a href="#recipient">收件人資訊</a></li>
              </ul>
            </div>
        
              <div class="p-10 rela tab-inner" id="pay-way">
                <input type="radio" name="pay" value="0">貨到付款
                <input type="radio" name="pay"  value="1">線上刷卡
              </div>
              
              <div class="p-10 rela tab-inner" id="transport-way">
                  <input type="radio" name="transport" value="0">7-11取貨
                  <input type="radio" name="transport"  value="1">宅配
              </div>

              <div class="p-10 tab-inner" id="recipient">
                  姓名:<input type="text" id="name" name="name" value=""><br>               
                  電話:<input type="text" id="phone" name="phone" value=""><br>  
                  地址:<input type="text" id="add" name="add" value=""><br>  
                  信箱:<input type="text" id="email" name="email" value=""><br>  
                  <div class="p-10">
                    <input type="checkbox" name="same-member" id="same-member">同會員資料
                  </div>
              </div>
          </form>     
  
        </section>  


        <div class="confirm-btn container ju-c;">
            <a href="cart-show.php"> 
              <div class="Previous">
                <span class="Previous-in">上一步</span>
              </div>
            </a>
            <a class="confirm-a">
               <div class="confirm-shop">
                <span class="confirm-shop-in">
                  確認結帳
                <img src="img/btn/ICE.png" alt="" class="testclass">
                </span>
              </div> 
            </a>
           
        </div>


        <footer>
                <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
          </footer>
              <script src="js/jquery-3.4.1.min.js"></script>
              <script src="js/nav.js"></script>
              <script src="js/login.js"></script>
              <script src="js/cart-order.js"></script>
</body>
</html>