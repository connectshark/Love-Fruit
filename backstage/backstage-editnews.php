<?php
$errMsg = "";
try {
    require_once("connect-dd101g3.php");
    $sqlnews = "select * from news where news_no= :news_no";
    $news = $pdo->prepare($sqlnews);
    $news->bindValue(":news_no", $_REQUEST["news_no"]);
    $news->execute();
    $newsRows = $news->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $errMsg .=  $e->getMessage() . "<br>";
    echo $errMsg .=  $e->getLine() . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">

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
                <h3>新增-最新消息頁面</h3>
            </div>
        </div>
    </section>

    <section class="container-fluid px-4">
        <div class="row justify-content-center">
            <div class="col-10 bg-white rounded p-4">
                <form action="edit-news.php" method="POST" enctype="multipart/form-data">
                    <input class="d-none" name="news_no" type="text" value="<?php echo $newsRows["news_no"] ?>">
                    <div class="row p-2">
                        <div class="col-1 bg-lovefruit rounded text-white text-center p-1">標題</div>
                        <div class="col-5"><input class="form-control" type="text" name="news_title" maxlength="20" value="<?php echo $newsRows["news_title"]?>" placeholder="請輸入文章標題"></div>
                        <div class="col-6 p-1 text-secondary">標題最多20字</div>
                    </div>
                    <div class="row p-2">
                        <div class="col-1 bg-lovefruit rounded text-white text-center p-1">日期</div>
                        <div class="col-5"><input class="form-control" type="text" name="news_date" maxlength="10" value="<?php echo $newsRows["news_date"]?>" placeholder="請輸入日期">
                        </div>
                        <div class="col-6 p-1 text-secondary">格式：2012-05-04</div>
                    </div>
                    <div class="row p-2">
                        <div class="col-1 bg-lovefruit rounded text-white text-center p-1">文章分類</div>
                        <div class="col-2">
                            <select class="form-control" name="news_class">
                                <option>文章分類</option>
                                <option value="0" <?php if (!(strcmp("0", $newsRows["news_class"]))) {echo "selected=\"selected\"";} ?>>揪團新訊</option>
                                <option value="1" <?php if (!(strcmp("1", $newsRows["news_class"]))) {echo "selected=\"selected\"";} ?>>新品上市</option>
                                <option value="2" <?php if (!(strcmp("2", $newsRows["news_class"]))) {echo "selected=\"selected\"";} ?>>園區公告</option>
                                <option value="3" <?php if (!(strcmp("3", $newsRows["news_class"]))) {echo "selected=\"selected\"";} ?>>季節限定</option>
                            </select></div>
                    </div>
                    <div class="row p-2">
                        <div class="col-1 bg-lovefruit rounded text-white text-center p-2">圖片</div>
                        <div class="col-11">
                            <div class="row">
                                <div class="col-1 p-1">
                                    <label class="news-file mb-0 ml-3 btn btn-info" for="newsFile">選擇圖片</label>
                                    <input class="d-none" type="file" name="newsFile" id="newsFile" accept=".jpg,.png">
                                </div>
                                <div class="col-6 p-2 text-secondary">圖片格式 jpg / png</div>
                                <div class="col-6"><img class="img-fluid" id="img-preview" src="../<?php echo $newsRows["news_pic"]?>" alt=""></div>
                            </div>

                        </div>

                    </div>
                    <div class="row p-2">
                        <div class="col-1 bg-lovefruit rounded text-white text-center p-2">內容</div>
                        <div class="col-7 p-1">
                            <textarea class="form-control ml-3" name="news_content" rows="10"><?php echo $newsRows["news_content"]?></textarea>
                        </div>
                    </div>
                    <div class="row p-2">
                        <input class="btn btn-info" type="submit" value="確認送出">
                    </div>

                </form>

            </div>
        </div>

    </section>


    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../js/back-nav.js"></script>
    <script>
        window.onload = function() {
            document.getElementById("newsFile").onchange = function(e) {
                //------------------顯示檔案
                let file = e.target.files[0];
                let reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("img-preview").src = e.target.result;
                }
                reader.readAsDataURL(file);
            };
        }
    </script>


</body>

</html>