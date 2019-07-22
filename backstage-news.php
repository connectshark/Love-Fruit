<?php
$errmsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlnews = "select * from news";
    $news = $pdo->query($sqlnews);
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
        <?php
        require_once("backstage-nav.php");
        ?>
    </header>

    <section class="container-fluid p-4">
        <div class="row justify-content-center">
            <div class="col-10 px-0">
                <h3>最新消息管理頁</h3>
            </div>
        </div>
    </section>

    <section class="container-fluid px-4">
        <div class="row justify-content-center">
            <div class="col-10 bg-white rounded">
                <div class="row p-4">
                    <div class="col-12 px-0 py-4">
                        <div class="pb-4 text-right text-white"><a class="btn btn-lovefruit btn-lg" href="backstage-addnews.php">新增文章</a>
                        </div>
                        <form action="">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">編號</th>
                                        <th scope="col">標題</th>
                                        <th scope="col">文章分類</th>
                                        <th scope="col">撰寫時間</th>
                                        <th scope="col">狀態</th>
                                        <th scope="col">編輯</th>
                                        <th scope="col">刪除</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    while ($newsRows = $news->fetch(PDO::FETCH_ASSOC)) {
                                        ?>

                                        <tr>
                                            <th scope="row"><?php echo $newsRows["news_no"]; ?></th>
                                            <td><?php echo $newsRows["news_title"]; ?></td>
                                            <td><select id="" class="form-control">
                                                    <option value="0" <?php if (!(strcmp("0", $newsRows["news_class"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>揪團新訊</option>
                                                    <option value="1" <?php if (!(strcmp("1", $newsRows["news_class"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>新品上市</option>
                                                    <option value="2" <?php if (!(strcmp("2", $newsRows["news_class"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>園區公告</option>
                                                    <option value="3" <?php if (!(strcmp("3", $newsRows["news_class"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>季節限定</option>
                                                </select>
                                            </td>
                                            <td><?php echo $newsRows["news_date"]; ?></td>
                                            <td><select id="" class="form-control">
                                                    <option value="0" <?php if (!(strcmp("0", $newsRows["news_state"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>下架</option>
                                                    <option value="1" <?php if (!(strcmp("1", $newsRows["news_state"]))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>上架</option>
                                                </select>
                                            </td>
                                            <td><input class="btn btn-info" type="button" value="送出修改">
                                                <a class="btn btn-info" href="backstage-editnews.php?news_no=<?php echo $newsRows["news_no"]; ?>">編輯內容</a>
                                            </td>
                                            <td><input class="btn btn-danger" type="button" value="刪除文章"></td>
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