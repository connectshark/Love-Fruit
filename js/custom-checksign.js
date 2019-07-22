function checkedSign() {
	$.ajax({
		url:'../checksign.php',
		data: '',
		type: 'GET',
		success: function(data){
			if (data == true) {
				putStickIn();
			}else {
				$('#member-login').fadeIn('fast');
			}
		},
	});
}