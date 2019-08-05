<?php

session_start();
if (isset($_SESSION["emp_no"]) != true) {
    header("location:backstage-login.php");
}
$errmsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlmem = "select * from member";
    $mem = $pdo->query($sqlmem);

    $sqlemp = "select * from employee";
    $emp = $pdo->query($sqlemp);
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
                <h3>會員帳號管理頁</h3>
            </div>
        </div>
    </section>

    <section class="container-fluid px-4 mb-4">
        <div class="row justify-content-center">
            <div class="col-10 bg-white rounded">
                <div class="row p-4">
                    <ul class="col-12 nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="member-tab" data-toggle="tab" href="#member" role="tab" aria-controls="member" aria-selected="true">一般會員</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="manager-tab" data-toggle="tab" href="#manager" role="tab" aria-controls="manager" aria-selected="false">後台管理員</a>
                        </li>
                    </ul>
                    <div class="col-12 px-0 py-4 tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="member" role="tabpanel" aria-labelledby="member-tab">
                            
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">編號</th>
                                            <th scope="col">會員名稱</th>
                                            <th scope="col">帳號</th>
                                            <th scope="col">密碼</th>
                                            <th scope="col">信箱</th>
                                            <th scope="col">地址</th>
                                            <th scope="col">電話</th>
                                            <th scope="col">照片</th>
                                            <th scope="col">狀態</th>
                                            <th scope="col">編輯</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        while ($memRows = $mem->fetch(PDO::FETCH_ASSOC)) {
                                            ?>

                                            <tr>
                                            <form action="memChange.php" method="POST">
                                                <input class="d-none" type="text" name="mem_no" value="<?php echo $memRows["mem_no"]; ?>">
                                                <th scope="row"><?php echo $memRows["mem_no"]; ?></th>
                                                <td><?php echo $memRows["mem_name"]; ?></td>
                                                <td><?php echo $memRows["mem_id"]; ?></td>
                                                <td><?php echo $memRows["mem_psw"]; ?></td>
                                                <td><?php echo $memRows["email"]; ?></td>
                                                <td><?php echo $memRows["address"]; ?></td>
                                                <td><?php echo $memRows["phone"]; ?></td>
                                                <td><?php echo $memRows["mem_pic"]; ?></td>
                                                <td><select name="mem_state" class="form-control">
                                                        <option value="0" <?php if (!(strcmp("0", $memRows["mem_state"]))) {
                                                                                echo "selected=\"selected\"";
                                                                            } ?>>停權</option>
                                                        <option value="1" <?php if (!(strcmp("1", $memRows["mem_state"]))) {
                                                                                echo "selected=\"selected\"";
                                                                            } ?>>使用中</option>
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
                        <div class="tab-pane fade" id="manager" role="tabpanel" aria-labelledby="manager-tab">
                            <div class="pb-4 text-right"><input class="btn btn-lovefruit btn-lg" type="button" value="新增管理員">
                            </div>

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">編號</th>
                                        <th scope="col">帳號</th>
                                        <th scope="col">密碼</th>
                                        <th scope="col">管理員名稱</th>
                                        <th scope="col">權限</th>
                                        <th scope="col">狀態</th>
                                        <th scope="col">動作</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    while ($empRows = $emp->fetch(PDO::FETCH_ASSOC)) {
                                        ?>

                                        <tr>
                                            <form action="empChange.php" method="POST">
                                                <input class="d-none" type="text" name="emp_no" value="<?php echo $empRows["emp_no"]; ?>">
                                                <th scope="row"><?php echo $empRows["emp_no"]; ?></th>
                                                <td><?php echo $empRows["emp_id"]; ?></td>
                                                <td><?php echo $empRows["emp_psw"]; ?></td>
                                                <td><?php echo $empRows["emp_name"]; ?></td>
                                                <td><select name="emp_permission" class="form-control">
                                                        <option value="0" <?php if (!(strcmp("0", $empRows["emp_permission"]))) {
                                                                                echo "selected=\"selected\"";
                                                                            } ?>>一般</option>
                                                        <option value="1" <?php if (!(strcmp("1", $empRows["emp_permission"]))) {
                                                                                echo "selected=\"selected\"";
                                                                            } ?>>最高權限</option>
                                                    </select>
                                                </td>
                                                <td><select name="emp_state" class="form-control">
                                                        <option value="0" <?php if (!(strcmp("0", $empRows["emp_state"]))) {
                                                                                echo "selected=\"selected\"";
                                                                            } ?>>離職</option>
                                                        <option value="1" <?php if (!(strcmp("1", $empRows["emp_state"]))) {
                                                                                echo "selected=\"selected\"";
                                                                            } ?>>在職</option>
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
        </div>
    </section>

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../js/back-nav.js"></script>
</body>

</html>