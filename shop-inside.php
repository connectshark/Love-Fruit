<?php
ob_start();
session_start();
?>
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
  
  <?php

// $errMsg = "";
// try {
// 	require_once("connect-dd101g3.php");
// 	$sql = "select * from product p , love_stage l where p.stage_no = l.stage_no";
// 	$products = $pdo->query($sql);
// 	$prodRows = $products->fetchAll(PDO::FETCH_ASSOC);
// } catch (PDOException $e) {
// 	echo "錯誤 : ", $e -> getMessage(), "<br>";
// 	echo "行號 : ", $e -> getLine(), "<br>";
// }
?> 








<!-- 抓會員已收藏 -->
<?php
try{
    $sql = "select * from collection where mem_no = 1 " ;
    $collection = $pdo->query($sql);
    $collection_row =  $collection->fetchALL(PDO::FETCH_ASSOC);
    $collection_arr = array();
    // echo `$collection_row[0]["prod_no"]`;
    for($i = 0; $i<count($collection_row); $i++){
        array_push($collection_arr, $collection_row[$i]["prod_no"]);

    }
    // print_r($collection_arr);
}catch(PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
};

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
    <link rel="stylesheet" href="css/temporary-cart.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/giatao.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>

<body class="page-shop-inside">

    <?php
    require_once("nav.php");
    ?>
    <?php 
    if( $errMsg != ""){ //例外
    echo "<div><center>$errMsg</center></div>";
    }elseif($products->rowCount()==0){
        echo "<div><center>查無此商品資料</center></div>";
    }else{
        $prodRow = $products->fetchObject();
    ?>
   


    <section class="item-detailed  ">
        <div class="col-lg-6 des-flex m-a">
            <div class="detailed-pic col-lg-6 col-10 rela ">
                <div class="detaild-img-box col-lg-8 col-8 ">
                    <form action="">
                        <input type="hidden" name="prod_no" value="<?php echo $prodRow->prod_no?>">
                        <img src="database/img_prod/<?php echo $prodRow->prod_pic?>" alt="" class="detailed-ice">
                        <img src="img/shop/collection-<?php if(in_array($prodRow->prod_no,$collection_arr)){
                                            echo "red.png";
                                        }else{
                                            echo "gray.png";
                                        }?>" alt="" class="collection">
                    </form>
                </div>
            </div>
            <div class="detailed-content col-lg-6">
                <div class="detailed-content-box col-lg-12">
                    <h3 class="detailed-name"></h3>
                    <div class="detailed-star"><?php echo $prodRow->prod_name;?>
                        <!-- <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(4.5)</span> -->
                    </div>
                    <p class="detailed-text">
                    <?php echo $prodRow->prod_desc;?>
                    </p>
                    <form action="" id="abc">
                        <input type="hidden" name="prod_price" value="<?php echo $prodRow->prod_price?>">
                        <input type="hidden" name="prod_name" value="<?php echo $prodRow->prod_name?>">
                        <input type="hidden" name="prod_pic" value="<?php echo $prodRow->prod_pic?>">
                        <input type="hidden" name="prod_no" value="<?php echo $prodRow->prod_no?>">
                        <div class="pri-btn">
                            <p class="detailed-pri">NT<?php echo $prodRow->prod_price;?></p>
                            <div class="detailed-button ">
                                <div class="btn-numbox dis-mobile-n">
                                    <form id='myform' method='POST' action='#'>
                                        <input type='button' value='-' class='qtyminus' field='quantity' />
                                        <input type='text' name='qty' value='1' class='qty' />
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
                    </form> 
                </div>
            </div>
        </div>
    </section>

<!-- 
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

    </section> -->
    <?php
    }
    ?>













    <!-- 
    <footer>
        <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
    </footer> -->
    <script src="js/nav.js"></script>
    <script src="js/shop-inside.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>