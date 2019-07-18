

$(function(){
    var $li = $('ul.tabtitle li');
        $($li. eq(0) .addClass('active').find('a').attr('href')).siblings('.tab-inner').hide();
    
        $li.click(function(){
            $($(this).find('a'). attr ('href')).show().siblings ('.tab-inner').hide();
            $(this).addClass('active'). siblings ('.active').removeClass('active');
        });
    });

// 把收件人資訊打成字串丟到php寫入訂單;
function orderSession(){
    let xhr = new XMLHttpRequest();
	
	xhr.onload = function (e){
		cart = JSON.parse(xhr.responseText); //取回cart的最新狀況
		console.log(cart);
	}
    var member = {};
    member.name = document.getElementById(name).value;
    member.phone = document.getElementById(phone).value;
    member.email = document.getElementById(email).value;
    if( document.getElementsByName("pay")[0].checked){
        member.pay = 0;
      }else{
        member.pay = 1;
      }

      if( document.getElementsByName("transport")[0].checked){
        member.transport = 0;
      }else{
        member.transport = 2;
      }  




      var jsonStr = JSON.stringify( member );
      var url = "order-inset.php?jsonStr=" + jsonStr ;

    // console.log(this.parentNode);
    xhr.open("get",url,true);
	xhr.send(myForm);
}





window.addEventListener("load",function(){
    var confirm_btn = document.getElementsByClassName("confirm-shop"); 
        confirm_btn.addEventListener("click",orderSession);
})



    