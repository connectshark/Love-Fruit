<?php
session_start();
$errMsg = "";
try {
	require_once("connect-dd101g3.php");

	$sql = "select * from product p , love_stage l where p.stage_no = l.stage_no";
	$products = $pdo->query($sql);
	$prodRows = $products->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
}
?> 

<!DOCTYPE html>
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
    <link rel="stylesheet" href= "css/common.css" />
    <link rel="stylesheet" href="css/temporary-cart.css">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>

<body>
 

           
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
                        <a id="newshop-item-show" class="nav-text" href="shop.html" title="冰品商城"><img
                                src="img/navBar/navIcon.png" alt="iceIcon" /><span>冰品商城</span></a>
                    </li>
                </ul>
                <div class="nav-box"></div>
                <ul class="nav-list nav-list-login">
                    <li id="nav-drop-down-menu-hover" class="nav-drop-down-menu-hover">
                        <a id="course-item-show" class="nav-text" href="courseP.html" title="體驗課程"><img
                                src="img/navBar/navIcon.png" alt="iceIcon" /><span>體驗課程</span></a>
                        <ul id="nav-drop-down-menu" class="nav-drop-down-menu">
                            <li><a href="courseP-group.html">揪團課程</a></li>
                            <li><a href="courseP-general.html">一般課程</a></li>
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
        <div id="robot-container" class="robot-container">
            <div id="robot-title-block" class="robot-title-block">
                <span class="robot-title-icon"><img id="robot-title-icon-img" src="img/navBar/robot/robot-icon.png"
                        alt="robot-icon" />
                </span>
                <h3>冰棒小達人</h3>
                <div class="robot-pic">
                    <img src="img/navBar/robot/robot.png" alt="robot-pic" />
                </div>
            </div>
            <div id="robot-conversation-block" class="robot-conversation-block">
                <div id="robot-conversation-list">
                    <div class="robot-conversation">
                        <p class="robot_text"><span>小達人:</span>請問有需要幫忙嗎？</p>
                    </div>
                </div>
            </div>
            <ul class="chatBot-keyword">
                <li class="fruit">粿籽戀冰所</li>
                <li class="fruit">戀冰測驗</li>
                <li class="fruit">客製冰棒</li>
                <li class="fruit">戀菓商店</li>
                <li class="fruit">愛的留言</li>
                <li class="fruit">體驗課程</li>
                <li class="fruit">營業時間</li>
                <li class="fruit">店家地址</li>
                <li class="fruit">店家電話</li>
            </ul>
            <form>
                <div class="robot-input-block">
                    <textarea name="message" id="message"></textarea>
                    <button type="button" id="robot-submit">送出</button>
                </div>
            </form>
        </div>
        <section id="mini-cart">
            <div class="head">
                <div class="cart-icon">
                    <img src="img/navBar/shoppingCartIcon.png" alt="">
                    <h3>
                        我的購物車
                    </h3>
                </div>
                <div class="cart-close">
                    <i class="fas fa-times ">  
                    </i>
                </div>
            </div>    
            <div id="mini-item">
                <!-- <div class="mini-img col-lg-3"><img src="img/shop/popsicle-single.png" alt=""></div>
                <span class="mini-name col-lg-3">冰心透涼</span>
                <span class="mini-qty col-lg-1">2x</span>
                <span class="mini-pri col-lg-2">NT250</span>
                <div class="mini-trash col-lg-4"><i class="fas fa-trash"></i></div> -->
            </div>
        </section>
    </header>

    <section class="latest-news">
        <div class="title-main">
            <h1 class="title">最新商品</h1>
        </div>
        <div class="owl-carousel owl-theme wrap">
            <div class="item latest-item col-6 col-lg-10">
                <div class="latest-pic">
                    <img src="img/shop/inlove/inlove-ball01.png" alt="">
                    <img src="img/shop/collection-gray.png " alt="" class="latest-collection-love">
                </div>
                <p class="latest-name">芋頭芒果</p>
                <p class="latest-pri">NT280</p>
            </div>
            <div class="item latest-item col-6 col-lg-10">
                <div class="latest-pic">
                    <img src="img/shop/inlove/inlove-ball01.png" alt="">
                    <img src="img/shop/collection-gray.png " alt="" class="latest-collection-love">
                </div>
                <p class="latest-name">芋頭芒果</p>
                <p class="latest-pri">NT280</p>
            </div>
            <div class="item latest-item col-6 col-lg-10">
                <div class="latest-pic">
                    <img src="img/shop/inlove/inlove-ball01.png" alt="">
                    <img src="img/shop/collection-red.png" alt="" class="latest-collection-love">
                </div>
                <p class="latest-name">芋頭芒果</p>
                <p class="latest-pri">NT280</p>
            </div>
            <div class="item latest-item col-6 col-lg-10">
                <div class="latest-pic">
                    <img src="img/shop/inlove/inlove-ball01.png" alt="">
                    <img src="img/shop/collection-red.png" alt="" class="latest-collection-love">
                </div>
                <p class="latest-name">芋頭芒果</p>
                <p class="latest-pri">NT280</p>
            </div>
            <div class="item latest-item col-6 col-lg-10">
                <div class="latest-pic">
                    <img src="img/shop/inlove/inlove-ball01.png" alt="">
                    <img src="img/shop/collection-red.png" alt="" class="latest-collection-love">
                </div>
                <p class="latest-name">芋頭芒果</p>
                <p class="latest-pri">NT280</p>
            </div>
            <div class="item latest-item col-6 col-lg-10">
                <div class="latest-pic">
                    <img src="img/shop/inlove/inlove-ball01.png" alt="">
                    <img src="img/shop/collection-red.png" alt="" class="latest-collection-love">
                </div>
                <p class="latest-name">芋頭芒果</p>
                <p class="latest-pri">NT280</p>
            </div>

        </div>
    </section>

    <section class="general">
        <div class="wrap">
            <div class="roof col-11">
                <div class="title"><span>商店</span></div>
                <img src="img/shop/roof.png" alt="">
            </div>

            <div class="general-type-btn col-11">
                <div class="filter-item filter-active">
                    <button type="button" class="filter" id="all">全部</button>
                </div>
                <div class="filter-item">
                    <button type="button" class="filter" id="single">單身</button>
                </div>
                <div class="filter-item">
                    <button type="button" class="filter" id="first-love">初戀</button>
                </div>
                <div class="filter-item">
                    <button type="button" class="filter" id="fall-in-love">熱戀</button>
                </div>
                <div class="filter-item">
                    <button type="button" class="filter" id="break-up">分手</button>
                </div>
                <div class="filter-item">
                    <button type="button" class="filter" id="popscial">冰棒</button>
                </div>
                <div class="filter-item">
                    <button type="button" class="filter" id="ice-cream">霜淇淋</button>
                </div>
                <div class="filter-item">
                    <button type="button" class="filter" id="icecream-ball">冰淇淋</button>
                </div>
                <div class="select">
                    <select v-model="status" id="select-pull">
                        <option>全部</option>
                        <option>單身</option>
                        <option>初戀</option>
                        <option>熱戀</option>
                        <option>分手</option>
                    </select>
                    <select v-model="status" id="select-pull">
                        <option>冰棒</option>
                        <option>霜淇淋</option>
                        <option>冰淇淋</option>
                    </select>
                </div>

            </div>


            <div class="general-store col-11 col-lg-11">

                <?php
                foreach($prodRows as $i => $prodRow){
                    //檢查商品是否已在購物車中，若是，則數量以購物車中的為主
                    // $prod_no = $prodRow["prod_no"];
                    // if( isset($_SESSION["cart"]) && isset($_SESSION["cart"][$prod_no])){
                    //     $qty = $_SESSION["cart"][$prod_no]["qty"];
                    // }else{
                    //     $qty = 0;
                    // }
                ?>
                        <div class="general-item col-6 col-lg-3 single">
                            <div class="ice-type col-11">
                                <img src="img/shop/icetype-popsicle.png" alt="">
                                <p><?php echo $prodRow["stage_name"] ?></p>
                            </div>
                            <div class="general-item-content col-11 ">
                           
                                <div class="item-img col-12">
                                    <a href="shop-inside.php?prod_no=<?php echo $prodRow["prod_no"]?>">
                                        <img src="img/shop/<?php echo $prodRow["prod_pic"] ?>" alt="" class="product-img">
                                    </a>    
                                    <img src="img/shop/collection-gray.png " alt="" class="latest-collection-love">
                                </div>
                                
                                <div class="item-text ">
                                    <span class="item-name col-12"><?php echo $prodRow["prod_name"] ?></span>
                                    <div class="review col-12">
                                        <i class="fas fa-star star"></i>
                                        <i class="fas fa-star star"></i>
                                        <i class="fas fa-star star"></i>
                                        <i class="fas fa-star star"></i>
                                        <i class="fas fa-star star"></i>
                                        <span>(4.5)</span>
                                    </div>
                                </div>
                                <div class="item-pri ">
                                    <span>
                                        NT<?php echo $prodRow["prod_price"] ?>
                                    </span>

                                    
                                    <div class="btn-numbox">
                                        <!-- <form id='myform' method='POST' action='#'> -->
                                            <input type='button' value='-' class='qtyminus' field='quantity' />
                                            <input type='number' min="1"  name='quantity' value='1' class='qty' />
                                            <input type='button' value='+' class='qtyplus' field='quantity' />
                                            <!-- <input type="hidden" name="prod_no" value="<?php //echo $prodRow["prod_no"]?>">
                                            <input type="hidden" name="prod_name" value="<?php //echo $prodRow["prod_name"]?>">
                                            <input type="hidden" name="prod_price" value="<?php //echo $prodRow["prod_price"]?>">	 -->
                                        <!-- </form> -->
                                    </div>
                                </div>
                                <div class="shop-btn">
                                    <form class="add-cart">
                                        <input type='hidden' name='qty' value='1' class="qty"/>
                                        <input type="hidden" name = prod_pic value = "<?php echo $prodRow["prod_pic"] ?>">
                                        <input type="hidden" name="prod_no" value="<?php echo $prodRow["prod_no"]?>">
                                        <input type="hidden" name="prod_name" value="<?php echo $prodRow["prod_name"]?>">
                                        <input type="hidden" name="prod_price" value="<?php echo $prodRow["prod_price"]?>">	
                                        <div class="shop-buy-btn">
                                            <span class="shop-btn-in">
                                                加入購物車
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                
                <?php
                }
                ?>

                <!-- <div class="general-item col-6 col-lg-3 first-love">
                    <div class="ice-type col-11 ">
                        <img src="img/shop/icetype-popsicle.png" alt="">
                        <p>single</p>
                    </div>
                    <div class="general-item-content col-11 ">
                        <div class="item-img col-12">
                            <img src="img/shop/popsicle-single.png" alt="" class="product-img">
                            <img src="img/shop/collection-gray.png " alt="" class="latest-collection-love">
                        </div>
                        <div class="item-text ">
                            <span class="item-name col-12">芋頭牛奶</span>
                            <div class="review col-12">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <span>(4.5)</span>
                            </div>

                        </div>
                        <div class="item-pri ">
                            <span>
                                NT250
                            </span>
                            <div class="btn-numbox">
                                <form id='myform' method='POST' action='#'>
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </form>
                            </div>
                        </div>
                        <div class="shop-btn">
                            <div class="shop-buy-btn">
                                <span class="shop-btn-in">
                                    加入購物車
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="general-item col-6 col-lg-3 fall-in-love"
                >
                    <div class="ice-type col-11 ">
                        <img src="img/shop/icetype-popsicle.png" alt="">
                        <p>single</p>
                    </div>
                    <div class="general-item-content col-11 ">
                        <div class="item-img col-12">
                            <img src="img/shop/popsicle-single.png" alt="" class="product-img">
                            <img src="img/shop/collection-gray.png " alt="" class="latest-collection-love">
                        </div>
                        <div class="item-text ">
                            <span class="item-name col-12">芋頭牛奶</span>
                            <div class="review col-12">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <span>(4.5)</span>
                            </div>

                        </div>
                        <div class="item-pri ">
                            <span>
                                NT250
                            </span>
                            <div class="btn-numbox">
                                <form id='myform' method='POST' action='#'>
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </form>
                            </div>
                        </div>
                        <div class="shop-btn">
                            <div class="shop-buy-btn">
                                <span class="shop-btn-in">
                                    加入購物車
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="general-item col-6 col-lg-3 break-up">
                    <div class="ice-type col-11 ">
                        <img src="img/shop/icetype-popsicle.png" alt="">
                        <p>single</p>
                    </div>
                    <div class="general-item-content col-11 ">
                        <div class="item-img col-12">
                            <img src="img/shop/popsicle-single.png" alt="" class="product-img">
                            <img src="img/shop/collection-gray.png " alt="" class="latest-collection-love">
                        </div>
                        <div class="item-text ">
                            <span class="item-name col-12">芋頭牛奶</span>
                            <div class="review col-12">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <span>(4.5)</span>
                            </div>

                        </div>
                        <div class="item-pri ">
                            <span>
                                NT250
                            </span>
                            <div class="btn-numbox">
                                <form id='myform' method='POST' action='#'>
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </form>
                            </div>
                        </div>
                        <div class="shop-btn">
                            <div class="shop-buy-btn">
                                <span class="shop-btn-in">
                                    加入購物車
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="general-item col-6 col-lg-3 single">
                    <div class="ice-type col-11 ">
                        <img src="img/shop/icetype-popsicle.png" alt="">
                        <p>single</p>
                    </div>
                    <div class="general-item-content col-11 ">
                        <div class="item-img col-12">
                            <img src="img/shop/popsicle-single.png" alt="" class="product-img">
                            <img src="img/shop/collection-gray.png " alt="" class="latest-collection-love">
                        </div>
                        <div class="item-text ">
                            <span class="item-name col-12">芋頭牛奶</span>
                            <div class="review col-12">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <span>(4.5)</span>
                            </div>

                        </div>
                        <div class="item-pri ">
                            <span>
                                NT250
                            </span>
                            <div class="btn-numbox">
                                <form id='myform' method='POST' action='#'>
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </form>
                            </div>
                        </div>
                        <div class="shop-btn">
                            <div class="shop-buy-btn">
                                <span class="shop-btn-in">
                                    加入購物車
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="general-item col-6 col-lg-3 first-love">
                    <div class="ice-type col-11 ">
                        <img src="img/shop/icetype-popsicle.png" alt="">
                        <p>single</p>
                    </div>
                    <div class="general-item-content col-11 ">
                        <div class="item-img col-12">
                            <img src="img/shop/popsicle-single.png" alt="" class="product-img">
                            <img src="img/shop/collection-gray.png " alt="" class="latest-collection-love">
                        </div>
                        <div class="item-text ">
                            <span class="item-name col-12">芋頭牛奶</span>
                            <div class="review col-12">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <span>(4.5)</span>
                            </div>

                        </div>
                        <div class="item-pri ">
                            <span>
                                NT250
                            </span>
                            <div class="btn-numbox">
                                <form id='myform' method='POST' action='#'>
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </form>
                            </div>
                        </div>
                        <div class="shop-btn">
                            <div class="shop-buy-btn">
                                <span class="shop-btn-in">
                                    加入購物車
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="general-item col-6 col-lg-3 fall-in-love">
                    <div class="ice-type col-11 ">
                        <img src="img/shop/icetype-popsicle.png" alt="">
                        <p>single</p>
                    </div>
                    <div class="general-item-content col-11 ">
                        <div class="item-img col-12">
                            <img src="img/shop/popsicle-single.png" alt="" class="product-img">
                            <img src="img/shop/collection-gray.png " alt="" class="latest-collection-love">
                        </div>
                        <div class="item-text ">
                            <span class="item-name col-12">芋頭牛奶</span>
                            <div class="review col-12">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <span>(4.5)</span>
                            </div>

                        </div>
                        <div class="item-pri ">
                            <span>
                                NT250
                            </span>
                            <div class="btn-numbox">
                                <form id='myform' method='POST' action='#'>
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </form>
                            </div>
                        </div>
                        <div class="shop-btn">
                            <div class="shop-buy-btn">
                                <span class="shop-btn-in">
                                    加入購物車
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="general-item col-6 col-lg-3 break-up">
                    <div class="ice-type col-11 ">
                        <img src="img/shop/icetype-popsicle.png" alt="">
                        <p>single</p>
                    </div>
                    <div class="general-item-content col-11 ">
                        <div class="item-img col-12">
                            <img src="img/shop/popsicle-single.png" alt="" class="product-img">
                            <img src="img/shop/collection-gray.png " alt="" class="latest-collection-love">
                        </div>
                        <div class="item-text ">
                            <span class="item-name col-12">芋頭牛奶</span>
                            <div class="review col-12">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <span>(4.5)</span>
                            </div>

                        </div>
                        <div class="item-pri ">
                            <span>
                                NT250
                            </span>
                            <div class="btn-numbox">
                                <form id='myform' method='POST' action='#'>
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </form>
                            </div>
                        </div>
                        <div class="shop-btn">
                            <div class="shop-buy-btn">
                                <span class="shop-btn-in">
                                    加入購物車
                                </span>
                            </div>
                        </div>
                    </div>
                </div> -->



            </div>
        </div>    

    </section>













    <section class="custom">
        <div class="wrap">
            <div class="roof col-11">
                <div class="title"><span>客製</span></div>
                <img src="img/shop/yellow-roof.png" alt="">
            </div>
            <div class="custom-store col-11 ">
                <div class="custom-item  col-6">
                    <div class="ice-language ice-type col-11">
                        <i class="fas fa-thumbs-up"></i>
                        <span>10</span>
                        <p>冰棒小語</p>
                    </div>
                    <div class="custom-item-content col-11">
                        <div class="custom-item-img item-img col-12">
                            <img src="img/shop/popsicle-single.png" alt="" class="product-img">
                            <img src="img/shop/collection-red.png" alt="" class="latest-collection-love">
                        </div>
                        <figure>
                            <div><img src="img/qa/grape.png" alt=""></div>
                            <div><img src="img/qa/greenapple.png" alt=""></div>
                            <div><img src="img/qa/chocolate.png" alt=""></div>
                        </figure>
                        <div class="custom-item-pri item-pri  ">
                            <span>
                                NT250
                            </span>
                            <div class="btn-numbox">
                                <form id='myform' method='POST' action='#'>
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </form>
                            </div>
                        </div>
                        <div class="shop-btn">
                            <div class="shop-buy-btn">
                                <span class="shop-btn-in">
                                    加入購物車
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-item  col-6">
                    <div class="ice-language ice-type col-11">
                        <i class="fas fa-thumbs-up"></i>
                        <span>10</span>
                        <p>冰棒小語</p>
                    </div>
                    <div class="custom-item-content col-11">
                        <div class="custom-item-img item-img col-12">
                            <img src="img/shop/popsicle-single.png" alt="" class="product-img">
                            <img src="img/shop/collection-red.png" alt="" class="latest-collection-love">
                        </div>
                        <figure>
                            <div><img src="img/qa/grape.png" alt=""></div>
                            <div><img src="img/qa/greenapple.png" alt=""></div>
                            <div><img src="img/qa/chocolate.png" alt=""></div>
                        </figure>
                        <div class="custom-item-pri item-pri  ">
                            <span>
                                NT250
                            </span>
                            <div class="btn-numbox">
                                <form id='myform' method='POST' action='#'>
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </form>
                            </div>
                        </div>
                        <div class="shop-btn">
                            <div class="shop-buy-btn">
                                <span class="shop-btn-in">
                                    加入購物車
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-item  col-6">
                    <div class="ice-language ice-type col-11">
                        <i class="fas fa-thumbs-up"></i>
                        <span>10</span>
                        <p>冰棒小語</p>
                    </div>
                    <div class="custom-item-content col-11">
                        <div class="custom-item-img item-img col-12">
                            <img src="img/shop/popsicle-single.png" alt="" class="product-img">
                            <img src="img/shop/collection-red.png" alt="" class="latest-collection-love">
                        </div>
                        <figure>
                            <div><img src="img/qa/grape.png" alt=""></div>
                            <div><img src="img/qa/greenapple.png" alt=""></div>
                            <div><img src="img/qa/chocolate.png" alt=""></div>
                        </figure>
                        <div class="custom-item-pri item-pri  ">
                            <span>
                                NT250
                            </span>
                            <div class="btn-numbox">
                                <form id='myform' method='POST' action='#'>
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </form>
                            </div>
                        </div>
                        <div class="shop-btn">
                            <div class="shop-buy-btn">
                                <span class="shop-btn-in">
                                    加入購物車
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <span>LoveFruit.Ice Copyright © 2019 All right re served, Ltd.</span>
    </footer>

    <script src="js/nav.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/shop.js"></script>
    <!-- <script src="js/temporary.js"></script> -->
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })

    </script>
</body>

</html>