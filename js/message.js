$(document).ready(function() {
	$('#all').click(function(){
		$('.message-item').css('display','flex');
		$(this).css('backgroundColor','#fc7389');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
	});
	$('#single').click(function(){
		$('.message-item').css('display','none');
		$('.single').css('display','flex');
		$(this).css('backgroundColor','#f6c555');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
	});
	$('#trueLove').click(function(){
		$('.message-item').css('display','none');
		$('.true-love').css('display','flex');
		$(this).css('backgroundColor','#0abbb5');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
	});
	$('#hotLove').click(function(){
		$('.message-item').css('display','none');
		$('.hot-love').css('display','flex');
		$(this).css('backgroundColor','#db4d6d')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
	});
	$('#breakUp').click(function(){
		$('.message-item').css('display','none');
		$('.break-up').css('display','flex');
		$(this).css('backgroundColor','#79a6cc')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
	});
});