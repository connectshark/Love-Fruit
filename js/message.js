



$(document).ready(function() {
	$('#all').click(function(){
		$('.message-item').css('display','flex');
		$(this).css('backgroundColor','#fc7389');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('全部');
	});
	$('#single').click(function(){
		$('.message-item').css('display','none');
		$('.single').css('display','flex');
		$(this).css('backgroundColor','#f6c555');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('單身');
	});
	$('#trueLove').click(function(){
		$('.message-item').css('display','none');
		$('.true-love').css('display','flex');
		$(this).css('backgroundColor','#0abbb5');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('初戀');
	});
	$('#hotLove').click(function(){
		$('.message-item').css('display','none');
		$('.hot-love').css('display','flex');
		$(this).css('backgroundColor','#db4d6d')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('熱戀');
	});
	$('#breakUp').click(function(){
		$('.message-item').css('display','none');
		$('.break-up').css('display','flex');
		$(this).css('backgroundColor','#79a6cc')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('分手');
	});
	$('#filter-pull').change(function(){
		map = $('#filter-pull').val();
		switch (map) {
			case '全部':
				$('.message-item').css('display','flex');
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(0).css('backgroundColor', '#fc7389');
				break;
			case '單身':
				$('.message-item').css('display','none');
				$('.single').css('display','flex');
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(1).css('backgroundColor', '#f6c555');
				break;
			case '初戀':
				$('.message-item').css('display','none');
				$('.true-love').css('display','flex');
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(2).css('backgroundColor', '#0abbb5');
				break;
			case '熱戀':
				$('.message-item').css('display','none');
				$('.hot-love').css('display','flex');
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(3).css('backgroundColor', '#db4d6d');
				break;
			case '分手':
				$('.message-item').css('display','none');
				$('.break-up').css('display','flex');
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(4).css('backgroundColor', '#79a6cc');
				break;
		}
	});
});