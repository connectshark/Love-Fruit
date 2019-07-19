$(document).ready(function() {
	$("input[name='fruite[]']").click(function() {
			console.log($("input[name='fruite[]']:checked").length);
			console.log($("input[name='fruite[]']").not("input[name='fruite[]']:checked").length);
		if ($("input[name='fruite[]']:checked").length >= 2){
			$("input[name='fruite[]']").not("input[name='fruite[]']:checked").attr('disabled', true);
		}else{
			$("input[name='fruite[]']").not("input[name='fruite[]']:checked").attr('disabled', false);
		}
	});
	$('#complete-all').click(function(){
		$.ajax({
			url:'../custom-complete.php',
			data: $('#custom-choose').serialize(),
			type: 'POST',
			success: function(data){
				alert(`${data}`);
			},
		});
	});
});