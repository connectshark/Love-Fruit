$(document).ready(function(){
    $('#submit').attr('disabled',true);
    $('#userTitle').focus(open).blur(close);
    $('#userContent').focus(open).blur(close);
    $('#userPhrase').focus(open).blur(close);
});
function open() {
	$(this).css('padding', '30px 20px');
}
function close(){
	$(this).css('padding', '5px 20px');
}