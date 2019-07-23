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
        <input type="checkbox" id="menu-control" />
        <header id="header">
          <div class="item-group">
            <div class="logo-item">
              <a href="index.html" class="logo" title="菓籽戀冰所"
                ><img src="img/navBar/logo.png" alt="菓籽戀冰所"
              /></a>
              <label class="hb" for="menu-control">
                <span class="bar bar1"></span>
                <span class="bar bar2"></span>
                <span class="bar bar3"></span>
              </label>
            </div>
            <div class="nav-item">
              <ul class="nav-list nav-list-mp">
                <li>
                  <a
                    id="qa-item-show"
                    class="nav-text"
                    href="qa.html"
                    title="戀愛冰品"
                    ><img src="img/navBar/navIcon.png" alt="iceIcon" /><span
                      >戀愛冰品</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    id="custom-item-show"
                    class="nav-text"
                    href="custom.html"
                    title="冰棒客製"
                    ><img src="img/navBar/navIcon.png" alt="iceIcon" /><span
                      >冰棒客製</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    id="message-item-show"
                    class="nav-text"
                    href="leavemessage.html"
                    title="愛的留言"
                    ><img src="img/navBar/navIcon.png" alt="iceIcon" /><span
                      >愛的留言</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    id="newshop-item-show"
                    class="nav-text"
                    href="newshop.html"
                    title="冰品商城"
                    ><img src="img/navBar/navIcon.png" alt="iceIcon"/><span
                      >冰品商城</span
                    ></a
                  >
                </li>
              </ul>
              <ul class="nav-list nav-list-login">
                <li id="nav-drop-down-menu-hover" class="nav-drop-down-menu-hover">
                  <a
                    id="course-item-show"
                    class="nav-text"
                    href="course.html"
                    title="體驗課程"
                    ><img src="img/navBar/navIcon.png" alt="iceIcon" /><span
                      >體驗課程</span
                    ></a
                  >
                  <ul id="nav-drop-down-menu" class="nav-drop-down-menu">
                    <li><a href="courseGroup.html">揪團課程</a></li>
                    <li><a href="courseGeneral.html">一般課程</a></li>
                  </ul>
                </li>
                <li>
                  <a
                    id="new-item-show"
                    class="nav-text"
                    href="news.html"
                    title="最新消息"
                    ><img src="img/navBar/navIcon.png" alt="iceIcon" /><span
                      >最新消息</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    id="about-item-show"
                    class="nav-text"
                    href="javascript:;"
                    title="關於園區"
                    ><img src="img/navBar/navIcon.png" alt="iceIcon" /><span
                      >關於園區</span
                    ></a
                  >
                </li>
                <li class="nav-item-icom-group">
                  <ul class="nav-item-icom">
                    <li class="shopping-cart-icon">
                      <a href="javascript:;"
                        ><img src="img/navBar/shoppingCartIcon.png" alt="購物車"
                      /></a>
                    </li>
                    <li class="member-icon">
                      <a class="nav-icon-login" href="javascript:;"
                        ><img src="img/navBar/memberIcon.png" alt="會員" />
                        <span>登入</span></a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <img class="nav-bar-mp" src="img/navBar/ＭpNavBar.png" alt="ＭpNavBar" />
    
          <div class="icon-mp">
            <div class="icon-login-box-mp">
              <a class="nav-icon-login" href="javascript:;"
                ><img src="img/navBar/memberIcon.png" alt="會員" />
                <span>登入</span></a
              >
            </div>
            <a href="javascript:;"
              ><img src="img/navBar/shoppingCartIcon.png" alt="購物車"
            /></a>
          </div>
          <img
            class="shopping-cart-icon-mp"
            src="img/navBar/shoppingCartIcon.png"
            alt="shoppingCartIcon.png"
          />
        </header>

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
        }
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
                  <input type="radio" name="transport"  value="2">宅配
              </div>

              <div class="p-10 tab-inner" id="recipient">
                  姓名:<input type="text" id="name" name="name" value=""><br>               
                  電話:<input type="text" id="phone" name="phone" value=""><br>  
                  地址:<input type="text" id="add" name="add" value=""><br>  
                  信箱:<input type="text" id="email" name="email" value=""><br>  
                  <div class="p-10">
                    <input type="checkbox" name="same-member" id="tick1">
                    <label for="tick1"><span></span></label>
                    <span class="onlion-check">同會員資料</span>
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
              <script src="js/nav.js"></script>
              <script src="js/jquery-3.4.1.min.js"></script>
              <script src="js/cart-order.js"></script>
</body>
</html>