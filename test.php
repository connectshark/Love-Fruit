<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <?php
  try {
    $dsn = "mysql:host=localhost;port=3306;dbname=dd101g3;charset=utf8";
    $user = "root";
    $password = "";
    $pdo = new PDO($dsn, $user, $password);
    echo "連線成功 <br>";
  } catch (PDOException $e) {
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    echo "錯誤行號 : ", $e->getLine(), "<br>";
    // echo "系統暫時發生狀況，請通知系統維護人員<br>";
  }
  ?>
</body>

</html>