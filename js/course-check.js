$(document).ready(function(){
    $('.general-click-check').click(generalchecksign);
    $('.group-click-check').click(groupchecksign);
});
//一般課程報名檢查登入-跳轉至報名表單
function generalchecksign(){
    $.ajax({
        url:'checksign.php',
        data: '',
        type: 'GET',
        success: function(data){
            if (data == true) {
                location.href="course-general-form.php";
            }else {
                $('#member-login').fadeIn('fast');
            }
        },
    });
};

//揪團課程主揪報名檢查登入-跳轉至報名表單
function groupchecksign(){
    $.ajax({
        url:'checksign.php',
        data: '',
        type: 'GET',
        success: function(data){
            if (data == true) {
                location.href="course-group-form.php";
            }else {
                $('#member-login').fadeIn('fast');
            }
        },
    });
};

//一般課程留言檢查登入-傳送留言

// function groupchecksign(){
//     $.ajax({
//         url:'checksign.php',
//         data: '',
//         type: 'GET',
//         success: function(data){
//             if (data == true) {
//                 location.href="course-group-form.php";
//             }else {
//                 $('#member-login').fadeIn('fast');
//             }
//         },
//     });
// };


//揪團課程留言檢查登入-傳送留言