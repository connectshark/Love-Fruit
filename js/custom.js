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
// 第一步換圖
function imgChange(){
	var src = $(this).children().children().attr('src');
	var alt = $(this).children().children().attr('alt');
	console.log(src);
	$('#texture-main').attr({
		src:src,
		alt:alt,
	});
	$('.list-description').eq(0).text(alt);
	$('#texture-min-img').attr('src',src);
	$('#texture-min').css('backgroundColor','#f596aa');
	$('.texture-select').children('figure').css('backgroundColor','#f596aa');
	$(this).children('figure').css('backgroundColor','#db4d6d');
}
// 第二步換水果
fruitePrice = [200,180,360,270,195,954];
fruiteQuality = new Array();
fruiteQuality[0] = [5,6,8];//青蘋果
fruiteQuality[1] = [2,7,7];//香蕉
fruiteQuality[2] = [9,0,4];//藍莓
fruiteQuality[3] = [7,2,5];//橘子
fruiteQuality[4] = [8,8,1];//葡萄
fruiteQuality[5] = [1,3,8];//草莓
// fruiteName = ['greenapple','banana','blueberry','orange','grape','streberry'];
fruiteColor = ['green','yellow','blue','orange','purple','red'];
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
}
function persentChange() {
	if (fruiteItem.length == 1) {
		$('.progress-bar').css('width',0);
		$.each(fruiteQuality[fruiteItem[0]],function(index, el) {
			$('.progress-bar').eq(index).css('width', el * 5 +"%");
		});
	}else if(fruiteItem.length == 2){
		for (var i = 0; i <3; i++) {
			$('.progress-bar').eq(i).css('width', ( fruiteQuality[fruiteItem[0]][i]+fruiteQuality[fruiteItem[1]][i] ) * 5 +"%");
		}
	}else{
		$('.progress-bar').css('width',0);
	}
}
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
		$('#list-price-a').text(fruitePrice[fruiteItem[0]]);
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
	}else if (fruiteItem.length == 2) {
		Afruite = fruiteColor[fruiteItem[0]];
		Bfruite = fruiteColor[fruiteItem[1]];
		var Aimg = $('.fruite-item').eq(fruiteItem[0]).children().children().attr('src');
		var Bimg = $('.fruite-item').eq(fruiteItem[1]).children().children().attr('src');
		$('.gradual-item').eq(0).children().attr('src', Aimg);
		$('.gradual-item').eq(1).children().attr('src', Bimg);
		$('#range').css({
			'backgroundColor' : 'transparent',
			'backgroundImage' : 'linear-gradient(to right, '+Afruite+','+$('#range').val()+'%,'+Bfruite+')',
		});
	}else {
		$('.gradual-item').children().attr('src', '');
		$('#range').css({
			'backgroundColor' : '#fff',
			'backgroundImage' : 'none',
		});
	}
}
function gradintChange() {
	if (fruiteItem.length == 2) {
		fiftyPersent = $(this).val();
		$(this).css('backgroundImage','linear-gradient(to right, '+Afruite+','+fiftyPersent+'%,'+Bfruite+')');
	}
}
function angleChange() {
	if ($(this).val() > 360 || $(this).val() < 0 ) {
		$(this).css('borderColor','#FF4500');
		return;
	}
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
	$('#range').change(gradintChange);
	$('#angle').keyup(angleChange).focus(function() {
		$(this).css('borderColor','#333');
	}).blur(function() {
		$(this).css('borderColor','#ccc');
	});
});