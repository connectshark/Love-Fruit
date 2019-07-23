$(document).ready(function(){
    $('.click-check').click(checksign);
    
});

function checksign(){
    $.ajax({
        url:'checksign.php',
        data: '',
        type: 'GET',
        success: function(data){
            if (data == true) {
                location.href="index.php";
            }else {
                $('#member-login').fadeIn('fast');
            }
        },
    });
};
