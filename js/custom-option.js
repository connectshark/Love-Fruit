$(document).ready(function() {
	$("input[name='fruite[]']").click(function() {
		if ($("input[name='fruite[]']:checked").length >= 2){
			$("input[name='fruite[]']").not("input[name='fruite[]']:checked").attr('disabled', true);
		}else{
			$("input[name='fruite[]']").not("input[name='fruite[]']:checked").attr('disabled', false);
		}
	});
});
var imgPath;
function sendFormData(){
	$.ajax({
		url: 'custom-complete.php',
		type: 'POST',
		data: $('#custom-choose').serialize(),
	})
	.done(function(data) {
		imgPath=data;
	})
	.fail(function(data) {
		console.log("error");
		console.log(data);
		imgPath=data;
	})
	.always(function(data) {
		console.log("complete");
		imgPath=data;
	});
}
