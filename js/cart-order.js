

$(function(){
    var $li = $('ul.tabtitle li');
        $($li. eq(0) .addClass('active').find('a').attr('href')).siblings('.tab-inner').hide();
    
        $li.click(function(){
            $($(this).find('a'). attr ('href')).show().siblings ('.tab-inner').hide();
            $(this).addClass('active'). siblings ('.active').removeClass('active');
        });
    });

// 把收件人資訊打成字串丟到php寫入訂單;
// function orderSession(){
 
// }
var confirm_btn = document.getElementsByClassName("confirm-shop")[0];
confirm_btn.addEventListener("click",function(e){

   let xhr = new XMLHttpRequest();
	
	xhr.onreadystatechange = function(){
    if(xhr.readyState ==4 ){
      if(xhr.status ==200){
          alert(xhr.responseText);
      }else{
        alert(xhr.status);
      }
    }
  }
    

    let url = "order-insert.php";
    xhr.open("post",url,true);
    let myForm = new FormData(e.target.parentNode.parentNode.parentNode.previousElementSibling.querySelector("form"));
    console.log(myForm );
    xhr.send(myForm);

});





// window.addEventListener("load",function(){
//     var confirm_btn = document.getElementsByClassName("confirm-shop"); 
//         confirm_btn.addEventListener("click",orderSession());
// })



    