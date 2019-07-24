$(document).ready(function() {
	$('.tip-close').click(function() {
		$('.tip').eq($(this).index('.tip-close')).fadeOut('slow');
	});
});