var nowFlow = 1;
gradint=[];
function flowChange(now) {
	if (now < 1) {
		now = 1;
		nowFlow = 1;
	} else if(now > flow.length) {
		now = flow.length;
		nowFlow = flow.length;
	}
	for (var i = 0; i < flow.length; i++) {
		flow[i].style.display = 'none';
	}
	flow[now-1].style.display = 'block';
	if (now == 4) {
		$('#next').hide(0,function() {
			$('#ice-stick').show();
			$('#complete-all').show();
			$('#last').show();
		});
	}else if(now == 1){
		$('#last').hide(0,function() {
			$('#complete-all').hide();
			$('#none-last').hide();
		});
	}else{
		$('#next').show(0,function() {
			$('#ice-stick').hide();
			$('#complete-all').hide();
			$('#last').show();
		});
	}
}
function stepChange(now){
	for (let i = 0; i < step.length; i++) {
		step[i].classList.remove('active');
	}
	step[now-1].classList.add('active');
}
function lastChange() {
	nowFlow--;
	if (nowFlow < 1) {
		nowFlow = 1;
	} else if(nowFlow > flow.length) {
		nowFlow = flow.length;
	}
	flowChange(nowFlow);
	stepChange(nowFlow);
}
function nextChange() {
	nowFlow++;
	if (nowFlow < 1) {
		nowFlow = 1;
	} else if(nowFlow > flow.length) {
		nowFlow = flow.length;
	}
	flowChange(nowFlow);
	stepChange(nowFlow);
}

