<?php 
try {
    require_once("connect-dd101g3.php");
	$sql = "SELECT m.mem_name, m.mem_pic, con.cfs_to, con.cfs_content, con.cfs_pic, con.cfs_good,cus.cto_pic, cus.cto_words, cus.stage_no,con.cfs_no from confessions con JOIN customize cus ON con.cto_no = cus.cto_no JOIN member m on m.mem_no = con.mem_no ORDER BY con.cfs_no DESC ";
	$confessions = $pdo->prepare($sql);
	$confessions -> execute();
} catch (PDOException $e) {
	$errMsg .= "錯誤訊息:". $e->getMessage() ."<br>";
	$errMsg .= "行數:". $e->getLine()."<br>";
}



function stageNo($stage)
{
	switch ($stage) {
		case '1':
			return 'single';
			break;
		case '2':
			return 'true-love';
			break;
		case '3':
			return 'hot-love';
			break;
		case '4':
			return 'break-up';
			break;
	}
}
function stageName($stage)
{
	switch ($stage) {
		case '1':
			return '單身';
			break;
		case '2':
			return '初戀';
			break;
		case '3':
			return '熱戀';
			break;
		case '4':
			return '分手';
			break;
	}
}
 ?>

<html lang="UTF-8">

<head>
	<meta charset="UTF-8" />
	<title>菓籽戀冰所-愛的留言</title>
	<meta name="keywords" content="菓籽戀冰所" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="icon" href="img/navBar/logo.png" />
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/nav.css" />
	<link rel="stylesheet" href="css/leavemessage.css">
	<link rel="stylesheet" href="css/temporary-cart.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>

<body>
	<?php 
	require_once("nav.php");
	?>
	<section class="banner">
		<div class="banner-heart-group">
			<div class="heart-b-item">
				<span class="line line-left">
					<img src="img/message/heart.png" alt="愛心">
				</span>
				<span class="line line-right">
					<img src="img/message/heart.png" alt="愛心">
				</span>
			</div>
			<div class="heart-s-item">
				<span class="line">
					<img src="img/message/heart.png" alt="愛心">
				</span>
			</div>
		</div>
		<div class="title">
			<div class="title-img">
				<img src="img/ribbon.png" alt="標題背景">
				<h1>愛的留言</h1>
			</div>
		</div>
		<div class="banner-item-group">
					<div class="icecream-group">
						<div class="icecream-item-blue"><img src="img/message/ice-blue.png" alt="冰棒"></div>
						<div class="icecream-item-yellow"><img src="img/message/ice-yellow.png" alt="冰棒"></div>
					</div>
					<div class="fly-item">
						<img src="img/message/flycouple.png" alt="飛天少女豬">
					</div>
		</div>
	</section>
	<section class="btn" id="app">
		<div class="btn-group">
			<div class="btn-filter-group">
				<h2>篩選條件:</h2>
				<div class="filter-item filter-active">
					<button type="button" class="filter" id="all">全部</button>
				</div>
				<div class="filter-item">
					<button type="button" class="filter" id="singlebtn">單身</button>
				</div>
				<div class="filter-item">
					<button type="button" class="filter" id="trueLove">初戀</button>
				</div>
				<div class="filter-item">
					<button type="button" class="filter" id="hotLove">熱戀</button>
				</div>
				<div class="filter-item">
					<button type="button" class="filter" id="breakUp">分手</button>
				</div>
				<select v-model="status" id="filter-pull">
					<option selected>全部</option>
					<option>單身</option>
					<option>初戀</option>
					<option>熱戀</option>
					<option>分手</option>
				</select>
			</div>
			<a class="leave-message" href="writemessage.php">
				<span class="leave-message-btn" id="leaveMessage">
					<img src="img/btn/ICE.png" alt="冰棒" class="testclass">我要留言
				</span>
			</a>
		</div>
	</section>
	<section class="message-bgi">
		<div class="message">
			<?php while ($row = $confessions -> fetchObject()) {?>
			<div class="message-item <?php echo stageNo($row->stage_no); ?>">
				<div class="cloud">
					<i class='fas fa-cloud'></i><span><?php echo stageName($row->stage_no); ?></span>
				</div>
				<div class="message-header">
					<?php if ($row->mem_pic) { ?>
						<div class="user-head"><img src="<?php echo $row->mem_pic ?>" alt="使用者頭像"></div>
					<?php }else{
						echo "<i class='fas fa-user-circle'></i>";
					} ?>
					<p><?php echo $row->mem_name; ?></p>
				</div>

				<div class="message-body">
					<figure>
						<img src="<?php echo $row->cfs_pic; ?>" alt="上傳照片">
					</figure>
						<h3><span>To:</span><?php echo $row->cfs_to; ?></h3>
					<p><?php echo $row->cfs_content; ?></p>
					<p class="s-text">#<?php echo $row->cto_words; ?></p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span><?php echo $row->cfs_good; ?></span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="<?php echo $row->cto_pic; ?>" alt="客製冰棒">
				</div>
			</div>
			<?php } ?>
			<div class="message-item hot-love">
				<div class="cloud">
					<i class='fas fa-cloud'></i><span>熱戀</span>
				</div>
				<div class="message-header">
					<i class='fas fa-user-circle'></i>
					<p>bdfasd</p>
				</div>

				<div class="message-body">
					<figure>
						<img src="img/cherry.png" alt="上傳照片">
					</figure>
						<h3><span>To:</span>4146131</h3>
					<p>fasdf,sal;df;sadkf;lsadmfs</p>
					<p class="s-text">#sdfgdsfgkmdfkg</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>5</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/custom/texture1.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item true-love">
				<div class="cloud">
					<i class='fas fa-cloud'></i><span>熱戀</span>
				</div>
				<div class="message-header">
					<i class='fas fa-user-circle'></i>
					<p>bdfasd</p>
				</div>

				<div class="message-body">
					<figure>
						<img src="img/cherry.png" alt="上傳照片">
					</figure>
						<h3><span>To:</span>4146131</h3>
					<p>fasdf,sal;df;sadkf;lsadmfs</p>
					<p class="s-text">#sdfgdsfgkmdfkg</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>5</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/custom/texture1.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item break-up">
				<div class="cloud">
					<i class='fas fa-cloud'></i><span>熱戀</span>
				</div>
				<div class="message-header">
					<i class='fas fa-user-circle'></i>
					<p>bdfasd</p>
				</div>

				<div class="message-body">
					<figure>
						<img src="img/cherry.png" alt="上傳照片">
					</figure>
						<h3><span>To:</span>4146131</h3>
					<p>fasdf,sal;df;sadkf;lsadmfs</p>
					<p class="s-text">#sdfgdsfgkmdfkg</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>5</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/custom/texture1.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item single">
				<div class="cloud">
					<i class='fas fa-cloud'></i><span>熱戀</span>
				</div>
				<div class="message-header">
					<i class='fas fa-user-circle'></i>
					<p>bdfasd</p>
				</div>

				<div class="message-body">
					<figure>
						<img src="img/cherry.png" alt="上傳照片">
					</figure>
						<h3><span>To:</span>4146131</h3>
					<p>fasdf,sal;df;sadkf;lsadmfs</p>
					<p class="s-text">#sdfgdsfgkmdfkg</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>5</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/custom/texture1.png" alt="客製冰棒">
				</div>
			</div>
		</div>
	</section>



	<footer>
		<span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/nav.js"></script>
	<script src="js/message.js"></script>
	<script src="js/shop.js"></script>
	<script>
		new Vue({
			el:"#app",
			data:{
				status:"全部",
			},
			methods:{
			},
		});
	</script>
</body>

</html>