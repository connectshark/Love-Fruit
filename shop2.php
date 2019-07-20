<?php
ob_start();
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

<!-- 抓會員已收藏 -->
<?php
try{
    $sql = "select * from collection where mem_no " ;
    $collection = $pdo->query($sql);
    $collection_row =  $collection->fetchALL(PDO::FETCH_ASSOC);
    $collection_arr = array();
    for($i = 0; $i<count($collection_arr); $i++){
        array_push($collection_arr, $collection_row[$i]["prod_no"]);

    }
}catch(PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
};

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
    <link rel="stylesheet" href= "css/common.css" />
    <link rel="stylesheet" href="css/temporary-cart.css">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>

<body class="page-shop">
 

           
<?php
require_once("nav.php");
?>

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
                        <div class="general-item col-6 col-lg-3 <?php
                        if($prodRow["stage_no"] == 1){echo "single";
                            
                        }elseif($prodRow["stage_no"] == 2){echo "first-love";

                        }elseif($prodRow["stage_no"] == 3){echo "fall-in-love";

                        }else{echo "break-up";

                        }
                        ?>">
                            <div class="ice-type col-11">
                                <img src="database/img_type/<?php
                                if($prodRow["type_no"]==1){echo "popsicle.png";
                                }elseif($prodRow["type_no"]==2){echo "ball.png";}
                                else{echo "mount.png";}?>" alt="">
                                <p><?php echo $prodRow["stage_name"] ?></p>
                            </div>
                            <div class="general-item-content col-11 ">
                           
                                <div class="item-img col-12">
                                    <form>
                                        <input type="hidden" name="prod_no" value="<?php echo $prodRow["prod_no"]?>">
                                        <a href="shop-inside.php?prod_no=<?php echo $prodRow["prod_no"]?>">
                                            <img src="database/img_prod/<?php echo $prodRow["prod_pic"] ?>" alt="" class="product-img">
                                        </a>    
                                        <img src="img/shop/collection-<?php if(in_array($prodRow["prod_no"],$collection_arr)){
                                            echo "red.png";
                                        }else{
                                            echo "gray.png";
                                        }?>" alt="" class="latest-collection-love">
                                    </form>
                                </div>
                                
                                <div class="item-text ">
                                    <span class="item-name col-lg-6 col-12"><?php echo $prodRow["prod_name"] ?></span>
                                    <span class="col-lg-6">
                                        NT<?php echo $prodRow["prod_price"] ?>
                                    </span>
                                </div>
                                <div class="item-pri">
                                    <div class="btn-numbox col-lg-12">
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