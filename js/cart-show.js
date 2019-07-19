var cart = {};

	//...............trash
	function getTrash(e){
    // console.log(e);
    
		let miniItem = document.getElementById("show-wrap");
		let item = e.target.parentNode.parentNode.parentNode;
    let prod_no = item.firstElementChild.value;
    console.log(prod_no);
		let xhr = new XMLHttpRequest();
		
		xhr.onload = function (){
       console.log(item)
      miniItem.removeChild(item);// 消除視覺介面
      cart = JSON.parse(xhr.responseText);
      console.log(cart);
      cart = JSON.stringify(cart);
      console.log(cart);
      // delete cart[prod_no]; 消除記憶體
      

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
      
      var empty = document.getElementById("empty-text");
      console.log(empty );
      console.log(aaa);
      if( aaa.innerText == 0){
        empty.innerText = "dhdojwqoidjq";
      }
      // 購物車無資料顯示
    //   if( isCartEmpty()){
    //     window.alert("123");
    //   }
     
			
		}
	
		let url = "trash.php?prod_no=" + prod_no;
	
		xhr.open("get",url,true);
		console.log(this.parentNode);
		// let myForm = new FormData(this.parentNode);
		xhr.send(null);
	};
	// var trash = document.getElementsByClassName("fa-trash");
	var trash = document.getElementsByClassName("trash");
	// console.log(trash.length);
	for(i=0;i<trash.length;i++){
		trash[i].addEventListener("click",getTrash)
  };
  
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


window.addEventListener("load" , function(){
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