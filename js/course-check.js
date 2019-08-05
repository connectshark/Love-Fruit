var btnindex;
$(document).ready(function(){
    $('.general-click-check').click(generalchecksign);
    $('.group-click-check').click(groupchecksign);
    $('.generalMsg-check').click(generalMsg);
    // $('.groupMsg-check').click(groupMsg);
    // $('.groupMsgReply-check').click(function(){  //button
    //     console.log($(this));
    //     btnindex= $(this).index('.groupMsgReply-check');
    //     groupMsgReply(btnindex);
    // });
    //..................
    let checkButtons = document.querySelectorAll('.groupMsgReply-check');
    console.log("checkButtons.length : " , checkButtons.length);
    for( let i=0; i<checkButtons.length; i++){
        checkButtons[i].onclick = function(e){
            checkButton = e.target;
        $.ajax({
            url:'checksign.php',
            data: '',
            type: 'GET',
            success: function(data){
                if (data == true) {  //已登入
                    check(checkButton);
                }else {
                    $('.pop-box').fadeOut('fast');
                    $('#member-login').fadeIn('fast');
                }
            },
        });   
        e.stopPropagation();//...
        //============    
        };
    }
    //.....................
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

function generalMsg(){
    $.ajax({
        url:'checksign.php',
        data: '',
        type: 'GET',
        success: function(data){
            if (data == true) {
                document.generalform.submit();
            }else {
                $('#member-login').fadeIn('fast');
            }
        },
    });
};


//揪團課程留言檢查登入-傳送留言

function groupMsg(){
    $.ajax({
        url:'checksign.php',
        data: '',
        type: 'GET',
        success: function(data){
            if (data == true) {
               return true;
            }else {
                $('#member-login').fadeIn('fast');
                return false;
            }
        },
    });
};



//揪團留言回覆檢查登入-傳送留言
function groupMsgReply(e){
    // console.log("index : " , e);
    $.ajax({
        url:'checksign.php',
        data: '',
        type: 'GET',
        success: function(data){
            if (data == true) {  //已登入
                // console.log("check");
                check(e);
            }else {
                $('.pop-box').fadeOut('fast');
                $('#member-login').fadeIn('fast');
            }
        },
    });
};
function check(checkButton){
    // console.log("checkButton " , checkButton);
    // if(document.getElementsByClassName("reply-box")[index].value == ""){
    //     window.alert('未填寫留言唷～');
    //     return;
    // }

    if(checkButton.form.querySelector(".reply-box").value== ""){
        window.alert('未填寫留言唷～');
        return;
    }
    sendReply(checkButton);
    $(".reply-box").val("");
}