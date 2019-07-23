<?php 
session_start();
$errMsg="";

try {
	require_once("mac-require.php");
	$sql = "select n.news_no, n.news_title,n.news_pic,n.news_content,n.news_date,n.news_class,e.emp_name from news n join employee e on n.emp_no = e.emp_no WHERE emp_state = 1 ORDER BY n.news_date desc";
  $news = $pdo->prepare($sql);
	$news -> execute();
} catch (PDOException $e) {
	  $errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
    $errMsg .= "行數:". $e->getLine()."<br>";
    echo $errMsg;
}

function newsNo($newsClass)
{
	switch ($newsClass) {
		case '0':
			return 'newgroup';
			break;
		case '1':
			return 'newpds';
			break;
		case '2':
			return 'park';
			break;
		case '3':
			return 'limit';
			break;
	}
}
function newsName($newsClass)
{
	switch ($newsClass) {
		case '0':
			return '揪團新訊';
			break;
		case '1':
			return '新品上市';
			break;
		case '2':
			return '園區公告';
			break;
		case '3':
			return '季節限定';
			break;
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>菓籽戀冰所</title>
  <link rel="icon" href="img/navBar/logo.png" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/news.css">
  <link rel="stylesheet" href="css/common.css">
  

</head>

<body>
<?php 
 require_once("nav.php");
  ?>

  <div class="news-wrap" id="app">
      <section class="banner bubble-box">
          <div class="title">
            <div class="img-bg">
              <img src="img/ribbon.png" alt="標題底圖">
              <span class="news">最新消息</span>
            </div>
          </div>
          <div class="air-ball">
            <img src="img/news/orange-ball.png" alt="橘子熱氣球">
            <img src="img/news/orange-ball.png" alt="橘子熱氣球">
          </div>
      </section>

    <section class="select">
      <div class="select-group">
        <div class="select-filter-group">
          <h3>篩選條件:</h3>
        
            <div class="filter-item filter-active">
              <button type="button"class="filter"  id="all" >全部消息</button>
            </div>
            <div class="filter-item">
              <button type="button" class="filter" id="newgroup">揪團新訊</button>
            </div>
            <div class="filter-item">
              <button type="button"class="filter"  id="newpds" >新品上市</button>
            </div>
            <div class="filter-item">
              <button type="button" class="filter" id="park" >園區公告</button>
            </div>
            <div class="filter-item">
              <button type="button" class="filter" id="limit">季節限定</button>
            </div>
         
          <div class="mobile">
            <select id="filter-pull">
              <option >全部消息</option>
              <option >揪團快訊</option>
              <option >新品上市</option>
              <option >園區公告</option>
              <option >季節限定</option>
            </select>
          </div> 
        </div>
      </div>

    </section>

    <section class="wrapper">
   
      <div class="items-group">
      
      <?php while ($row = $news -> fetchObject()) {?>
        <div class="item  <?php echo newsNo($row->news_class); ?>"  >
         
          <a href="newsinner.php?news_no=<?php echo $row->news_no;?>">
          <div class="sort">
          <?php echo newsName($row->news_class); ?> 
          </div>
      
            <figure class="img"><img src="<?php echo $row->news_pic; ?>" alt=""></figure>
            <span class='time'><?php echo $row->news_date; ?></span>
            <span class="content">
              <h3><?php echo $row->news_title; ?></h3><img class="ice" src="img/btn/ICE.png" alt="">
            </span>
          </a>
        </div>
      <?php } ?>   
    </div>

     
      <!-- <div class="bookmark">
          <ul class="pagination">
              <li v-if="nowPage!=1 && totalPage>1">
                  <a @click.prevent="changePage(nowPage-1)"><</a>
              </li>
              <li v-for="page in pageNumber" :class="[page == nowPage ? 'active' : undefined]">
                  <a @click.prevent="changePage(page)">{{ page }}</a>
              </li>
              <li v-if="nowPage!=totalPage && totalPage>1">
                  <a @click.prevent="changePage(nowPage+1)">></a>
              </li>
          </ul>
      </div> -->
    </section>

  </div>
  <footer>
    <span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
  </footer> 
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/news.js"></script>
  <script src="js/login.js"></script>
  <script src="js/news-filter.js"></script>
  <script src="js/shop.js"></script>

  
  
</body>

</html>