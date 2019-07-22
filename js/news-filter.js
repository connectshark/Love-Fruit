$(document).ready(function() {
	$('#all').click(function(){
		$('.item').show('slow');
		$(this).css('backgroundColor','#fc7389');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('全部');
	});
	$('#newgroup').click(function(){
		$('.item').not('.newgroup').hide('fast',function(){
			$('.newgroup').show('fast');
		});
		$(this).css('backgroundColor','#fc7389');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('揪團快訊');
	});
	$('#newpds').click(function(){
		$('.item').not('.newpds').hide('fast', function() {
			$('.newpds').show('fast');
		});
		$(this).css('backgroundColor','#fc7389');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('新品上市');
	});
	$('#park').click(function(){
		$('.item').not('.park').hide('fast', function() {
			$('.park').show('fast');
		});
		$(this).css('backgroundColor','#fc7389')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('園區公告');
	});
	$('#limit').click(function(){
		$('.item').not('.limit').hide('fast', function() {
			$('.limit').show('fast');
		});
		$(this).css('backgroundColor','#fc7389')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('季節限定');
	});
	$('#filter-pull').change(function(){
		map = $('#filter-pull').val();
		switch (map) {
			case '全部':
				$('.item').show('fast');
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(0).css('backgroundColor', '#fc7389');
				break;
			case '揪團快訊':
				$('.item').not('.newgroup').hide('fast',function(){
					$('.newgroup').show('fast');
				});
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(1).css('backgroundColor', '#fc7389');
				break;
			case '新品上市':
				$('.item').not('.newpds').hide('fast', function() {
					$('.newpds').show('fast');
				});
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(2).css('backgroundColor', '#fc7389');
				break;
			case '園區公告':
				$('.item').not('.park').hide('fast', function() {
					$('.park').show('fast');
				});
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(3).css('backgroundColor', '#fc7389');
				break;
			case '季節限定':
				$('.item').not('.limit').hide('fast', function() {
					$('.limit').show('fast');
				});
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(4).css('backgroundColor', '#fc7389');
				break;
		}
	});
});