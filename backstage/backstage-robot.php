<?php

session_start();
if (isset($_SESSION["emp_no"]) != true) {
    header("location:backstage-login.php");
}

$errmsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlrobot = "select * from robot";
    $robot = $pdo->query($sqlrobot);
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
                <h3>機器人管理頁</h3>
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
                                    <th scope="col">關鍵字</th>
                                    <th scope="col">回答</th>
                                    <th scope="col">編輯</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                while ($robotRows = $robot->fetch(PDO::FETCH_ASSOC)) {
                                    ?>

                                    <tr>
                                        <form action="robotChange.php" method="POST">
                                            <input class="d-none" type="text" name="qus_no" value="<?php echo $robotRows["qus_no"]; ?>">
                                            <th scope="row"><?php echo $robotRows["qus_no"]; ?></th>
                                            <td><input class="form-control" type="text" name="keyword" value="<?php echo $robotRows["keyword"]; ?>"></td>
                                            <td><textarea class="form-control" name="answer" cols="30" rows="2"><?php echo $robotRows["answer"]; ?></textarea></td>
                                            <td><input class="robot-btn btn btn-info" type="submit" value="送出修改"></td>
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