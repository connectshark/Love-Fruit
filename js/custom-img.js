$(document).ready(function() {
	var canvas = document.getElementById('canvas');
	var ctx = canvas.getContext('2d');
	for (var i = 0; i <= 20; i++) {
		var line = i * 50;
		ctx.moveTo(0,line);
		ctx.lineTo(canvas.width,line);
		ctx.fillText(line,0,line);
		ctx.moveTo(line,0);
		ctx.lineTo(line,canvas.height);
		ctx.fillText(line,line,8);
	}
	ctx.strokeStyle='rgba(0,0,0,.3)';
	ctx.stroke();
	// var texturePic = new Image();
	// texturePic.src = "../img/custom/texture1.png";
	// texturePic.addEventListener('load',function () {
	// 	ctx.drawImage(texturePic,0,0,texturePic.width,texturePic.height);
	// });
	ctx.beginPath();
	ctx.lineWidth=3;
	ctx.strokeStyle="LightSkyBlue";
	ctx.moveTo(83,115);
	ctx.quadraticCurveTo(100,30,195,37);
	ctx.quadraticCurveTo(265,40,285,110);
	ctx.lineTo(285,269);
	ctx.quadraticCurveTo(340,265,337,300);
	ctx.quadraticCurveTo(330,340,290,360);
	ctx.lineTo(75,363);
	ctx.quadraticCurveTo(32,350,35,310);
	ctx.quadraticCurveTo(45,280,80,273);
	ctx.closePath();
	var gradient = ctx.createLinearGradient(175,0,175,500);//漸層色起點&漸層色終點
	gradient.addColorStop(0,'#333');
	gradient.addColorStop(0.5,'#fff');
	gradient.addColorStop(1,'#333');
	ctx.fillStyle=gradient;
	ctx.stroke();
});