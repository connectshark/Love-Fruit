<?php
session_start();
if (isset($_SESSION["emp_no"]) != true) {
    header("location:backstage-login.php");
}


$errmsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlorder = "select * from prod_order where order_no=:order_no";
    $order = $pdo->prepare($sqlorder);
    $order->bindValue(":order_no",$_REQUEST["order_no"]);
    $order->execute();
    $orderRows = $order->fetch(PDO::FETCH_ASSOC);

    $sqlorderItem = "select o.item_no, o.order_no, o.prod_no, o.cto_no, o.item_qty, p.prod_name, p.prod_price, p.prod_pic from order_item o join product p on (o.order_no=:order_no) & (o.prod_no=p.prod_no)";
    $orderItem = $pdo->prepare($sqlorderItem);
    $orderItem->bindValue(":order_no",$_REQUEST["order_no"]);
    $orderItem->execute();
   
} catch (PDOException $e) {
    echo  $errMsg .=  $e->getMessage() . "<br>";
    echo  $errMsg .=  $e->getLine() . "<br>";
}
?>

<html lang="UTF-8">

<head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="菓籽戀冰所" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>菓籽戀冰所</title>
    <link rel="icon" href="../img/navBar/logo.png" />
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/backstage.css">

</head>

<body class="page-backstage">

    <header>
       <?php require_once("backstage-nav.php");?>
    </header>

    <section class="container-fluid p-4">
        <div class="row justify-content-center">
            <div class="col-10 px-0">
                <h3>訂單詳情頁-單號<?php echo $_REQUEST["order_no"]?></h3>
            </div>
        </div>
    </section>

    <section class="container-fluid px-4 mb-4">
        <div class="row justify-content-center">
            <div class="col-10 bg-white rounded">
                <div class="row p-4">
                    <div class="col-12">
                        <p>訂單編號：<?php echo $orderRows["order_no"];?></p> 
                        <p>收件人：<?php echo $orderRows["order_name"];?></p>
                        <p>連絡電話：<?php echo $orderRows["order_phone"];?></p>
                        <p>收件地址：<?php echo $orderRows["order_add"];?></p>
                        <hr>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12"><p class="bg-lovefruit text-white pl-2">商品明細</p></div>
                        </div>
                        <?php 
                            while( $orderItemRows = $orderItem->fetch(PDO::FETCH_ASSOC)){
                        ?>
                         <div class="row align-items-center">
                            <div class="col-1"><img class="img-fluid" src="../<?php echo $orderItemRows["prod_pic"]?>" alt=""></div>
                            <div class="col-3"><p><?php echo $orderItemRows["prod_name"]?></p></div>
                            <div class="col-3"><p>單價：<?php echo $orderItemRows["prod_price"]?></p></div>
                            <div class="col-2"><p>X<?php echo $orderItemRows["item_qty"]?></p></div>
                            <div class="col-3"><p class="text-right">小計：<?php echo $orderItemRows["item_qty"] * $orderItemRows["prod_price"] ?></p></div>
                        </div>
                        <hr>
                        <?php
                            }
                        ?>                       
                    </div>
                    <div class="col-12"><p class="text-right">總計：<?php echo $orderRows["order_total"];?></p></div>
                </div>
            </div>
        </div>
    </section>

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../js/back-nav.js"></script>
</body>

</html>