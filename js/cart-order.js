
let member_item = {};
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
          // console.log(xhr.responseText);
          // header("location:shop.php");
          window.location = "shop.php";
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
var same_member = document.getElementById("same-member");
var namer = document.getElementById("name");
var phone = document.getElementById("phone");
var add = document.getElementById("add");
var email = document.getElementById("email");
same_member.addEventListener("click" , function(){
    let xhr = new XMLHttpRequest();
    xhr.onload = function (){
      member_item = JSON.parse(xhr.responseText);
      console.log(member_item);
      if(same_member.checked){
        namer.value =  member_item[1];
        console.log(namer.value);
        email.value =  member_item[0];
        console.log(email.value);
      }else{
        namer.value = "";
        console.log(namer.value);
        email.value = ""  ;
        console.log(email.value);
      }
     
    }
  
    let url = "shoporder-member.php";
    xhr.open("get",url,true);
    // let myForm = new FormData(aaa);
    xhr.send(null);
    
  




})





// window.addEventListener("load",function(){
//     var confirm_btn = document.getElementsByClassName("confirm-shop"); 
//         confirm_btn.addEventListener("click",orderSession());
// })



    