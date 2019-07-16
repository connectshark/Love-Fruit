var cart = {};


//----------------數量改變時的事件處理器
function changeCart(e){
	let xhr = new XMLHttpRequest();
	
	xhr.onload = function (){
        cart = JSON.parse(xhr.responseText); //取回cart的最新狀況
        console.log(xhr.responseText);
        console.log(JSON.parse(xhr.responseText));
	}

	let url = "cart-show-update.php";
	xhr.open("post",url,true);

  let myForm = new FormData(e.target.form);
  console.log(e.target.form);
	xhr.send(myForm);
}


window.addEventListener("load" , function(){
    var qtya = document.getElementsByClassName("qty");
    for(var a=0; a<qtya.length; a++){
      console.log(qtya[a].value);
    }
    
    
    //----------------註冊+ , - 的事件處理器
    var qtyminus = document.getElementsByClassName("qtyminus");  // -
    for(var i=0; i<qtyminus.length; i++){
        qtyminus[i].onclick = function(e){
          
          var qtyBox = e.target.nextElementSibling;
          console.log(e.target.nextElementSibling);
          var qty = parseInt(qtyBox.value);

          if( qty>1){
              qty--;
              console.log(qty);
              qtyBox.value = qty;
              console.log(qtyBox.value);
           
              
              //.....
              changeCart(e);
              //  console.log( qtyBox.value);
          }
      };
     
    }  
     
    var qtyplus = document.getElementsByClassName("qtyplus");  // +
    for(var i=0; i<qtyplus.length; i++){
        qtyplus[i].onclick = function(e){
          var qtyBox = e.target.previousElementSibling;
          console.log(e.target.previousElementSibling);
          var qty = parseInt(qtyBox.value);
          qty++;
          console.log(qty);
          qtyBox.value = qty;
          console.log(qtyBox.value);
          changeCart(e);
      };
    }    
    // function deletecart(e){
    //   let xhr = new XMLHttpRequest();
	
    //   xhr.onload = function (e){
    //         cart = JSON.parse(xhr.responseText); //取回cart的最新狀況
    //         // console.log(cart);
    //   }
    
    //   let url = "cart-show-update.php";
    //   xhr.open("post",url,true);
    
    //   let myForm = new FormData(e.target.form);
    //   console.log(e.target.form);
    //   xhr.send(myForm);
    // }
    // // 刪除按鈕
    // var delet = document.getElementsByClassName("delete");
    // for(var i=0; i<delet.length; i++){
    //   delet[i].onclick = function(){
    //     deletecart(e);
    //   }
    // }







    });
    