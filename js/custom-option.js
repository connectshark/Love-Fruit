$(document).ready(function() {
	$("input[name='fruite[]']").click(function(e) {
	    var obj=document.getElementsByName("fruite");
	    var num=0;
	    for (var i=0;i<obj.length ;i++ )
	        if (obj[i].checked) num++;

	    if (num>2){
	        for (var i=0;i<obj.length ;i++){
	            e.target.checked=false;
	        }
	    }
	});
});