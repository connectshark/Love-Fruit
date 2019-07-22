let cart = {};
console.log(JSON.stringify(cart));

//點擊愛心
var click_love = document.getElementsByClassName("latest-collection-love");
for(var i=0 ;i<click_love.length; i++){
	click_love[i].addEventListener("click",function(e){

		var imgSrc = this.getAttribute( "src" ); 
		// console.log(imgSrc);
			// 加入購物車
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
			// 從購物車刪除
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

//..............................顯示購物車	
function showCart(){
	getCart();
	let html = "";
	if(isCartEmpty()){
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
			console.log(xhr.responseText);
			
			cart = JSON.parse(xhr.responseText);
			// cart.typeof();
			// console.log(cart.typeof());
			// console.log(cart);
			cart = JSON.stringify(cart);
			console.log(Object.keys(cart).length);
			if(Object.keys(cart).length == 2 ){
				html = "";
				html += '<div class="no-item">尚無購物資料</div>';
				document.getElementById("mini-item").innerHTML = html;
			}
			// delete cart[prod_no]; 消除記憶體
		}
		let url = "trash.php?prod_no=" + prod_no;
		xhr.open("get",url,true);
		console.log(this.parentNode);
		xhr.send(null);
	}
	
	var trash = document.getElementsByClassName("trash-img");
	// console.log(trash.length);
	for(i=0;i<trash.length;i++){
		trash[i].addEventListener("click",getTrash)
	}
}	

function isCartEmpty(){
	if( JSON.stringify(cart) =="{}"){
		return true;
	}
		return false;
}

//----------------按下加入購物車的事件處理器
function changeCart(e){
	let xhr = new XMLHttpRequest();
	
	xhr.onload = function (e){
		cart = JSON.parse(xhr.responseText); //取回cart的最新狀況
		console.log(JSON.stringify(cart));
	}

	let url = "shop-update.php";
	xhr.open("post",url,true);
	console.log(this.parentNode);
	let myForm = new FormData(this.parentNode);
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


window.addEventListener("load", function(){
  //.............取得購物車資料
  getCart();
//按下購物車按鈕
var btn = document.getElementsByClassName("shop-buy-btn");
for(i=0;i<btn.length;i++){
	btn[i].addEventListener("click",changeCart);
}
document.getElementsByClassName("shop-buy-btn").onclick = function(){
	changeCart(e);}

 

function plusnum () {
	var obj = this.parentNode.querySelectorAll(".qty")[0];
			var val = parseInt(obj.value);
			val++;
			obj.value = val;
			this.parentNode.parentNode.parentNode.querySelectorAll(".shop-btn")[0].querySelectorAll(".add-cart")[0].querySelectorAll(".qty")[0].value = val;
}
function minnum(){
	var obj = this.parentNode.querySelectorAll(".qty")[0];
	var val = parseInt(obj.value);
	if ( val>1){
	val--;
	obj.value = val;
	this.parentNode.parentNode.parentNode.querySelectorAll(".shop-btn")[0].querySelectorAll(".add-cart")[0].querySelectorAll(".qty")[0].value = val;
	}
	// console.log(obj.value);
}
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

	// 右上角購物車滾輪
	$().on()





});	

//按鈕壞顏色
$(document).ready(function() {
	$('#all').click(function(){
		$('.general-item').css('display','block');
		$(this).css('backgroundColor','#fc7389');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('全部');
	});
	$('#single').click(function(){
		$('.general-item').css('display','none');
		$('.single').css('display','block');
		$(this).css('backgroundColor','#f6c555');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('單身');
	});
	$('#first-love').click(function(){
		$('.general-item').css('display','none');
		$('.first-love').css('display','block');
		$(this).css('backgroundColor','#0abbb5');
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('初戀');
	});
	$('#fall-in-love').click(function(){
		$('.general-item').css('display','none');
		$('.fall-in-love').css('display','block');
		$(this).css('backgroundColor','#db4d6d')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('熱戀');
	});
	$('#break-up').click(function(){
		$('.general-item').css('display','none');
		$('.break-up').css('display','block');
		$(this).css('backgroundColor','#79a6cc')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('分手');
	});
	$('#id-popscial').click(function(){
		$('.general-item').css('display','none');
		$('.popscial').css('display','block');
		$(this).css('backgroundColor','#79a6cc')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('冰棒');
	});
	$('#id-ice-cream').click(function(){
		$('.general-item').css('display','none');
		$('.ball').css('display','block');
		$(this).css('backgroundColor','#79a6cc')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('冰淇淋');
	});
	$('#id-icecream-ball').click(function(){
		$('.general-item').css('display','none');
		$('.icecream').css('display','block');
		$(this).css('backgroundColor','#79a6cc')
		$('.filter').not(this).css('backgroundColor', '#a3a3a3');
		$('#filter-pull').val('霜淇淋');
	});


	$('#select-pull').change(function(){
		map = $('#select-pull').val();
		switch (map) {
			case '全部':
				$('.general-item').css('display','block');
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(0).css('backgroundColor', '#fc7389');
				break;
			case '單身':
				$('.general-item').css('display','none');
				$('.single').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(1).css('backgroundColor', '#fc7389');
				break;
			case '初戀':
				$('.general-item').css('display','none');
				$('.first-love').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(2).css('backgroundColor', '#fc7389');
				break;
			case '熱戀':
				$('.general-item').css('display','none');
				$('.fall-in-love').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(3).css('backgroundColor', '#fc7389');
				break;
			case '分手':
				$('.general-item').css('display','none');
				$('.break-up').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(4).css('backgroundColor', '#fc7389');
				break;

			case '冰棒':
				$('.general-item').css('display','none');
				$('.popscial').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(2).css('backgroundColor', '#fc7389');
				break;
			case '霜淇淋':
				$('.general-item').css('display','none');
				$('.icecream').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(3).css('backgroundColor', '#fc7389');
				break;
			case '冰淇淋':
				$('.general-item').css('display','none');
				$('.ball').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(4).css('backgroundColor', '#fc7389');
				break;	
		}
	});


	
	$('#a-select-pull').change(function(){
		amap = $('#a-select-pull').val();
		switch (amap) {
			case '冰棒':
				$('.general-item').css('display','none');
				$('.popscial').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(2).css('backgroundColor', '#fc7389');
				break;
			case '霜淇淋':
				$('.general-item').css('display','none');
				$('.icecream').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(3).css('backgroundColor', '#fc7389');
				break;
			case '冰淇淋':
				$('.general-item').css('display','none');
				$('.ball').css('display','block');
				// $('.filter').css('backgroundColor', '#a3a3a3');
				// $('.filter').eq(4).css('backgroundColor', '#fc7389');
				break;	
		}
	});




});


