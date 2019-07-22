
let cart = {};


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
  
window.addEventListener("load", function(){
    getCart();
    var click_love = document.getElementsByClassName("collection");
for(var i=0 ;i<click_love.length; i++){
	click_love[i].addEventListener("click",function(e){

		var imgSrc = this.getAttribute( "src" ); 
		// console.log(imgSrc);
			// 加入收藏
		if(imgSrc === "img/shop/collection-gray.png"){
			this.setAttribute( "src" ,"img/shop/collection-red.png" )
			let xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState ==4 ){
				  if(xhr.status ==200){
					//   alert(xhr.responseText);
				  }else{
					// alert(xhr.status);
				  }
				}
			  }
			let url = "add-favorite.php";
			xhr.open("post" , url ,false);
			console.log(this);
			console.log(this.parentNode);
			let myForm = new FormData(this.parentNode);
			xhr.send(myForm);
			
		}else{
			// 從收藏刪除
			this.setAttribute( "src" ,"img/shop/collection-gray.png" )
			let xhr = new XMLHttpRequest();



			xhr.onreadystatechange = function(){
				if(xhr.readyState ==4 ){
				  if(xhr.status ==200){
					//   alert(xhr.responseText);
				  }else{
					// alert(xhr.status);
				  }
				}
			  }


			let url = "delete-favorite.php";
			xhr.open("post" , url ,false);
			let myForm = new FormData(this.parentNode);
			xhr.send(myForm);
	}	



	})

	};


    // 註冊加減
 var plus = document.getElementsByClassName("qtyplus");
 var min = document.getElementsByClassName("qtyminus");	 
     for(i=0;i<plus.length;i++){
       plus[i].addEventListener("click", plusnum);
     }
     this.console.log()
     for(i=0;i<plus.length;i++){
          min[i].addEventListener("click",minnum);
     }
function plusnum () {
var obj = this.parentNode.querySelectorAll(".qty")[0];
        var val = parseInt(obj.value);
        val++;
        obj.value = val;
        // this.parentNode.parentNode.parentNode.querySelectorAll(".shop-btn")[0].querySelectorAll(".add-cart")[0].querySelectorAll(".qty")[0].value = val;
}
function minnum(){
    var obj = this.parentNode.querySelectorAll(".qty")[0];
    var val = parseInt(obj.value);
    if ( val>1){
    val--;
    obj.value = val;
    // this.parentNode.parentNode.parentNode.querySelectorAll(".shop-btn")[0].querySelectorAll(".add-cart")[0].querySelectorAll(".qty")[0].value = val;
    }     
}
//按下購物車按鈕
var btn = document.getElementsByClassName("detaild-shop-buy");
for(i=0;i<btn.length;i++){
	btn[i].addEventListener("click",changeCart);
}
document.getElementsByClassName("detaild-shop-buy").onclick = function(){
    changeCart(e)
        console.log(e);
    ;}

    

//----------------按下加入購物車的事件處理器
function changeCart(e){
	let xhr = new XMLHttpRequest();
    var aaa = document.getElementById("abc");
    console.log(aaa);
	xhr.onload = function (e){
		cart = JSON.parse(xhr.responseText); //取回cart的最新狀況
        console.log(cart);
        
	}

	let url = "shop-update.php";
    xhr.open("post",url,true);
    // console.log(this);
    // console.log(this.parentNode);
    //  console.log(this.parentNode.parentNode);
    let myForm = new FormData(aaa);
	xhr.send(myForm);
	
}




function showCart(){
	getCart();
	let html = "";
	if( isCartEmpty()){
		html = `<div class="no-item">尚無購物資料</div>`;
	}

	// html += "<input type='button' value='close' id='btnCloseCart'>";
	for(let prod_no in cart){
		console.log(cart);  //cart[prod_no]
		html += `
			<div class="mini-item-wrap">
				<span style='display:none'>${prod_no}</span>
				<div class="mini-img col-3 col-lg-2"><img src="img/shop/${cart[prod_no].prod_pic}" alt=""></div>
				<span class="mini-name col-3 col-lg-3">
					<a href="shop-inside.php?prod_no=${prod_no}">
					${cart[prod_no].prod_name}
					</a>	
				</span>
				<span class="mini-qty col-2 col-lg-3">${cart[prod_no].qty}x</span>
				<span class="mini-pri col-2 col-lg-3">NT${cart[prod_no].prod_price}</span>
				<div class="mini-trash col-2 col-lg-2"><img src="database/img_prod/trash.png" alt="" class="trash-img"></div>
			</div>`;	
	}
	if( !isCartEmpty()){

		html += `<div class="gogo"><a href="cart-show.php">結帳去</a></div>`;
	}
	
	document.getElementById("mini-item").innerHTML = html;
	//...............trash
	function getTrash(e){
		console.log(e);
		let miniItem = document.getElementById("mini-item");
		let item = e.target.parentNode.parentNode;
		let prod_no = item.firstElementChild.innerText;
		let xhr = new XMLHttpRequest();
		
		xhr.onload = function (){
			miniItem.removeChild(item);// 消除視覺介面
			cart = JSON.parse(xhr.responseText);
			// delete cart[prod_no]; 消除記憶體
			cart = JSON.stringify(cart);
			console.log(Object.keys(cart).length);
			if(Object.keys(cart).length == 2 ){
				html = "";
				html += '<div class="no-item">尚無購物資料</div>';
				document.getElementById("mini-item").innerHTML = html;
			}
			
		}
	
		let url = "trash.php?prod_no=" + prod_no;
	
		xhr.open("get",url,true);
		console.log(this.parentNode);
		// let myForm = new FormData(this.parentNode);
		xhr.send(null);
	}
	// var trash = document.getElementsByClassName("fa-trash");
	var trash = document.getElementsByClassName("trash-img");
	// console.log(trash.length);
	for(i=0;i<trash.length;i++){
		trash[i].addEventListener("click",getTrash)
	}
	
	//...............
	//----------------註冊數量改變時的事件處理器
	// let qtys = document.getElementsByName("qty");
	// for(let i=0; i<qtys.length; i++){
	// 	qtys[i].onchange = changeCart;
	// }
}	

function isCartEmpty(){
	if( JSON.stringify(cart) == "{}"){
		return true;
		
	}
	return false;
}
// console.log(cart);


// 右上角購物車開關
$("#mini-cart").css("display" , "none");
$(".shopping-cart-icon").click(function(){
    $("#mini-cart").show();
    showCart();
})
$(".cart-close").click(function(){
    $("#mini-cart").css("display","none");
})
// 手機版購物車
$("#mini-cart").css("display" , "none");
$("#shoppingCartIconP").click(function(){
    $("#mini-cart").show();
    showCart();
})
$(".cart-close").click(function(){
    $("#mini-cart").css("display","none");
})




})



