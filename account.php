<?php
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sql = "select * from member where mem_no = :mem_no";
    $profile = $pdo->prepare($sql);
    $profile->bindValue(":mem_no", 1);
    $profile->execute();
    $profileRow = $profile->fetch(PDO::FETCH_ASSOC);


    $sqlOrder = "select * from prod_order where mem_no = :mem_no";
    $order = $pdo->prepare($sqlOrder);
    $order->bindValue(":mem_no", 1);
    $order->execute();
} catch (PDOException $e) {
    $errMsg .=  $e->getMessage() . "<br>";
    $errMsg .=  $e->getLine() . "<br>";
}



?>

<html lang="UTF-8">

<head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="菓籽戀冰所" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>菓籽戀冰所</title>
    <link rel="icon" href="img/navBar/logo.png" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/account.css" />
    <script src="https://kit.fontawesome.com/035a3f7b04.js"></script>

</head>

<body class="page-account">

    <?php
    require_once("nav.php");
    ?>
    <section class="banner">
        <h1 class="title">會員中心</h1>
    </section>

    <section class="account">
        <div class="wrap">
            <div class="menu col-12 col-md-2">
                <div class="profile-picture">
                    <div class="col-4"><img src="img/database/img_mem/<?php echo $profileRow["mem_pic"] ?>" alt=""></div>
                    <div class="col-7">
                        <p class="profile-id"><?php echo $profileRow["mem_id"] ?></p>
                        <label class="btn-file" for="upFile">
                            上傳頭貼
                            <input type="file" name="upFile" id="upFile" accept=".jpg,.png">
                        </label>
                    </div>
                </div>
                <ul class="account-list">
                    <li class="col-4 col-md-10"><a id="#profile" class="link-item active" href="javascript:;"><i class="fas fa-user-circle"></i>個人檔案</a></li>
                    <li class="col-4 col-md-10"><a id="#order" class="link-item" href="javascript:;"><i class="fas fa-file-alt"></i>我的訂單</a>
                    </li>
                    <li class="col-4 col-md-10"><a id="#collection" class="link-item" href="javascript:;"><i class="fas fa-heart"></i>我的收藏</a>
                    </li>
                    <li class="col-4 col-md-10"><a id="#custom" class="link-item" href="javascript:;"><i class="fas fa-lemon"></i>客製紀錄</a>
                    </li>
                    <li class="col-4 col-md-10"><a id="#course" class="link-item" href="javascript:;"><i class="fas fa-calendar-alt"></i>課程預約</a>
                    </li>
                </ul>
            </div>
            <div class="content-area col-12 col-md-9">
                <div id="profile" class="content content-profile show-content">
                    <form id="profile-form">
                        <h2>我的檔案</h2>
                        <div class="profile-item col-12">
                            <label class="col-3 col-md-1" for="name">姓名</label>
                            <input class="col-8 col-md-3" type="text" id="name" value="<?php echo $profileRow["mem_name"] ?>" placeholder="請輸入姓名(最多5字)">
                        </div>
                        <div class="profile-item col-12">
                            <label class="col-3 col-md-1" for="">帳號</label>
                            <p id="mem_id" class="col-8"><?php echo $profileRow["mem_id"] ?></p>
                        </div>
                        <div class="profile-item col-12">
                            <label class="col-3 col-md-1" for="">密碼</label>
                            <div class="col-8">
                                <p class="passwaord">
                                    <input id="password" type="password" maxlength="8" value="<?php echo $profileRow["mem_psw"] ?>" readonly="readonly" placeholder="請輸入密碼(最多8碼)">
                                </p>
                                <a href="javascript:;">變更</a>
                            </div>
                        </div>
                        <div class="profile-item col-12">
                            <label class="col-3 col-md-1" for="email">信箱</label>
                            <input class="col-8" type="email" id="email" value="<?php echo $profileRow["email"] ?>" placeholder="請輸入電子信箱">
                        </div>
                        <div class="profile-item col-12">
                            <label class="col-3 col-md-1" for="address">地址</label>
                            <input class="col-8" type="text" id="address" value="<?php echo $profileRow["address"] ?>" placeholder="請輸入地址">
                        </div>
                        <div class="profile-item col-12">
                            <label class="col-3 col-md-1" for="phone">電話</label>
                            <input class="col-8 col-md-3" type="tel" id="phone" maxlength="10" value="<?php echo $profileRow["phone"] ?>" placeholder="請輸入電話(最多10碼)">
                        </div>
                        <input id="profile-save" type="submit" value="儲存">
                    </form>
                </div>

                <div id="order" class="content content-order">
                    <h2>歷史訂單</h2>
                    <?php
                    while ($orderRows = $order->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <div class="order-item col-12">
                            <div class="order-desc col-12 col-md-1">
                                <div class="thead col-5 col-md-12">
                                    <p>單號</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><?php echo $orderRows["order_no"] ?></p>
                                </div>
                            </div>
                            <div class="order-desc col-12 col-md-4">
                                <div class="thead col-5 col-md-12">
                                    <p>下單時間</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><?php echo $orderRows["order_creat_date"] ?></p>
                                </div>
                            </div>
                            <div class="order-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>配送方式</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><?php if($orderRows["order_ship"]==0){echo "宅配到府";}elseif($orderRows["order_ship"]==1) { echo "7-11取貨";};?></p>
                                </div>
                            </div>
                            <div class="order-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>付款方式</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><?php if($orderRows["order_pay"]==0){echo "貨到付款";}elseif($orderRows["order_ship"]==1) { echo "信用卡";};?></p>
                                </div>
                            </div>
                            <div class="order-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>總金額</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><?php echo $orderRows["order_total"] ?></p>
                                </div>
                            </div>
                            <div class="order-desc col-12 col-md-1">
                                <div class="thead col-5 col-md-12">
                                    <p>備註</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><a href="javascript:;">詳情</a></p>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                </div>

                <div id="collection" class="content content-collection">
                    <form action="">
                        <h2>收藏清單</h2>
                        <div class="collection-item col-12">
                            <div class="prod-img col-2 col-md-1"><img src="img/database/img_prod/popsicle_1.png">
                            </div>
                            <div class="collection-desc col-10 col-md-11">
                                <div class="col-5 col-md-3">清新酸梅冰</div>
                                <div class="col-3 col-md-3">200元</div>
                                <div class="col-3 col-md-3"><a href="#">詳情</a></div>
                                <div class="heart col-1 col-md-3"><a href="#"><i class="fas fa-heart"></i></a></div>
                            </div>
                        </div>
                    </form>
                </div>


                <div id="custom" class="content content-custom">
                    <form action="">
                        <h2>歷史客製</h2>
                        <div class="custom-item col-12">
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead thead-img col-5 col-md-12">
                                    <p>圖片</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><img src="https://fakeimg.pl/80x80/aaa/?text=image" alt="客製圖"></p>
                                </div>
                            </div>
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>模具</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p>兔兔模具</p>
                                </div>
                            </div>
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>基底1</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p>草莓</p>
                                </div>
                            </div>
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>基底2</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p>藍莓</p>
                                </div>
                            </div>
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>配料</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p>苦瓜</p>
                                </div>
                            </div>
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>冰棒小語</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p>戀愛小語</p>
                                </div>
                            </div>
                        </div>
                        <div class="custom-item col-12">
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead thead-img col-5 col-md-12">
                                    <p>圖片</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><img src="https://fakeimg.pl/80x80/aaa/?text=image" alt="客製圖"></p>
                                </div>
                            </div>
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>模具</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p>兔兔模具</p>
                                </div>
                            </div>
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>基底1</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p>草莓</p>
                                </div>
                            </div>
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>基底2</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p>藍莓</p>
                                </div>
                            </div>
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>配料</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p>苦瓜</p>
                                </div>
                            </div>
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>冰棒小語</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p>戀愛小語</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="course" class="content content-course">
                    <form action="">
                        <h2>預約紀錄</h2>
                        <div class="class-item col-12">
                            <div class="class-desc col-12 col-md-3">
                                <div class="thead col-5 col-md-12">
                                    <p>課程名稱</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p>情人繽紛彩繪冰棒</p>
                                </div>
                            </div>
                            <div class="class-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>預約日期</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p>2019/09/01</p>
                                </div>
                            </div>
                            <div class="class-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>預約時段</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p>上午 10:00</p>
                                </div>
                            </div>
                            <div class="class-desc col-12 col-md-1">
                                <div class="thead col-5 col-md-12">
                                    <p>人數</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p>2人</p>
                                </div>
                            </div>
                            <div class="class-desc col-12 col-md-2">
                                <div class="qrcode thead col-5 col-md-12">
                                    <p>報到條碼</p>
                                </div>
                                <div class="qrcode col-7 col-md-12">
                                    <p><a href="javascrip:;">QRcode</a></p>
                                </div>
                            </div>
                            <div class="class-desc col-12 col-md-2">
                                <div class="cancel thead col-5 col-md-12">
                                    <p>取消預約</p>
                                </div>
                                <div class="cancel col-7 col-md-12">
                                    <p><a href="javascrip:;">我要取消</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
    </footer>


    <script src="js/nav.js"></script>
    <script>
        function $id(id) {
            return document.getElementById(id);
        }

        function $class(className) {
            return document.getElementsByClassName(className);
        }

        window.addEventListener("load", function() {
            var linkItems = $class("link-item");
            for (var i = 0; i < linkItems.length; i++) {
                linkItems[i].addEventListener("click", function() {
                    for (var j = 0; j < linkItems.length; j++) {
                        linkItems[j].classList.remove("active");
                    }
                    this.classList.add("active");
                    var linkString = this.getAttribute('id');
                    var idStr = linkString.split("#");
                    var contents = $class("content");

                    for (k = 0; k < contents.length; k++) {
                        contents[k].classList.remove("show-content");
                    }
                    $id(`${idStr[1]}`).classList.add("show-content");

                }, false);
            }

            var profileSaveBtn = $id("profile-save");
            profileSaveBtn.addEventListener("click", function() {
                let xhr = new XMLHttpRequest();
                xhr.onload = function() {
                    if (xhr.status == 200) {
                        if (xhr.responseText == "error") {
                            alert("系統發生錯誤");
                        } else {
                            let memRow = JSON.parse(xhr.response);
                            $id("name").value = memRow.mem_name;
                            $id("password").value = memRow.mem_psw;
                            $id("email").value = memRow.email;
                            $id("address").value = memRow.address;
                            $id("phone").value = memRow.phone;
                        }

                    } else {
                        alert(xhr.status);
                    }
                }
                xhr.open("post", "ajaxProfileChange.php", true);
                xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
                var data_info = `mem_name=${$id("name").value}&mem_psw=${$id("password").value}&email=${$id("email").value}&address=${$id("address").value}&phone=${$id("phone").value}`;
                xhr.send(data_info);
            }, false);



        }, false);
    </script>
</body>

</html>