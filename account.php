<?php
session_start();
// $_SESSION["mem_no"] = 1;
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sql = "select * from member where mem_no = :mem_no";
    $profile = $pdo->prepare($sql);
    $profile->bindValue(":mem_no", $_SESSION["mem_no"]);
    $profile->execute();
    $profileRow = $profile->fetch(PDO::FETCH_ASSOC);


    $sqlOrder = "select * from prod_order where mem_no = :mem_no";
    $order = $pdo->prepare($sqlOrder);
    $order->bindValue(":mem_no", $_SESSION["mem_no"]);
    $order->execute();

    $sqlCollect = "select * from collection c join product p where (c.prod_no=p.prod_no) & (c.mem_no=:mem_no);";
    $collection = $pdo->prepare($sqlCollect);
    $collection->bindValue(":mem_no", $_SESSION["mem_no"]);
    $collection->execute();


    $sqlMold = "select * from mold";
    $mold = $pdo->query($sqlMold);
    $moldArr = array();
    while ($moldRows = $mold->fetch(PDO::FETCH_ASSOC)) {
        $mold_no = $moldRows["mold_no"];
        $mold_name = $moldRows["mold_name"];
        $moldArr[$mold_no] = $mold_name;
    }

    $sqlBase = "select * from fruit_base";
    $base = $pdo->query($sqlBase);
    $baseArr = array();
    while ($baseRows = $base->fetch(PDO::FETCH_ASSOC)) {
        $fruit_no = $baseRows["fruit_no"];
        $fruit_name = $baseRows["fruit_name"];
        $baseArr[$fruit_no] = $fruit_name;
    }

    $sqlIi = "select * from ingredients";
    $ingredient = $pdo->query($sqlIi);
    $ingredientArr = array();
    while ($ingredientRows = $ingredient->fetch(PDO::FETCH_ASSOC)) {
        $ii_no = $ingredientRows["ii_no"];
        $ii_name = $ingredientRows["ii_name"];
        $ingredientArr[$ii_no] = $ii_name;
    }

    $sqlCustom = "select * from customize where mem_no = :mem_no";
    $custom = $pdo->prepare($sqlCustom);
    $custom->bindValue(":mem_no", $_SESSION["mem_no"]);
    $custom->execute();

    $sqlCourse = "select * from course_reservation where mem_no = :mem_no";
    $course = $pdo->prepare($sqlCourse);
    $course->bindValue(":mem_no", $_SESSION["mem_no"]);
    $course->execute();
} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
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
    <link rel="stylesheet" href="css/temporary-cart.css">
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
                    <div class="col-2 col-md-4">
                        <div class="profile-img"><img src="<?php echo $profileRow["mem_pic"] ?>" alt=""></div>
                    </div>
                    <div class="col-9 col-md-7">
                        <p class="profile-id"><?php echo $profileRow["mem_id"] ?></p>
                        <form action="fileUpload.php" method="post" enctype="multipart/form-data">
                            <label class="btn-file" for="upFile">上傳頭貼
                                <input type="file" name="upFile" id="upFile" accept=".jpg,.png">
                            </label>
                        </form>

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
                            <input class="col-8 col-md-3" type="text" id="name" value="<?php echo $profileRow["mem_name"]; ?>" placeholder="請輸入姓名(最多5字)">
                        </div>
                        <div class="profile-item col-12">
                            <label class="col-3 col-md-1" for="">帳號</label>
                            <p id="mem_id" class="col-8"><?php echo $profileRow["mem_id"] ?></p>
                        </div>
                        <div class="profile-item col-12">
                            <label class="col-3 col-md-1" for="">密碼</label>
                            <div class="col-8">
                                <p class="passwaord">
                                    <input id="password" type="password" maxlength="8" value="<?php echo $profileRow["mem_psw"]; ?>" readonly="readonly" placeholder="請輸入密碼(最多8碼)">
                                </p>
                                <a id="psw-btn" href="javascript:;">變更</a>
                            </div>
                        </div>
                        <div class="profile-item col-12">
                            <label class="col-3 col-md-1" for="email">信箱</label>
                            <input class="col-8" type="email" id="email" value="<?php echo $profileRow["email"]; ?>" placeholder="請輸入電子信箱">
                        </div>
                        <div class="profile-item col-12">
                            <label class="col-3 col-md-1" for="address">地址</label>
                            <input class="col-8" type="text" id="address" value="<?php echo $profileRow["address"]; ?>" placeholder="請輸入地址">
                        </div>
                        <div class="profile-item col-12">
                            <label class="col-3 col-md-1" for="phone">電話</label>
                            <input class="col-8 col-md-3" type="tel" id="phone" maxlength="10" value="<?php echo $profileRow["phone"]; ?>" placeholder="請輸入電話(最多10碼)">
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
                                    <p><?php if ($orderRows["order_ship"] == 0) {
                                            echo "宅配到府";
                                        } elseif ($orderRows["order_ship"] == 1) {
                                            echo "7-11取貨";
                                        }; ?></p>
                                </div>
                            </div>
                            <div class="order-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>付款方式</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><?php if ($orderRows["order_pay"] == 0) {
                                            echo "貨到付款";
                                        } elseif ($orderRows["order_ship"] == 1) {
                                            echo "信用卡";
                                        }; ?></p>
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
                                    <p><a class="item-pop-btn" href="javascript:;">詳情</a></p>
                                </div>
                            </div>
                            <?php
                            $sqlProdItem = "select o.item_no, o.order_no, o.prod_no, o.cto_no, o.item_qty, p.prod_name, p.prod_price from order_item o join product p on (o.order_no=:order_no) & (o.prod_no=p.prod_no)";
                            $prodItem = $pdo->prepare($sqlProdItem);
                            $prodItem->bindValue(":order_no", $orderRows["order_no"]);
                            $prodItem->execute();
                            ?>
                            <div class="prod-item-pop col-md-12">
                                <div class="prod-pop-content">
                                    <p>收件人：<?php echo $orderRows["order_name"] ?></p>
                                    <p>連絡電話：<?php echo $orderRows["order_phone"] ?></p>
                                    <p>收件地址：<?php echo $orderRows["order_add"] ?></p>

                                    <div class="item-list-group">
                                        <p class="list-head">商品明細</p>
                                        <?php
                                        while ($pordItemRows = $prodItem->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <div class="item-list">
                                                <p class="col-12 col-md-3"><?php echo $pordItemRows["prod_name"] ?></p>
                                                <p class="col-4 col-md-2"><?php echo $pordItemRows["prod_price"] . "元" ?></p>
                                                <p class="col-4 col-md-2">X<?php echo $pordItemRows["item_qty"] ?></p>
                                                <p class="list-count col-4 col-md-5">小計：<?php echo $pordItemRows["item_qty"] * $pordItemRows["prod_price"] ?></p>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                </div>

                <div id="collection" class="content content-collection">
                    <h2>收藏清單</h2>
                    <?php
                    while ($collections = $collection->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <div id="prod-<?php echo $collections["prod_no"]; ?>" class="collection-item col-12">
                            <div class="prod-img col-2 col-md-1"><img src="database/img_prod/<?php echo $collections["prod_pic"]; ?>">
                            </div>
                            <div class="collection-desc col-10 col-md-11">
                                <div class="col-5 col-md-3"><?php echo $collections["prod_name"]; ?></div>
                                <div class="col-3 col-md-3"><?php echo $collections["prod_price"]; ?></div>
                                <div class="col-3 col-md-3"><a href="shop-inside.php?prod_no=<?php echo $collections["prod_no"]; ?>">詳情</a></div>
                                <div class="heart col-1 col-md-3"><a class="heart-btn" href="javascript:;"><i class="fas fa-heart"></i></a></div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                </div>


                <div id="custom" class="content content-custom">
                    <h2>歷史客製</h2>
                    <?php
                    while ($customRows = $custom->fetch(PDO::FETCH_ASSOC)) {
                        ?>

                        <div class="custom-item col-12">
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead thead-img col-5 col-md-12">
                                    <p>圖片</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p class="cto-img"><img src="database/img_cto/<?php echo $customRows["cto_pic"] ?>" alt="客製圖"></p>
                                </div>
                            </div>
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>模具</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><?php echo $moldArr[$customRows["mold_no"]] ?></p>
                                </div>
                            </div>
                            <?php
                            $sqlbaseItem = "select * from base_item where cto_no=:cto_no";
                            $baseItem = $pdo->prepare($sqlbaseItem);
                            $baseItem->bindValue(":cto_no", $customRows["cto_no"]);
                            $baseItem->execute();
                            $baseItemNo = 0;
                            while ($baseItemRows = $baseItem->fetch(PDO::FETCH_ASSOC)) {
                                $baseItemNo++;
                                ?>
                                <div class="custom-desc col-12 col-md-2">
                                    <div class="thead col-5 col-md-12">
                                        <p>基底<?php echo $baseItemNo ?></p>
                                    </div>
                                    <div class="col-7 col-md-12">
                                        <p><?php echo $baseArr[$baseItemRows["fruit_no"]] ?></p>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>配料</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><?php echo $ingredientArr[$customRows["ii_no"]] ?></p>
                                </div>
                            </div>
                            <div class="custom-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>冰棒小語</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><?php echo $customRows["cto_words"] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div id="course" class="content content-course">
                    <h2>預約紀錄</h2>
                    <?php
                    while ($courseRows = $course->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <div class="class-item col-12">
                            <div class="class-desc col-12 col-md-3">
                                <div class="thead col-5 col-md-12">
                                    <p>課程名稱</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><?php echo $courseRows["course_name"]; ?></p>
                                </div>
                            </div>
                            <div class="class-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>預約日期</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><?php echo $courseRows["course_date"]; ?></p>
                                </div>
                            </div>
                            <div class="class-desc col-12 col-md-2">
                                <div class="thead col-5 col-md-12">
                                    <p>預約時段</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><?php echo $courseRows["course_slot"]; ?></p>
                                </div>
                            </div>
                            <div class="class-desc col-12 col-md-1">
                                <div class="thead col-5 col-md-12">
                                    <p>人數</p>
                                </div>
                                <div class="col-7 col-md-12">
                                    <p><?php echo $courseRows["res_ppl"]; ?>人</p>
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

                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>

    <div id="psw-change-box" class="psw-change-box">
        <div class="psw-bg col-10 col-md-3">
            <a id="psw-box-close" href="javascript:;"><img src="img/pop-close.png" alt="關閉按鈕"></a>
            <div class="psw-content col-12 col-md-10">
                <p class="psw-box-title">變更密碼</p>
                <div class="psw-item col-12 col-md-10">
                    <label class="col-12" for="profile-new-psw">輸入密碼：</label>
                    <input class="col-12" id="profile-new-psw" name="profile-new-psw" type="password" placeholder="最多8碼" maxlength="8">
                </div>
                <div class="psw-item col-12 col-md-10">
                    <label class="col-12" for="profile-new-psw">確認密碼：</label>
                    <input class="col-12" id="profile-new-psw-check" type="password" placeholder="最多8碼" maxlength="8">
                </div>
                <div class="psw-item col-12 col-md-10">
                    <p class="col-12" id="psw-error"></p>
                    <a id="new-psw-save" href="javascript:;">確認修改</a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
    </footer>


    <script src="js/nav.js"></script>
    <script src="js/login.js"></script>
    <script src="js/shop.js"></script>    
    <script>
        function $id(id) {
            return document.getElementById(id);
        }

        function $class(className) {
            return document.getElementsByClassName(className);
        }

        window.addEventListener("load", function() {
            var linkItems = $class("link-item");
            for (let i = 0; i < linkItems.length; i++) {
                linkItems[i].addEventListener("click", function() {
                    for (let j = 0; j < linkItems.length; j++) {
                        linkItems[j].classList.remove("active");
                    }
                    this.classList.add("active");
                    var linkString = this.getAttribute('id');
                    var idStr = linkString.split("#");
                    var contents = $class("content");

                    for (let k = 0; k < contents.length; k++) {
                        contents[k].classList.remove("show-content");
                    }
                    $id(`${idStr[1]}`).classList.add("show-content");

                }, false);
            }

            var pswBtn = $id("psw-btn");
            pswBtn.addEventListener("click", function() {
                var pswChangeBox = $id("psw-change-box");
                pswChangeBox.style.display = "flex";

                var letpswBoxClose = $id("psw-box-close");
                letpswBoxClose.onclick = function() {
                    pswChangeBox.style.display = "none";
                };
            }, false);

            var newPswSave = $id("new-psw-save");

            newPswSave.addEventListener("click", function() {
                var pswChangeBox = $id("psw-change-box");
                var profileNewPsw = $id("profile-new-psw");
                var profileNewPswCheck = $id("profile-new-psw-check");

                if (profileNewPsw.value == profileNewPswCheck.value) {
                    var password = $id("password");
                    var xhr = new XMLHttpRequest();
                    xhr.onload = function() {
                        if (xhr.status == 200) {
                            if (xhr.responseText == "error") {
                                alert("系統發生錯誤");
                            } else {
                                password.value = profileNewPsw.value;
                                $id("psw-error").innerText = "";
                                profileNewPsw.value = "";
                                profileNewPswCheck.value = "";
                                pswChangeBox.style.display = "none";
                            }
                        } else {
                            alert(xhr.status);
                        }
                    }
                    xhr.open("post", "passwordChange.php", true);
                    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
                    let psw_info = `mem_psw=${profileNewPsw.value}`;
                    console.log(psw_info);
                    xhr.send(psw_info);
                } else {
                    profileNewPsw.value = "";
                    profileNewPswCheck.value = "";
                    $id("psw-error").innerText = "密碼輸入錯誤，請重新輸入！"
                }

            }, false);

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
                let data_info = `mem_name=${$id("name").value}&email=${$id("email").value}&address=${$id("address").value}&phone=${$id("phone").value}`;
                xhr.send(data_info);
            }, false);

            document.getElementById("upFile").onchange = function(e) {
                e.target.form.submit();
            };

            var itemPopBtns = $class("item-pop-btn");
            for (let i = 0; i < itemPopBtns.length; i++) {
                itemPopBtns[i].addEventListener("click", function(e) {
                    var btnText = e.target.innerHTML;
                    if (btnText == "詳情") {
                        this.innerHTML = "收合";
                    } else {
                        this.innerHTML = "詳情";
                    }
                    this.parentNode.parentNode.parentNode.nextElementSibling.classList.toggle("prod-item-show");
                }, false);
            }

            var heartBtns = $class("heart-btn");
            for (let i = 0; i < heartBtns.length; i++) {
                heartBtns[i].addEventListener("click", function(e) {

                    let trash = e.target;
                    let xhr = new XMLHttpRequest();
                    xhr.onload = function() {
                        if (xhr.status == 200) {
                            if (xhr.responseText == "error") {
                                alert("系統發生錯誤");
                            } else {
                                $id("collection").removeChild(trash.parentNode.parentNode.parentNode.parentNode);
                            }
                        } else {
                            alert(xhr.status);
                        }
                    };
                    let prod_id = this.parentNode.parentNode.parentNode.getAttribute("id");
                    let prodArr = prod_id.split("-");
                    let prod_no = prodArr[1];
                    xhr.open("post", "collectionCancel.php", true);
                    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
                    let heart_info = `prod_no=${prod_no}`;
                    xhr.send(heart_info);
                }, false);

            }


        }, false);
    </script>
</body>

</html>