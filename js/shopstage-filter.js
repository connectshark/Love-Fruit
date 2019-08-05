$(document).ready(function() {
	$('#all').click(function(){
		$('.general-item').css('display','block');
		$(this).css('backgroundColor','#fc7389');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('全部');
	});
	$('#single').click(function(){
		$('.general-item').css('display','none');
		$('.single').css('display','block');
		$(this).css('backgroundColor','#f6c555');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('單身');
	});
	$('#first-love').click(function(){
		$('.general-item').css('display','none');
		$('.first-love').css('display','block');
		$(this).css('backgroundColor','#0abbb5');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('初戀');
	});
	$('#fall-in-love').click(function(){
		$('.general-item').css('display','none');
		$('.fall-in-love').css('display','block');
		$(this).css('backgroundColor','#db4d6d')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('熱戀');
	});
	$('#break-up').click(function(){
		$('.general-item').css('display','none');
		$('.break-up').css('display','block');
		$(this).css('backgroundColor','#79a6cc')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('分手');
	});
	$('#id-popscial').click(function(){
		$('.general-item').css('display','none');
		$('.popscial').css('display','block');
		$(this).css('backgroundColor','#79a6cc')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('冰棒');
	});
	$('#id-ice-cream').click(function(){
		$('.general-item').css('display','none');
		$('.ball').css('display','block');
		$(this).css('backgroundColor','#79a6cc')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('冰淇淋');
	});
	$('#id-icecream-ball').click(function(){
		$('.general-item').css('display','none');
		$('.icecream').css('display','block');
		$(this).css('backgroundColor','#79a6cc')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('霜淇淋');
	});


	$('#select-pull').change(function(){
		map = $('#select-pull').val();
		switch (map) {
			case '全部':
				$('.general-item').css('display','block');
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(0).css('backgroundColor', '#fc7389');
				break;
			case '單身':
				$('.general-item').css('display','none');
				$('.single').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(1).css('backgroundColor', '#fc7389');
				break;
			case '初戀':
				$('.general-item').css('display','none');
				$('.first-love').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(2).css('backgroundColor', '#fc7389');
				break;
			case '熱戀':
				$('.general-item').css('display','none');
				$('.fall-in-love').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(3).css('backgroundColor', '#fc7389');
				break;
			case '分手':
				$('.general-item').css('display','none');
				$('.break-up').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(4).css('backgroundColor', '#fc7389');
				break;

			case '冰棒':
				$('.general-item').css('display','none');
				$('.popscial').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(2).css('backgroundColor', '#fc7389');
				break;
			case '霜淇淋':
				$('.general-item').css('display','none');
				$('.icecream').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(3).css('backgroundColor', '#fc7389');
				break;
			case '冰淇淋':
				$('.general-item').css('display','none');
				$('.ball').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(4).css('backgroundColor', '#fc7389');
				break;	
		}
	});


	
	$('#a-select-pull').change(function(){
		amap = $('#a-select-pull').val();
		switch (amap) {
			case '冰棒':
				$('.general-item').css('display','none');
				$('.popscial').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(2).css('backgroundColor', '#fc7389');
				break;
			case '霜淇淋':
				$('.general-item').css('display','none');
				$('.icecream').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(3).css('backgroundColor', '#fc7389');
				break;
			case '冰淇淋':
				$('.general-item').css('display','none');
				$('.ball').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(4).css('backgroundColor', '#fc7389');
				break;	
		}
	});




});