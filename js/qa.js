$(document).ready(function(){
    $("#asw1").click(function(){
        $(".q1").removeClass("show");
        $(".q2").addClass("show");
    });
    $("#asw2").click(function(){
        $(".q1").removeClass("show");
        $(".q3").addClass("show");
    });
    $("#asw3").click(function(){
        $(".q1").removeClass("show");
        $(".q4").addClass("show");
    });
    $("#asw4").click(function(){
        $(".q2").removeClass("show");
        $(".q3").addClass("show");
    });
    $("#asw5").click(function(){
        $(".q2").removeClass("show");
        $(".q4").addClass("show");
    });
    $("#asw6").click(function(){
        $(".q2").removeClass("show");
        $(".q6").addClass("show");
    });
    $("#asw7").click(function(){
        $(".q3").removeClass("show");
        $(".q4").addClass("show");
    });
    $("#asw8").click(function(){
        $(".q3").removeClass("show");
        $(".q5").addClass("show");
    });
    $("#asw9").click(function(){
        $(".q3").removeClass("show");
        $(".q7").addClass("show");
    });
    $("#asw10").click(function(){
        $(".q4").removeClass("show");
        $(".q6").addClass("show");
    });
    $("#asw11").click(function(){
        $(".q4").removeClass("show");
        $(".q7").addClass("show");
    });
    $("#asw12").click(function(){
        $(".q4").removeClass("show");
        $(".q8").addClass("show");
    });
    $("#asw13").click(function(){
        $(".q5").removeClass("show");
        $(".q6").addClass("show");
    });
    $("#asw14").click(function(){
        $(".q5").removeClass("show");
        $(".q7").addClass("show");
    });
    $("#asw15").click(function(){
        $(".q5").removeClass("show");
        $(".q8").addClass("show");
    });
    $("#asw16").click(function(){
        $(".q6").removeClass("show");
        $(".q7").addClass("show");
    });
    $("#asw17").click(function(){
        $(".q6").removeClass("show");
        $(".q9").addClass("show");
    });
    $("#asw18").click(function(){
        $(".q6").removeClass("show");
        $(".q10").addClass("show");
    });
    $("#asw19").click(function(){
        $(".q7").removeClass("show");
        $(".q8").addClass("show");
    });
    $("#asw20").click(function(){
        $(".q7").removeClass("show");
        $(".q9").addClass("show");
    });
    $("#asw21").click(function(){
        $(".q7").removeClass("show");
        $(".q10").addClass("show");
    });
    $("#asw22").click(function(){
        $(".q8").removeClass("show");
        $(".q9").addClass("show");
    });
    $("#asw23").click(function(){
        $(".result").removeClass("result-show");
        $(".pop-box").css("display","flex");
        $(".result-a").addClass("result-show");
    });
    $("#asw24").click(function(){
        $(".q8").removeClass("show");
        $(".q10").addClass("show");
    });
    $("#asw25").click(function(){
        $(".result").removeClass("result-show");
        $(".pop-box").css("display","flex");
        $(".result-c").addClass("result-show");
    });
    $("#asw26").click(function(){
        $(".result").removeClass("result-show");
        $(".pop-box").css("display","flex");
        $(".result-b").addClass("result-show");
    });
    $("#asw27").click(function(){
        $(".q9").removeClass("show");
        $(".q10").addClass("show");
    });
    $("#asw28").click(function(){
        $(".result").removeClass("result-show");
        $(".pop-box").css("display","flex");
        $(".result-c").addClass("result-show");
    });
    $("#asw29").click(function(){
        $(".result").removeClass("result-show");
        $(".pop-box").css("display","flex");
        $(".result-d").addClass("result-show");
    });
    $("#asw30").click(function(){
        $(".result").removeClass("result-show");
        $(".pop-box").css("display","flex");
        $(".result-b").addClass("result-show");
    });

    $(".pop-close").click(function(){
        $(".pop-box").css("display","none");
        $(".topic").children("div").removeClass("show");
        $(".q1").addClass("show");
    });

    $(".result-btn").click(function(){
        $(".pop-box").css("display","none");
        $(".topic").children("div").removeClass("show");
        $(".q1").addClass("show");
    });


    $(".result-btn").bind("click",function(){
 
        var id=$(this).attr("href");
  
        // 取得目標區塊的y座標
        var target_top = $(id).offset().top;
  
        // 取得body物件 這種寫法在各瀏覽器上最保險
        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
  
        // 移動捲軸無動畫效果
             //$body.scrollTop(target_top);
  
        // 移動捲軸有動畫效果
             $body.animate({
                   scrollTop: target_top
             }, 800);
  
    })
})