var list;
var cfoNo;
$(document).ready(function() {
	$('.great-btn').click(function() {
		list = $(this).index('.great-btn');
		cfoNo = $('.cfs-no').eq(list).text();
		checkSign();
	});
});
function checkSign() {
	$.ajax({
		url: 'checksign.php',
		type: 'GET',
		data: '',
	})
	.done(function(data) {
		if (data == true) {
			clickGreat(cfoNo);
		}else{
			$('#member-login').fadeIn('fast');
		}
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}
function clickGreat(number) {
	$.ajax({
		url: `clickGreat.php?cfo_no=${number}`,
		type: 'GET',
		data:'',
	})
	.done(function(data) {
		$('.great-btn').children('span').eq(list).text(`${data}`);
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}