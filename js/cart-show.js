var cart = {};

	//...............trash

	// var trash = document.getElementsByClassName("fa-trash");
	
  
// 檢查購物車清單是否為空
  // function isCartEmpty(){
  //   if( JSON.stringify(cart) == "{}"){
  //     return true;
  //   }
  //   return false;
  // }
  
//----------------數量改變時的事件處理器
function changeCart(e){
	let xhr = new XMLHttpRequest();
	
	xhr.onload = function (){
        cart = JSON.parse(xhr.responseText); //取回cart的最新狀況
        // console.log(xhr.responseText);
        // console.log(JSON.parse(xhr.responseText));
	}

	let url = "order-insert.php";
	xhr.open("post",url,true);

  let myForm = new FormData(e.target.form);
  // console.log(e.target.form);
	xhr.send(myForm);
}
//.............取得購物車資料
function getCart(){
  let xhr = new XMLHttpRequest();
  
  xhr.onload = function(){
  	if( xhr.status == 200){
			// console.log(xhr.responseText);
		  cart = JSON.parse(xhr.responseText);
		//   console.log(cart);
  	}else{
  		alert(xhr.status);
  	}
  }
  let url = "get-cart.php";
  xhr.open("get", url, true);
  xhr.send(null);

}

window.addEventListener("load" , function(){
  var trash = document.getElementsByClassName("trash-img");
	// console.log(trash.length);
	for(i=0;i<trash.length;i++){
		trash[i].addEventListener("click",cartshowTrash)
  };


	function cartshowTrash(e){
    var mini = document.getElementsByClassName("show-wrap")[0];
    console.log(mini);
    var mini_item = e.target.parentNode.parentNode.parentNode;
    console.log(mini_item);
    var prod_no = mini_item.firstElementChild.value;
    console.log(prod_no);
		let xhr = new XMLHttpRequest();
		 
		xhr.onload = function (){
      mini.removeChild(mini_item);
      // console.log(xhr.responseText);
      console.log(cart);
      cart = JSON.parse(xhr.responseText);
      console.log(cart);


      // 刪除項目總計跟著變
      let smalltotal = parseInt(e.target.parentNode.parentNode.previousElementSibling.querySelector("div span").innerText);
      // console.log(smalltotal);
      var big_total_minus = document.getElementById("big-total").innerText;
      // console.log(big_total_minus);
      math_big_total = parseInt(big_total_minus );
      // console.log(math_big_total );
      newtotal = math_big_total - smalltotal;
      // console.log(newtotal);
      var aaa = big_total_minus = document.getElementById("big-total");
      aaa.innerText = newtotal ;
      if(aaa.innerText == 0){
        let empty_text = document.getElementsByClassName("cart-column")[0];
        let go_buy = document.getElementsByClassName("go-buy")[0];
        empty_text.innerHTML="<div>尚無購物資料喔<div/>" ;
        go_buy.style.display="none";
      }
		}

    let url = "trash.php?prod_no=" + prod_no;
	
		xhr.open("get",url,true);
		console.log(this.parentNode);
		// let myForm = new FormData(this.parentNode);
		xhr.send(null);
	};



    var qtya = document.getElementsByClassName("qty");
    for(var a=0; a<qtya.length; a++){
      // console.log(qtya[a].value);
    }
    
    
    //----------------註冊+ , - 的事件處理器
    var qtyminus = document.getElementsByClassName("qtyminus");  // -
    for(var i=0; i<qtyminus.length; i++){
        qtyminus[i].onclick = function(e){
         
          var qtyBox = e.target.nextElementSibling;
          // console.log(e.target.nextElementSibling);
          var qty = parseInt(qtyBox.value);
          // console.log(qty);
          var price = parseInt(e.target.form.parentNode.previousElementSibling.querySelector("div span").innerText);
         
          // console.log(price);
          if( qty>1){
              qty--;
              // console.log(qty);
              qtyBox.value = qty;
              subtotal = price * qty;
              // console.log(subtotal);
              // console.log(e.target.form.parentNode.nextElementSibling);
              e.target.form.parentNode.nextElementSibling.querySelector("div span").innerText = subtotal;
              // console.log(qtyBox.value);
		        	// let subtotal = price * qty ;
              changeCart(e);
              //  console.log( qtyBox.value);
              document.getElementById("big-total").innerText = bigTotal();
          }
      };
     
    }  
     
    var qtyplus = document.getElementsByClassName("qtyplus");  // +
    for(var i=0; i<qtyplus.length; i++){
        qtyplus[i].onclick = function(e){
          var qtyBox = e.target.previousElementSibling;
          // console.log(e.target.previousElementSibling);
          var qty = parseInt(qtyBox.value);
          qty++;
         
          // console.log(qty);
          qtyBox.value = qty;
          var price = parseInt(e.target.form.parentNode.previousElementSibling.querySelector("div span").innerText);
          subtotal = price * qty;
          e.target.form.parentNode.nextElementSibling.querySelector("div span").innerText = subtotal;
          // console.log(qtyBox.value);
          changeCart(e);
          document.getElementById("big-total").innerText = bigTotal();
          
      };
    }
    
    
    function bigTotal(){
      let total = 0;
      let smalltotal = document.getElementsByClassName("small-total-span");
      console.log(smalltotal);
      for(let i = 0 ;i<smalltotal.length;i++){
        total += parseInt(smalltotal[i].innerText);
      }
      return total;
    }
   
  });