$(document).ready(function() {
	$('#leaveMessage').click(checkedSign);
	$('#close-pop').click(function () {
		$('#pop').fadeOut('fast');
	});
	$('#all').click(function(){
		$('.message-item').show('slow');
		$(this).css('backgroundColor','#fc7389');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('全部');
	});
	$('#singlebtn').click(function(){
		$('.message-item').not('.single').hide('slow',function(){
			$('.single').show('slow');
		});
		$(this).css('backgroundColor','#f6c555');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('單身');
	});
	$('#trueLove').click(function(){
		$('.message-item').not('.true-love').hide('slow', function() {
			$('.true-love').show('slow');
		});
		$(this).css('backgroundColor','#0abbb5');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('初戀');
	});
	$('#hotLove').click(function(){
		$('.message-item').not('.hot-love').hide('slow', function() {
			$('.hot-love').show('slow');
		});
		$(this).css('backgroundColor','#db4d6d')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('熱戀');
	});
	$('#breakUp').click(function(){
		$('.message-item').not('.break-up').hide('slow', function() {
			$('.break-up').show('slow');
		});
		$(this).css('backgroundColor','#79a6cc')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('分手');
	});
	$('#filter-pull').change(function(){
		map = $('#filter-pull').val();
		switch (map) {
			case '全部':
				$('.message-item').show('slow');
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(0).css('backgroundColor', '#fc7389');
				break;
			case '單身':
				$('.message-item').not('.single').hide('slow',function(){
					$('.single').show('slow');
				});
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(1).css('backgroundColor', '#f6c555');
				break;
			case '初戀':
				$('.message-item').not('.true-love').hide('slow', function() {
					$('.true-love').show('slow');
				});
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(2).css('backgroundColor', '#0abbb5');
				break;
			case '熱戀':
				$('.message-item').not('.hot-love').hide('slow', function() {
					$('.hot-love').show('slow');
				});
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(3).css('backgroundColor', '#db4d6d');
				break;
			case '分手':
				$('.message-item').not('.break-up').hide('slow', function() {
					$('.break-up').show('slow');
				});
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(4).css('backgroundColor', '#79a6cc');
				break;
		}
	});
});
function checkedSign() {
	$.ajax({
		url:'checksign.php',
		data: '',
		type: 'GET',
		success: function(data){
			if (data == true) {
				checkCto();
			}else {
				$('#member-login').fadeIn('fast');
			}
		},
	});
}
function checkCto() {
	$.ajax({
		url: 'checkCto.php',
		data: '',
		type: 'GET',
	})
	.done(function(data) {
		console.log(data);
		if (data > 0) {
			location.href="writemessage.php";
		}else {
			$('#pop').fadeIn('fast');
		}
	});
	
}