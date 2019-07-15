<html lang="UTF-8">

<head>
	<meta charset="UTF-8" />
	<title>菓籽戀冰所-寫下專屬留言</title>
	<meta name="keywords" content="菓籽戀冰所" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="icon" href="img/navBar/logo.png" />
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/nav.css" />
	<link rel="stylesheet" href="css/writemessage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>

<body>
	<?php 
	require_once("nav.php");
	?>
	<div class="letter-title">
		<div class="title-img">
			<img src="img/ribbon.png" alt="標題背景">
			<h1>寫下妳/你的專屬留言</h1>
		</div>
	</div>
	<div id="app">
		<section class="letter">
			<div class="letter-area">
				<div class="message-item break-up">
					<div class="cloud">
						<i class="fas fa-cloud"></i><span>分手</span>
					</div>
					<div class="message-header">
						<i class="fas fa-user-circle"></i>
						<p>會員名稱</p>
					</div>

					<div class="message-body">
						<div class="holder">
							<img :src="img" :alt="imgName">
						</div>
						<h3><span>To:</span>{{forWho}}</h3>
						<p v-if="text">{{text}}</p>
						<p class="m-text" v-else></p>
						<p class="s-text">#</p>
					</div>
					<div class="message-footer">
						<button type="button">
							<i class="fas fa-thumbs-up"></i>
							<span>0</span>
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
				<div class="letter-content">
					<div class="letter-header">
						<div class="user-img">
							<i class="fas fa-user-circle"></i>
						</div>
						<div class="user-name">
							<p>使用者名稱</p>
						</div>
					</div>
					<div class="letter-body">
						<label>
							<div class="letter-load">
								<p>上傳圖片</p>
							</div>
							<div class="letter-phone">
								<figure v-if="img">
									<img :src="img" :alt="imgName">
								</figure>
								<div class="plus-img" v-else>
									<i class="fas fa-plus"></i>
								</div>
							</div>
	                    <input type="file" name="message-img" @change="fileLoad" accept="image/png, image/jpeg" value="上傳照片">
						</label>
					</div>
					<div class="letter-footer">
		                <div class="write-title">
		                    <p>寫給誰<span>{{whonum}} / 5</span></p>
		                    <label><input type="text" maxlength="5" minlength="1" v-model="forWho" id="userTitle" placeholder="寫給誰"></label>
		                </div>
		                <div class="write-content">
		                    <p>留言內容<span>{{textnum}} / 30</span></p>
		                    <label><input type="text" minlength="1" maxlength="30" v-model="text" id="userContent" placeholder="留言內容"></label>
		                </div>
		                <div class="write-buttons">
		                    <label><input type="reset" value="清除" @click="clear"></label>
		                    <label><input type="submit" value="送出" id="submit"></label>
		                </div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<section class="pop">
		<div class="pop-btn-group">
		<div class="btn-item"><button></button></div>
		<div class="btn-item"></div>
		</div>
	</section>
	<footer>
		<span>LoveFruit.Ice Copyright © 2019 All right reserved, Ltd.</span>
	</footer>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/nav.js"></script>
	<script src="js/writemessage.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
	<script>
		new Vue({
			el: "#app",
			data: {
				forWho: "",
				img: "",
				imgName: "",
				text: "",
			},
			methods: {
				fileLoad(e) {
					let file = e.target.files.item(0);
					this.imgName = file.name;
					let readfile = new FileReader();
					readfile.readAsDataURL(file);
					readfile.addEventListener('load', this.imgLoad);
				},
				imgLoad(e) {
					this.img = e.target.result;
				},
				clear() {
					this.forWho = "";
					this.img = "";
					this.imgName = "";
					this.text = "";
				}
			},
			computed: {
				textnum(){
					return 30 - this.text.length;
				},
				whonum(){
					return 5 - this.forWho.length;
				},
			},
		});
	</script>
</body>

</html>