<?php

session_start();
if (isset($_SESSION["emp_no"]) != true) {
    header("location:backstage-login.php");
}

$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlres = "select c.res_no, c.mem_no, c.course_name, c.course_date, c.course_slot , c.res_ppl, c.res_date, c.res_state, m.mem_name  from course_reservation c join member m on c.mem_no = m.mem_no order by res_no DESC";
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

    <section class="container-fluid px-4 mb-4">
        <div class="row justify-content-center">
            <div class="col-10 bg-white rounded">
                <div class="row p-4">
                    <div class="col-12 px-0 py-4">

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
                                    <th scope="col">狀態</th>
                                    <th scope="col">編輯</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($resRows = $res->fetch(PDO::FETCH_ASSOC)) {
                                    ?>

                                    <tr>
                                        <form action="courseChange.php" method="POST">
                                            <input class="d-none" type="text" name="res_no" value="<?php echo $resRows["res_no"] ?>">
                                            <th scope="row"><?php echo $resRows["res_no"] ?></th>
                                            <td><?php echo $resRows["mem_name"] ?></td>
                                            <td><?php echo $resRows["course_name"] ?></td>
                                            <td><?php echo $resRows["course_date"] ?></td>
                                            <td><?php echo $resRows["course_slot"] ?></td>
                                            <td><?php echo $resRows["res_ppl"] ?></td>
                                            <td><?php echo $resRows["res_date"] ?></td>
                                            <td><select name="res_state" class="form-control">
                                                    <option value="0" <?php if (!(strcmp("0", $resRows["res_state"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>取消</option>
                                                    <option value="1" <?php if (!(strcmp("1", $resRows["res_state"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>預約</option>
                                                </select>
                                            </td>
                                            <td><input class="btn btn-info" type="submit" value="送出修改"></td>
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