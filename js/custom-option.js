$(document).ready(function() {
	$("input[name='fruite[]']").click(function() {
		if ($("input[name='fruite[]']:checked").length >= 2){
			$("input[name='fruite[]']").not("input[name='fruite[]']:checked").attr('disabled', true);
		}else{
			$("input[name='fruite[]']").not("input[name='fruite[]']:checked").attr('disabled', false);
		}
	});
});
function sendFormData(){
	$.ajax({
		url:'../custom-complete.php',
		data: $('#custom-choose').serialize(),
		type: 'POST',
		success: function(data){
			// alert(`${data}`);
			totalPrice();
		},
	});
}