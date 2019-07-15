
<!-- //連線資料庫 -->
<?php
$prod_no = $_REQUEST["prod_no"];
$errMsg = "";
try{
  require_once("connect-dd101g3.php");
  $sql = "select * from product where prod_no = :prod_no";
  $products = $pdo->prepare($sql);
  $products->bindValue(":prod_no", $prod_no);
  $products->execute();
}catch(PDOException $e){
  $errMsg .= "錯誤原因 : ".$e -> getMessage(). "<br>";
  $errMsg .= "錯誤行號 : ".$e -> getLine(). "<br>";
}
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
    <link rel="stylesheet" href="css/shop-inside.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/giatao.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>

<body class="page-shop-inside">
    <?php 
    if( $errMsg != ""){ //例外
    echo "<div><center>$errMsg</center></div>";
    }elseif($products->rowCount()==0){
        echo "<div><center>查無此商品資料</center></div>";
    }else{
        $prodRow = $products->fetchObject();
    ?>
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
                        <a id="qa-item-show" class="nav-text" href="qa.html" title="戀愛冰品"><img
                                src="img/navBar/navIcon.png" alt="iceIcon" /><span>戀愛冰品</span></a>
                    </li>
                    <li>
                        <a id="custom-item-show" class="nav-text" href="custom.html" title="冰棒客製"><img
                                src="img/navBar/navIcon.png" alt="iceIcon" /><span>冰棒客製</span></a>
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
                        <a id="course-item-show" class="nav-text" href="course.html" title="體驗課程"><img
                                src="img/navBar/navIcon.png" alt="iceIcon" /><span>體驗課程</span></a>
                        <ul id="nav-drop-down-menu" class="nav-drop-down-menu">
                            <li><a href="courseGroup.html">揪團課程</a></li>
                            <li><a href="courseGeneral.html">一般課程</a></li>
                        </ul>
                    </li>
                    <li>
                        <a id="new-item-show" class="nav-text" href="news.html" title="最新消息"><img
                                src="img/navBar/navIcon.png" alt="iceIcon" /><span>最新消息</span></a>
                    </li>
                    <li>
                        <a id="about-item-show" class="nav-text" href="javascript:;" title="關於園區"><img
                                src="img/navBar/navIcon.png" alt="iceIcon" /><span>關於園區</span></a>
                    </li>
                    <li class="nav-item-icom-group">
                        <ul class="nav-item-icom">
                            <li class="shopping-cart-icon">
                                <a href="javascript:;"><img src="img/navBar/shoppingCartIcon.png" alt="購物車" /></a>
                            </li>
                            <li class="member-icon">
                                <a class="nav-icon-login" href="javascript:;"><img src="img/navBar/memberIcon.png"
                                        alt="會員" />
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


    <section class="item-detailed  ">
        <div class="col-lg-6 des-flex m-a">
            <div class="detailed-pic col-lg-6 col-10 rela ">
                <div class="detaild-img-box col-lg-8 col-8 ">
                    <img src="database/img_prod/<?php echo $prodRow->prod_pic ?>" alt="" class="detailed-ice">
                    <img src="img/shop/collection-red.png" alt="" class="collection">
                </div>
            </div>
            <div class="detailed-content col-lg-6">
                <div class="detailed-content-box col-lg-12">
                    <h3 class="detailed-name"></h3>
                    <div class="detailed-star"><?php echo $prodRow->prod_name;?>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(4.5)</span>
                    </div>
                    <p class="detailed-text">
                    <?php echo $prodRow->prod_desc;?>
                    </p>
                    <div class="pri-btn">
                        <p class="detailed-pri">NT<?php echo $prodRow->prod_price;?></p>
                        <div class="detailed-button ">
                            <div class="btn-numbox dis-mobile-n">
                                <form id='myform' method='POST' action='#'>
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="detaild-button"> 
                        <div class="detaild-shop-buy">
                            <span class="detaild-shop-btn">加入購物車 </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="review-message ">
        <div class="message-input-box col-lg-7 col-10 m-a">
            <h3 class="message-title">留言</h3>
            <div class="message-input col-12 m-a">
                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="請輸入評論"></textarea>
            </div>
            <div class="sentout-btn-box">
                <div class="sentout-btn">
                    <span class="sentout-btn-in">送出
                    </span></div>
            </div>
        </div>
        <div class="other-review-message-box col-lg-7 col-10 p-10 m-a">
            <div class="other-review-message">
                <div class="total-review-people">總評論人數(15)</div>


                <div class="other-review-wrap">
                    <div class="total-review-number flex">
                        <div class="number-pic col-2">
                            <img src="img/navBar/memberIcon.png" alt="">
                        </div>
                        <div class="number-information col-6">
                            <p class="number-name">david</p>
                            <div class="number-star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(4.5)</span>
                            </div>
                        </div>
                        <p class="col-3 date">2019/03/05</p>
                    </div>
                    <div class="review-text col-12">
                        <p class="number-review-text">
                            我知道好我知道好我知道我知道好我知道好我知道好我知道我知道好我知道好我知道好我知道我知道好我知道好我知道好我我知道好我知道好我知道好我知道我知道好我知道好我知道好我知道我知道好我知道好我知道好我知道我知道好我知道好我知道好我知道知道我知道好我知道好我知道好我知道v好我知道好我知道好我知道好我知道好我知道好我知道好我知道好
                        </p>
                    </div>
                    <div class="report-btn">
                        <input type="submit" value="檢舉" class="report">
                    </div>
                </div>
                <div class="other-review-wrap">
                    <div class="total-review-number flex">
                        <div class="number-pic col-2">
                            <img src="img/navBar/memberIcon.png" alt="">
                        </div>
                        <div class="number-information col-6">
                            <p class="number-name">david</p>
                            <div class="number-star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(4.5)</span>
                            </div>
                        </div>
                        <p class="col-3 date">2019/03/05</p>
                    </div>
                    <div class="review-text col-12">
                        <p class="number-review-text">我知道好我知道好我知道好我知道好我知道好我知道好我知道好我知道好我知道好我知道好</p>
                    </div>
                    <div class="report-btn">
                        <input type="submit" value="檢舉" class="report">
                    </div>
                </div>
                <div class="other-review-wrap">
                    <div class="total-review-number flex">
                        <div class="number-pic col-2">
                            <img src="img/navBar/memberIcon.png" alt="">
                        </div>
                        <div class="number-information col-6">
                            <p class="number-name">david</p>
                            <div class="number-star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(4.5)</span>
                            </div>
                        </div>
                        <p class="col-3 date">2019/03/05</p>
                    </div>
                    <div class="review-text col-12">
                        <p class="number-review-text">我知道好我知道好我知道好我知道好我知道好我知道好我知道好我知道好我知道好我知道好</p>
                    </div>
                    <div class="report-btn">
                        <input type="submit" value="檢舉" class="report">
                    </div>
                </div>


            </div>

        </div>

    </section>
    <?php
    }
    ?>













    <!-- 
    <footer>
        <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
    </footer> -->
    <script src="js/nav.js"></script>
</body>

</html>