<?php
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlres = "select * from course_reservation";
    $res = $pdo->query($sqlres);
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
                <h3>課程預約管理頁</h3>
            </div>
        </div>
    </section>

    <section class="container-fluid px-4">
        <div class="row justify-content-center">
            <div class="col-10 bg-white rounded">
                <div class="row p-4">
                    <div class="col-12 px-0 py-4">
                        <form action="">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">編號</th>
                                        <th scope="col">預約會員</th>
                                        <th scope="col">課程名稱</th>
                                        <th scope="col">上課日期</th>
                                        <th scope="col">時段</th>
                                        <th scope="col">人數</th>
                                        <th scope="col">預約時間</th>
                                        <th scope="col">報到</th>
                                        <th scope="col">狀態</th>
                                        <th scope="col">編輯</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($resRows = $res->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $resRows["res_no"] ?></th>
                                            <td><?php echo $resRows["mem_no"] ?></td>
                                            <td><?php echo $resRows["course_name"] ?></td>
                                            <td><?php echo $resRows["course_date"] ?></td>
                                            <td><?php echo $resRows["course_slot"] ?></td>
                                            <td><?php echo $resRows["res_ppl"] ?></td>
                                            <td><?php echo $resRows["res_date"] ?></td>
                                            <td><select id="" class="form-control">
                                                    <option value="0" selected>未報到</option>
                                                    <option value="1">已報到</option>
                                                </select>
                                            </td>
                                            <td><select id="" class="form-control">
                                                    <option value="0">取消</option>
                                                    <option value="1" selected>預約</option>
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

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../js/back-nav.js"></script>
</body>

</html>