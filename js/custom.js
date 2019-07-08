var nowFlow = 1;
fruite = []
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
function fruiteChange() {
	var src = $(this).children().children().attr('src');
	var alt = $(this).children().children().attr('alt');
	$('.fruite-item').children('figure').css('backgroundColor','#f596aa');
	$(this).children('figure').css('backgroundColor','#db4d6d');
	// 選兩個內容
	$("input[name='fruite[]']").attr('disabled', true);
	var checked = $("input[name='fruite[]']:checked").length;
	if (checked >= 2) {
		$("input[name='fruite[]']:checked").attr('disabled', false);
	} else {
		$("input[name='fruite[]']").attr('disabled', false);
	}
	num = $("input[name='fruite[]']").index();
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
	$('.fruite-item').click(fruiteChange);
});