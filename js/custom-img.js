function draw(texture,color1,color2) {
	var canvas = document.getElementById('canvas');
	var ctx = canvas.getContext('2d');
switch (texture) {
	case 0:	
	// 第一個模型開始冰棒
	ctx.beginPath();
	ctx.lineWidth=0;
	ctx.strokeStyle="rgba(0,0,0,0)";
	ctx.moveTo(83,115);
	ctx.quadraticCurveTo(100,30,195,37);
	ctx.quadraticCurveTo(265,40,285,110);
	ctx.lineTo(285,269);
	ctx.quadraticCurveTo(340,265,337,300);
	ctx.quadraticCurveTo(330,340,290,365);
	ctx.lineTo(220,365);
	ctx.lineTo(220,475);
	ctx.quadraticCurveTo(195,500,170,475);
	ctx.lineTo(170,365);
	ctx.lineTo(75,365);
	ctx.quadraticCurveTo(32,350,35,310);
	ctx.quadraticCurveTo(45,280,80,273);
	ctx.clip();
	ctx.beginPath();
	ctx.fillStyle="#FFD5B3";
	ctx.fillRect(170,365,50,150);


	var gradient = ctx.createLinearGradient(0,175,400,175);//漸層色起點&漸層色終點
	gradient.addColorStop(0,color1);
	gradient.addColorStop(1,color2);
	ctx.fillStyle=gradient;
	ctx.fillRect(0,0,500,365);
	ctx.fill();



	var texturePic = new Image();
	texturePic.src = "../img/custom/texture1.png";
	texturePic.addEventListener('load',function () {
		ctx.drawImage(texturePic,0,0,texturePic.width,texturePic.height);
	});
		break;
	case 1:
	// 第二個模型開始熊掌
	ctx.beginPath();
	ctx.lineWidth=3;
	ctx.strokeStyle="rgba(0,0,0,1)";
	ctx.moveTo(65,173);
	ctx.quadraticCurveTo(27,145,45,110);
	ctx.quadraticCurveTo(60,100,84,100);
	ctx.quadraticCurveTo(80,50,115,38);
	ctx.lineTo(180,43);
	ctx.quadraticCurveTo(192,35,195,38);
	ctx.lineTo(255,39);
	ctx.quadraticCurveTo(280,50,280,85);
	ctx.quadraticCurveTo(330,110,324,140);
	ctx.quadraticCurveTo(320,170,292,178);
	ctx.quadraticCurveTo(310,265,285,280);
	ctx.quadraticCurveTo(320,280,330,290);
	ctx.quadraticCurveTo(345,345,285,365);
	ctx.lineTo(220,365);
	ctx.lineTo(220,475);
	ctx.quadraticCurveTo(195,500,170,475);
	ctx.lineTo(170,365);
	ctx.lineTo(88,365);
	ctx.quadraticCurveTo(55,355,54,320);
	ctx.quadraticCurveTo(55,300,78,290);
	ctx.quadraticCurveTo(50,260,52,225);
	ctx.quadraticCurveTo(50,210,65,173);
	ctx.clip();
	ctx.beginPath();
	ctx.fillStyle="#FFD5B3";
	ctx.fillRect(170,365,50,150);



	var gradient = ctx.createLinearGradient(0,175,400,175);//漸層色起點&漸層色終點
	gradient.addColorStop(0,color1);
	gradient.addColorStop(1,color2);
	ctx.fillStyle=gradient;
	ctx.fillRect(0,0,500,365);
	ctx.fill();



	var texturePic = new Image();
	texturePic.src = "../img/custom/texture2.png";
	texturePic.addEventListener('load',function () {
		ctx.drawImage(texturePic,0,0,texturePic.width,texturePic.height);
	});
		break;
	case 2:
	ctx.beginPath();
	ctx.lineWidth=3;
	ctx.strokeStyle="rgba(0,0,0,0)";
	ctx.moveTo(105,190);
	ctx.quadraticCurveTo(18,130,42,66);
	ctx.quadraticCurveTo(100,30,120,38);
	ctx.quadraticCurveTo(148,45,180,142);
	ctx.quadraticCurveTo(215,125,222,134);
	ctx.quadraticCurveTo(260,35,310,39);
	ctx.lineTo(330,39);
	ctx.quadraticCurveTo(353,47,357,70);
	ctx.quadraticCurveTo(360,110,286,178);
	ctx.quadraticCurveTo(312,205,307,249);
	ctx.quadraticCurveTo(326,265,304,294);
	ctx.quadraticCurveTo(326,295,325,305);
	ctx.quadraticCurveTo(346,306,344,330);
	ctx.quadraticCurveTo(344,368,295,390);
	ctx.lineTo(220,390);
	ctx.lineTo(220,475);
	ctx.quadraticCurveTo(195,500,170,475);
	ctx.lineTo(170,390);
	ctx.lineTo(80,390);
	ctx.quadraticCurveTo(42,378,44,340);
	ctx.quadraticCurveTo(53,312,77,300);
	ctx.quadraticCurveTo(65,275,82,260);
	ctx.quadraticCurveTo(70,225,105,190);
	ctx.clip();
	ctx.beginPath();
	ctx.fillStyle="#FFD5B3";
	ctx.fillRect(170,390,50,200);



	var gradient = ctx.createLinearGradient(0,175,400,175);//漸層色起點&漸層色終點
	gradient.addColorStop(0,color1);
	gradient.addColorStop(1,color2);
	ctx.fillStyle=gradient;
	ctx.fillRect(0,0,500,392);
	ctx.fill();



	var texturePic = new Image();
	texturePic.src = "../img/custom/texture3.png";
	texturePic.addEventListener('load',function () {
		ctx.drawImage(texturePic,0,0,texturePic.width,texturePic.height);
	});
		break;
	case 3:
	ctx.beginPath();
	ctx.lineWidth=3;
	ctx.strokeStyle="rgba(0,0,0,0)";
	ctx.moveTo(90,222);
	ctx.quadraticCurveTo(95,122,163,40);
	ctx.quadraticCurveTo(180,44,201,36);
	ctx.quadraticCurveTo(260,64,281,210);
	ctx.quadraticCurveTo(308,225,310,250);
	ctx.quadraticCurveTo(312,265,311,275);
	ctx.quadraticCurveTo(320,280,322,290);
	ctx.quadraticCurveTo(335,294,336,305);
	ctx.quadraticCurveTo(338,350,290,375);
	ctx.lineTo(220,375);
	ctx.lineTo(220,475);
	ctx.quadraticCurveTo(195,500,170,475);
	ctx.lineTo(170,375);
	ctx.lineTo(70,375);
	ctx.quadraticCurveTo(35,365,36,324);
	ctx.quadraticCurveTo(40,305,65,285);
	ctx.quadraticCurveTo(65,243,90,222);
	ctx.clip();
	ctx.beginPath();
	ctx.fillStyle="#FFD5B3";
	ctx.fillRect(170,375,50,150);



	var gradient = ctx.createLinearGradient(0,175,400,175);//漸層色起點&漸層色終點
	gradient.addColorStop(0,color1);
	gradient.addColorStop(1,color2);
	ctx.fillStyle=gradient;
	ctx.fillRect(0,0,500,375);
	ctx.fill();



	var texturePic = new Image();
	texturePic.src = "../img/custom/texture4.png";
	texturePic.addEventListener('load',function () {
		ctx.drawImage(texturePic,0,0,texturePic.width,texturePic.height);
	});
		break;
}


	ctx.save();
	ctx.fillStyle="#333";
	ctx.font = "18px Tahoma";
	ctx.fillText('LOL~~~~~~~HAHAHA gg ^^',175,450);
	ctx.rotate(Math.PI/2);
	ctx.restore();




	
	// var fruiteslice = new Image();
	// fruiteslice.src = "../img/blueberry.png";
	// fruiteslice.addEventListener('load',function() {
	// 	ctx.drawImage(fruiteslice,175,0,fruiteslice.width,fruiteslice.height);
	// })
	// bg = canvas.toDataURL("image/png");
	// ctx.clearRect(0, 0, canvas.width, canvas.height);
	// console.log(bg);
	// var bgi = new Image();
	// bgi.src = bg;
	// bgi.addEventListener('load',function() {
	// 	ctx.drawImage(bgi,0,0,bgi.width,bgi.height);
	// });
}