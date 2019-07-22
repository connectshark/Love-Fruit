<?php

$errmsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlprod = "select * from product";
    $prod = $pdo->query($sqlprod);
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
    <link rel="icon" href="img/navBar/logo.png" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/backstage.css">

</head>

<body class="page-backstage">

    <header>
        <?php require_once("backstage-nav.php"); ?>
    </header>

    <section class="container-fluid p-4">
        <div class="row justify-content-center">
            <div class="col-10 px-0">
                <h3>商品管理頁</h3>
            </div>
        </div>
    </section>

    <section class="container-fluid px-4">
        <div class="row justify-content-center">
            <div class="col-10 bg-white rounded">

                <div class="row p-4">
                    <div class="col-12 px-0 text-right"><input class="btn btn-lovefruit btn-lg" type="button" value="新增商品"></div>
                    <div class="col-12 px-0 py-4">
                        <form action="">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">編號</th>
                                        <th scope="col">商品名稱</th>
                                        <th scope="col">商品圖</th>
                                        <th scope="col">商品敘述</th>
                                        <th scope="col">價格</th>
                                        <th scope="col">戀愛階段</th>
                                        <th scope="col">冰品類型</th>
                                        <th scope="col">評價總分</th>
                                        <th scope="col">評價次數</th>
                                        <th scope="col">狀態</th>
                                        <th scope="col">編輯</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    while ($prodRows = $prod->fetch(PDO::FETCH_ASSOC)) {
                                        ?>

                                        <tr>
                                            <th scope="row"><?php echo $prodRows["prod_no"]; ?></th>
                                            <td><?php echo $prodRows["prod_name"]; ?></td>
                                            <td><?php echo $prodRows["prod_pic"]; ?></td>
                                            <td><textarea class="form-control" name="" id="" cols="30" rows="2"><?php echo $prodRows["prod_desc"]; ?></textarea></td>
                                            <td><input class="form-control" type="text" value="<?php echo $prodRows["prod_price"]; ?>"></td>
                                            <td><select id="" class="form-control">
                                                    <option value="0" <?php if (!(strcmp("0", $prodRows["stage_no"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>單身</option>
                                                    <option value="1" <?php if (!(strcmp("1", $prodRows["stage_no"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>初戀</option>
                                                    <option value="2" <?php if (!(strcmp("2", $prodRows["stage_no"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>熱戀</option>
                                                    <option value="3" <?php if (!(strcmp("3", $prodRows["stage_no"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>分手</option>
                                                </select>
                                            </td>
                                            <td><select id="" class="form-control">
                                                    <option value="0">冰棒</option>
                                                    <option value="1" <?php if (!(strcmp("0", $prodRows["type_no"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>冰淇淋</option>
                                                    <option value="2" <?php if (!(strcmp("1", $prodRows["type_no"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>霜淇淋</option>
                                                </select>
                                            </td>
                                            <td><?php echo $prodRows["prod_score_total"]; ?></td>
                                            <td><?php echo $prodRows["prod_score_times"]; ?></td>
                                            <td><select id="" class="form-control">
                                                    <option value="0" <?php if (!(strcmp("0", $prodRows["prod_state"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>下架</option>
                                                    <option value="1" <?php if (!(strcmp("1", $prodRows["prod_state"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>上架</option>
                                                </select>
                                            </td>
                                            <td><input class="btn btn-info" type="button" value="送出修改"></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="js/back-nav.js"></script>
</body>

</html>