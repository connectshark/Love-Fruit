$(document).ready(function() {
	$('#addcart').click(checkedSign);
});
function checkedSign() {
	$.ajax({
		url:'../checksign.php',
		data: '',
		type: 'GET',
		success: function(data){
			if (data === true) {
				alert('有');
			}else {
				alert('沒有');
			}
		},
	});
}