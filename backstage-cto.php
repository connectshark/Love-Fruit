<?php
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlmold = "select * from mold";
    $mold = $pdo->query($sqlmold);

    $sqlbase = "select * from fruit_base";
    $base = $pdo->query($sqlbase);

    $sqlii = "select * from ingredients";
    $ii = $pdo->query($sqlii);
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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/backstage.css">

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
                <h3>冰棒客製管理頁</h3>
            </div>
        </div>
    </section>

    <section class="container-fluid px-4">
        <div class="row justify-content-center">
            <div class="col-10 bg-white rounded">
                <div class="row p-4">
                    <ul class="col-12 nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">冰棒模具</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">冰棒基底</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">冰棒配料</a>
                        </li>
                    </ul>
                    <div class="col-12 px-0 py-4 tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form action="">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">編號</th>
                                            <th scope="col">模具名稱</th>
                                            <th scope="col">模具圖片</th>
                                            <th scope="col">狀態</th>
                                            <th scope="col">編輯</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($moldRows = $mold->fetch(PDO::FETCH_ASSOC)) {
                                            ?>

                                            <tr>
                                                <th scope="row"><?php echo $moldRows["mold_no"] ?></th>
                                                <td><input class="form-control" type="text" value="<?php echo $moldRows["mold_name"] ?>"></td>
                                                <td><input class="form-control" type="text" value="<?php echo $moldRows["mold_pic"] ?>">
                                                </td>
                                                <td><select class="form-control">
                                                        <option value="0">下架</option>
                                                        <option value="1" selected>上架</option>
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
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form action="">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">編號</th>
                                            <th scope="col">基底名稱</th>
                                            <th scope="col">基底價格</th>
                                            <th scope="col">酸</th>
                                            <th scope="col">甜</th>
                                            <th scope="col">苦</th>
                                            <th scope="col">狀態</th>
                                            <th scope="col">編輯</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        while ($baseRows = $base->fetch(PDO::FETCH_ASSOC)) {
                                            ?>

                                            <tr>
                                                <th scope="row"><?php echo $baseRows["fruit_no"] ?></th>
                                                <td><input class="form-control" type="text" value="<?php echo $baseRows["fruit_name"] ?>"></td>
                                                <td><input class="col-auto form-control" type="text" value="<?php echo $baseRows["fruit_price"] ?>">
                                                </td>
                                                <td><input class="form-control" type="text" value="<?php echo $baseRows["fruit_sour"] ?>">
                                                </td>
                                                <td><input class="form-control" type="text" value="<?php echo $baseRows["fruit_sweet"] ?>">
                                                </td>
                                                <td><input class="form-control" type="text" value="<?php echo $baseRows["fruit_bitter"] ?>">
                                                </td>
                                                <td><select id="" class="form-control">
                                                        <option value="0">下架</option>
                                                        <option value="1" selected>上架</option>
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
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <form action="">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">編號</th>
                                            <th scope="col">配料名稱</th>
                                            <th scope="col">配料價格</th>
                                            <th scope="col">酸</th>
                                            <th scope="col">甜</th>
                                            <th scope="col">苦</th>
                                            <th scope="col">狀態</th>
                                            <th scope="col">編輯</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        while ($iiRows = $ii->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $iiRows["ii_no"] ?></th>
                                                <td><input class="form-control" type="text" value="<?php echo $iiRows["ii_name"] ?>"></td>
                                                <td><input class="col-auto form-control" type="text" value="<?php echo $iiRows["ii_price"] ?>">
                                                </td>
                                                <td><input class="form-control" type="text" value="<?php echo $iiRows["ii_sour"] ?>">
                                                </td>
                                                <td><input class="form-control" type="text" value="<?php echo $iiRows["ii_sweet"] ?>">
                                                </td>
                                                <td><input class="form-control" type="text" value="<?php echo $iiRows["ii_bitter"] ?>">
                                                </td>
                                                <td><select id="" class="form-control">
                                                        <option value="0">下架</option>
                                                        <option value="1" selected>上架</option>
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
        </div>
    </section>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>