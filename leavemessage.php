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
	<section class="btn">
		<div class="btn-group">
			<div class="btn-filter-group">
				<h2>篩選條件:</h2>
				<div class="filter-item filter-active">
					<button type="button" class="filter" id="all">全部</button>
				</div>
				<div class="filter-item">
					<button type="button" class="filter" id="single">單身</button>
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
			<a class="leave-message" href="writemessage.html">
				<span class="leave-message-btn" id="leaveMessage">
					<img src="img/btn/ICE.png" alt="" class="testclass">我要留言
				</span>
			</a>
		</div>
	</section>
	<section class="message-bgi">
		<div class="message">
			<div class="message-item break-up">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>分手</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>

				<div class="message-body">
					<figure>
						<img src="img/message/ice-yellow.png" alt="上傳照片">
					</figure>
						<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item true-love">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>初戀</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/course/diyimg3.png" alt="上傳照片">
					</figure>
					<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item true-love">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>初戀</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/news/orange-ball.png" alt="上傳照片">
					</figure>
					<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item break-up">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>分手</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/course/diyimg3.png" alt="上傳照片">
					</figure>
						
						<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item hot-love">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>熱戀</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/course/diyimg3.png" alt="上傳照片">
					</figure>
						
						<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item single">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>單身</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/course/diyimg3.png" alt="上傳照片">
					</figure>
						
						<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item hot-love">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>熱戀</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/course/diyimg3.png" alt="上傳照片">
					</figure>
						
						<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item single">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>單身</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/course/diyimg3.png" alt="上傳照片">
					</figure>
						
						<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item break-up">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>分手</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/course/diyimg3.png" alt="上傳照片">
					</figure>
						
						<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item true-love">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>初戀</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/course/diyimg3.png" alt="上傳照片">
					</figure>
						
						<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item true-love">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>初戀</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/course/diyimg3.png" alt="上傳照片">
					</figure>
						
						<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item break-up">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>分手</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/course/diyimg3.png" alt="上傳照片">
					</figure>
						
						<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item hot-love">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>熱戀</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/course/diyimg3.png" alt="上傳照片">
					</figure>
						
						<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item single">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>單身</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/course/diyimg3.png" alt="上傳照片">
					</figure>
						
						<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item hot-love">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>熱戀</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/course/diyimg3.png" alt="上傳照片">
					</figure>
						
						<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
				</div>
			</div>
			<div class="message-item single">
				<div class="cloud">
					<i class="fas fa-cloud"></i><span>單身</span>
				</div>
				<div class="message-header">
					<i class="fas fa-user-circle"></i>
					<p>會員名稱</p>
				</div>
				<div class="message-body">
					<figure>
						<img src="img/greenapple.png" alt="上傳照片">
					</figure>
						<h3><span>To:</span>王先生</h3>
					<p>看著微笑的你，突然發現，我真是世界上最幸福的人。</p>
					<p class="s-text">#語重心長</p>
				</div>
				<div class="message-footer">
					<button type="button">
						<i class="fas fa-thumbs-up"></i>
						<span>10</span>
					</button>
					<button type="button">
						<i class="fas fa-share-alt"></i>
						<span>分享</span>
					</button>
				</div>
				<div class="custom-ice">
					<img src="img/message/ice-blue.png" alt="客製冰棒">
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