// 傳給畫布的圖
var textureImg;
// 第一步換圖
function imgChange(){
	var src = $(this).children().children().attr('src');
	var alt = $(this).children().children().attr('alt');
	textureImg = $(this).index('.texture-select');
	$('#texture-main').attr({
		src:src,
		alt:alt,
	});
	for (var i = 0; i < 4; i++) {
		$('#texture-p').removeClass('img-p-'+i);
	}
	$('#texture-p').addClass("img-p-"+$(this).index('.texture-select'));
	$('.list-description').eq(0).text(alt);
	$('#texture-min-img').attr('src',src);
	$('#texture-min').css('backgroundColor','#f596aa');
	$('.texture-select').children('figure').css('backgroundColor','#f596aa');
	$(this).children('figure').css('backgroundColor','#db4d6d');
	$('#mold-price').text('200');
	totalPrice();
}
// 第二步換水果
fruitePrice = new Array();
fruiteQuality = new Array();
fruiteColor = new Array();
fruiteItem = new Array();
function fruiteChange() {
	var itemNumber = $(this).index('.fruite-item');
	var arrIndex = fruiteItem.indexOf(itemNumber);
	// 檢查裡面元素是否重複
	if (arrIndex != -1) {
		fruiteItem.splice(arrIndex,1);
		$('.fruite-item').eq(itemNumber).children('figure').css('backgroundColor', '#f596aa');
	}else {
		//不重複檢查是否有位置可放
		if (fruiteItem.length < 2) {
			fruiteItem.push(itemNumber);
		}
	}
	for (var i = 0; i < fruiteItem.length; i++) {
		$('.fruite-item').eq(fruiteItem[i]).children('figure').css('backgroundColor', '#db4d6d');
	}
	bgcGradient();
	listItemChange();
	persentChange();
	totalPrice();
	$(window).resize(function () {
		persentChange(sliceIndex);
	});
}
function persentChange(slice) {
	if (fruiteItem.length == 1) {
		for (var i = 0; i < fruiteQuality[fruiteItem[0]].length; i++) {
			$('.progress-bar').eq(i).css('width',(fruiteQuality[fruiteItem[0]][i]*parseInt($('.default').css('width'))/30)+"px"); 
		}
	}else if(fruiteItem.length == 2){
		for (var i = 0; i <fruiteQuality[fruiteItem[0]].length; i++) {
			$('.progress-bar').eq(i).css('width', ( fruiteQuality[fruiteItem[0]][i]*parseInt($('.default').css('width'))/30 + fruiteQuality[fruiteItem[1]][i]*parseInt($('.default').css('width'))/30 )  +"px");
		}
	}else{
		$('.progress-bar').css('width',0);
	}
	if (slice >= 0 && slice <= 3) {
		var Mon = parseInt($('.default').css('width'))/30;
		for (var i = 0; i < sliceQuality[slice].length; i++) {
			var WW = parseInt($('.progress-bar').eq(i).css('width'));
			$('.progress-bar').eq(i).css('width',sliceQuality[slice][i]*Mon+WW);
		}
	}

}
// 價錢變數
var AFruitePrice=0;
var BFruitePrice=0;
function listItemChange() {
	if (fruiteItem.length == 1) {
		$('#fruite-b').children().attr({
			'src': "",
			'alt': "",
		});
		$('#list-description-b').text("");
		$('#list-price-b').text("");
		var Aimg = $('.fruite-item').eq(fruiteItem[0]).children().children().attr('src');
		var Aalt = $('.fruite-item').eq(fruiteItem[0]).children().children().attr('alt');
		$('#fruite-a').children().attr({
			'src': Aimg,
			'alt': Aalt,
		});
		AFruitePrice = fruitePrice[fruiteItem[0]];
		$('#list-price-a').text(AFruitePrice);
		$('#list-description-a').text(Aalt);
	}else if(fruiteItem.length == 2){
		var Aimg = $('.fruite-item').eq(fruiteItem[0]).children().children().attr('src');
		var Aalt = $('.fruite-item').eq(fruiteItem[0]).children().children().attr('alt');
		var Bimg = $('.fruite-item').eq(fruiteItem[1]).children().children().attr('src');
		var Balt = $('.fruite-item').eq(fruiteItem[1]).children().children().attr('alt');
		$('#fruite-a').children().attr({
			'src': Aimg,
			'alt': Aalt,
		});
		$('#fruite-b').children().attr({
			'src': Bimg,
			'alt': Balt,
		});

		BFruitePrice = fruitePrice[fruiteItem[1]];
		$('#list-price-b').text(fruitePrice[fruiteItem[1]]);
		$('#list-description-b').text(Balt);
	}else {
		$('#list-description-a').text("");
		$('#list-description-b').text("");
		$('#fruite-a').children().attr({
			'src': "",
			'alt': "",
		});
		$('#fruite-b').children().attr({
			'src': "",
			'alt': "",
		});
		$('#list-price-a').text("");
		$('#list-price-b').text("");
	}
}
function bgcGradient() {
	if (fruiteItem.length == 1) {
		$('.gradual-item').children().attr('src', '');
		var Aimg = $('.fruite-item').eq(fruiteItem[0]).children().children().attr('src');
		$('.gradual-item').eq(0).children().attr('src', Aimg);
		Afruite = fruiteColor[fruiteItem[0]];
		$('#range').css({
			'backgroundColor' : Afruite,
			'backgroundImage' : 'none',
		});
		gradintChangeClear();
	}else if (fruiteItem.length == 2) {
		Afruite = fruiteColor[fruiteItem[0]];
		Bfruite = fruiteColor[fruiteItem[1]];
		var Aimg = $('.fruite-item').eq(fruiteItem[0]).children().children().attr('src');
		var Bimg = $('.fruite-item').eq(fruiteItem[1]).children().children().attr('src');
		$('.gradual-item').eq(0).children().attr('src', Aimg);
		$('.gradual-item').eq(1).children().attr('src', Bimg);
		$('#range').css({
			'backgroundColor' : 'transparent',
			'backgroundImage' : 'linear-gradient(to right, '+Afruite+','+Bfruite+')',
		});
		gradintChangeClear();
		gradintChange(Afruite,Bfruite);
	}else {
		$('.gradual-item').children().attr('src', '');
		$('#range').css({
			'backgroundColor' : '#fff',
			'backgroundImage' : 'none',
		});
		gradintChangeClear();
	}
}
function gradintChangeClear() {
	$('#texture-p').css('backgroundImage', 'none');
}
function gradintChange(Aimg,Bimg) {
	$('#texture-p').css('backgroundImage', 'linear-gradient(to right, '+Aimg+','+Bimg+')');
}
// function angleChange() {
// 	if ($(this).val() > 360 || $(this).val() < 0 || $(this).val() == "") {
// 		$(this).css('borderColor','#FF4500');
// 		return;
// 	}
// 	bgcGradient();
// }
// 第三步
var sliceQuality=new Array();
var slicePrice=new Array();
var sliceSize = 50;
var sliceSrc;
var sliceIndex = -1;
function imgPut() {
	var src = $(this).children().children().attr('src');
	var alt = $(this).children().children().attr('alt');
	sliceIndex = $(this).index('.slice-item');
	sliceSrc = src;
	$('#slice-m').children().attr({
		src:src,
		alt:alt,
	});
	$('#slice-description').text(alt);
	$('#slice-main').children('img').attr({
		src: src,
		alt: alt,
	});
	slicePrice = 30;
	$('#slice-price').text(slicePrice);
	dragSliceImg();
	totalPrice();
	persentChange(sliceIndex);
}
function imgBigger() {
	sliceSize += 10;
	if (sliceSize > 150) {
		sliceSize = 150;
	}else if(sliceSize < 50){
		sliceSize = 50;
	}
	sliceSizeChange(sliceSize);
}
function imgSmaller() {
	sliceSize -= 10;
	if (sliceSize > 150) {
		sliceSize = 150;
	}else if(sliceSize < 50){
		sliceSize = 50;
	}
	sliceSizeChange(sliceSize);
}
function sliceSizeChange(size) {
	$('#slice-main').css('width',size+'px');
}
function dragSliceImg() {
	$('#slice-main').draggable({ 
		containment: '#texture-main',
		scroll: false,
	});
}
// 第四步
function putStickIn() {
	var check = checkList();
	if (check !== true) {
		window.alert(check);
		return;
	}
	// $('#ice-stick').addClass('ice-stice-put');
	$('#text').attr('disabled',true);
	$('#slice-main').draggable({
		disabled:true,
	});
	// 按鈕收起來
	$('#last').hide(0,function() {
		$('#none-last').show(0,function(){
			$('#stage-no').val(stageNo(setStage(sliceIndex)));
		});
	});
	$('#cto-category-stage').text(setStage(sliceIndex));
	draw(textureImg,fruiteColor[fruiteItem[0]],fruiteColor[fruiteItem[1]],sliceSrc);
}
function checkList() {
	if ($('#mold-price').text() == "") {
		return "模型未選";
	}
	if ($('#list-price-b').text() == "") {
		return "水果未選完成";
	}
	if ($('#slice-price').text() == "") {
		return "切片未選";
	}
	return true;
}
// 計算四階段
function setStage(slice) {
	var option1 = parseInt(fruiteQuality[fruiteItem[0]][0])+parseInt(fruiteQuality[fruiteItem[1]][0])+parseInt(sliceQuality[slice][0]);
	var option2 = parseInt(fruiteQuality[fruiteItem[0]][1])+parseInt(fruiteQuality[fruiteItem[1]][1])+parseInt(sliceQuality[slice][1]);
	var option3 = parseInt(fruiteQuality[fruiteItem[0]][2])+parseInt(fruiteQuality[fruiteItem[1]][2])+parseInt(sliceQuality[slice][2]);
	if (option1 > 20) {
		return "單身";
	}else if(option2 > 20){
		return "熱戀";
	}else if(option3 > 20){
		return "初戀";
	}else{
		return "分手";
	}
}
function stageNo(stage){
	switch (stage) {
		case '單身':
			return 1;
		case '初戀':
			return 2;
		case '熱戀':
			return 3;
		case '分手':
			return 4;
	}
}

// 計算總價
var total;
function totalPrice() {
	total = parseInt(slicePrice)+parseInt(AFruitePrice)+parseInt(BFruitePrice)+200;
	$('#total-price').text(total);
	$('#custom-price').val(total);
}
$(document).ready(function() {
	$('#last').click(lastChange);
	$('#next').click(nextChange);
	flow = $('.flow');
	step = $('.step-item');
	flowChange(nowFlow);
	stepChange(nowFlow);
	// 第一步
	$('.texture-select').click(imgChange);
	// 第二步
	$('.fruite-item').click(fruiteChange);
	// $('#angle').keyup(angleChange).change(angleChange).focus(function() {
	// 	$(this).css('borderColor','#333');
	// }).blur(function() {
	// 	$(this).css('borderColor','#ccc');
	// });
	$('.slice-item').click(imgPut);
	$('#slice-bigger').click(imgBigger);
	$('#slice-smaller').click(imgSmaller);
	sliceSizeChange(sliceSize);
	$('#ice-stick').hide();
	$('#complete-all').click(checkedSign);
});