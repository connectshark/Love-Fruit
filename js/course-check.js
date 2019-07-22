$(document).ready(function(){
    $('.click-check').click(
      
    );
    
});


function checksign(){
        $.ajax({
            url:'checksign.php',
            data: '',
            type: 'GET',
            success: function(data){
                if (data == true) {
                   
                }else {
                    $('#member-login').fadeIn('fast');
                }
            },
        });
};