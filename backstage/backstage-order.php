<?php
$errmsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlorder = "select * from prod_order";
    $order = $pdo->query($sqlorder);
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
        <?php
        require_once("backstage-nav.php");
        ?>

    </header>

    <section class="container-fluid p-4">
        <div class="row justify-content-center">
            <div class="col-10 px-0">
                <h3>訂單管理頁</h3>
            </div>
        </div>
    </section>

    <section class="container-fluid px-4">
        <div class="row justify-content-center">
            <div class="col-10 bg-white rounded">
                <div class="row p-4">
                    <div class="col-12 px-0 py-4">
                        
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">編號</th>
                                        <th scope="col">收件人</th>
                                        <th scope="col">手機</th>
                                        <th scope="col">收件地址</th>
                                        <th scope="col">下單時間</th>
                                        <th scope="col">狀態</th>
                                        <th scope="col">編輯</th>
                                        <th scope="col">備註</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($orderRows = $order->fetch(PDO::FETCH_ASSOC)) {
                                        ?>

                                        <tr>
                                        <form action="">
                                            <th scope="row"><?php echo $orderRows["order_no"]; ?></th>
                                            <td><?php echo $orderRows["order_name"]; ?></td>
                                            <td><?php echo $orderRows["order_phone"]; ?></td>
                                            <td><?php echo $orderRows["order_add"]; ?></td>
                                            <td><?php echo $orderRows["order_creat_date"]; ?></td>
                                            <td><select class="form-control">
                                                    <option value="0" <?php if (!(strcmp("0", $orderRows["order_state"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>未處理</option>
                                                    <option value="1" <?php if (!(strcmp("1", $orderRows["order_state"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>已出貨</option>
                                                </select>
                                            </td>
                                            <td><input class="btn btn-info" type="button" value="送出修改">
                                            </td>
                                            <td><input class="btn btn-info" type="button" value="訂單詳情">
                                            </td>
                                            </form>
                                        </tr>


                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        

                    </div>
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