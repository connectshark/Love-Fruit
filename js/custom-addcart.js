$(document).ready(function() {
	$('#addcart').click(function() {
		console.log(total);
		$.ajax({
			url: `../cto-addcart.php?img=${imgPath}&price=${total}`,
			type: 'GET',
			data: '',
		})
		.done(function(data) {
			alert(`加入成功`);
		})
		.fail(function(data) {
			alert(`加入失敗`);
		})
	});
});