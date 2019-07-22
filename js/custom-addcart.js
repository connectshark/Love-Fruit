$(document).ready(function() {
	$('#addcart').click(function() {
		console.log(imgPath);
		$.ajax({
			url: `../cto-addcart.php?img=${imgPath}`,
			type: 'GET',
			data: '',
		})
		.done(function(data) {
			alert(`${data}`);
			console.log("success");
		})
		.fail(function(data) {
			alert(`${data}`);
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	});
});