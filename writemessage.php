<?php 
try {
	$dsn="mysql:host=localhost;port=3306;dbname=dd101g3;charset=utf8";
	$user = "root";
	$psw = "root";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO( $dsn , $user , $psw, $options );
	$sql = "select m.mem_name, m.mem_pic, c.cto_words, c.cto_pic, c.stage_no from customize c join member m on c.mem_no = m.mem_no where c.mem_no = :memNo";
	$memNo = 2;//之後改為session
	$messages = $pdo->prepare($sql);
	$messages -> bindValue(':memNo',$memNo);
	$messages -> execute();
	$row = $messages -> fetchObject();
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
		<form action="writecfs.php" method="post" enctype="multipart/form-data">
		<section class="letter">
			<div class="letter-area">
				<div class="message-item <?php echo stageNo($row->stage_no); ?>">
					<div class="cloud">
						<i class="fas fa-cloud"></i><span><?php echo stageName($row->stage_no); ?></span>
					</div>
					<div class="message-header">
						<i class="fas fa-user-circle"></i>
						<p><?php echo $row->mem_name; ?></p>
					</div>

					<div class="message-body">
						<div class="holder">
							<img :src="img" :alt="imgName">
						</div>
						<h3><span>To:</span>{{forWho}}</h3>
						<p v-if="text">{{text}}</p>
						<p class="m-text" v-else></p>
						<p class="s-text">#<?php echo $row->cto_words ?></p>
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
						<img src="<?php echo $row->cto_pic ?>" alt="客製冰棒">
					</div>
				</div>
				<div class="letter-content">
					<div class="letter-header">
						<div class="user-img">
							<i class="fas fa-user-circle"></i>
						</div>
						<div class="user-name">
							<p><?php echo $row->mem_name; ?></p>
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
	                    <input type="file" name="pic" @change="fileLoad" accept="image/png, image/jpeg" value="上傳照片">
						</label>
					</div>
					<div class="letter-footer">
		                <div class="write-title">
		                    <p>寫給誰<span>{{whonum}} / 5</span></p>
		                    <label><input type="text" maxlength="5" minlength="1" v-model="forWho" id="userTitle" placeholder="寫給誰" name="cfsTo"></label>
		                </div>
		                <div class="write-content">
		                    <p>留言內容<span>{{textnum}} / 30</span></p>
		                    <label><input type="text" minlength="1" maxlength="30" v-model="text" id="userContent" placeholder="留言內容" name="cfsContent"></label>
		                </div>
		                <div class="write-buttons">
		                    <label><input type="reset" value="清除" @click="clear"></label>
		                    <label><input type="submit" value="送出" id="submit"></label>
		                    <input type="hidden" name="memNo" value="2">
		                </div>
					</div>
				</div>
			</div>
		</section></form>
	</div>
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