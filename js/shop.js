
let cart = {};
//..............................顯示購物車	
function showCart(){
	let html = "";
	if( isCartEmpty()){
		html = `<div class="no-item">尚無購物資料</div>`;
	}

	// html += "<input type='button' value='close' id='btnCloseCart'>";
	for(let prod_no in cart){
		console.log(cart);  //cart[prod_no]
		html += `
			<div class="mini-item-wrap">
				<div class="mini-img col-lg-3"><img src="img/shop/${cart[prod_no].prod_pic}" alt=""></div>
				<span class="mini-name col-lg-3">
					<a href="shop-inside.php?psn=${prod_no}">
					${cart[prod_no].prod_name}
					</a>	
				</span>
				<span class="mini-qty col-lg-1">${cart[prod_no].qty}x</span>
				<span class="mini-pri col-lg-2">NT${cart[prod_no].prod_price}</span>
				<div class="mini-trash col-lg-4"><i class="fas fa-trash"></i></div>
			</div>`;	
	}
	if( !isCartEmpty()){
		html += `<div class="gogo">結帳去</div>`;
	}
	
	document.getElementById("mini-item").innerHTML = html;
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
console.log(cart);

//----------------數量改變時的事件處理器
function changeCart(e){
	let xhr = new XMLHttpRequest();
	
	xhr.onload = function (e){
		cart = JSON.parse(xhr.responseText); //取回cart的最新狀況
		console.log(cart);
	}

	let url = "cart-update.php";
	xhr.open("post",url,true);
	console.log(this.parentNode);
	let myForm = new FormData(this.parentNode);
	xhr.send(myForm);
	
}

//.............取得購物車資料
// function getCart(){
//   let xhr = new XMLHttpRequest();
  
//   xhr.onload = function(){
//   	if( xhr.status == 200){
//   		console.log(xhr.responseText)
//   		cart = JSON.parse(xhr.responseText);
//   	}else{
//   		alert(xhr.status);
//   	}
//   }
//   let url = "get-cart.php";
//   xhr.open("get", url, true);
//   xhr.send(null);

// }



window.addEventListener("load", function(){
  //.............取得購物車資料
  showCart();

//按下購物車按鈕
var btn = document.getElementsByClassName("shop-buy-btn");
for(i=0;i<btn.length;i++){
	btn[i].addEventListener("click",changeCart);
}
document.getElementsByClassName("shop-buy-btn").onclick = function(){
	changeCart(e);}
//顯示加減數量
  var plus = document.getElementsByClassName("qtyplus");
  var min = document.getElementsByClassName("qtyminus");
//   var btn = document.getElementsByClassName("shop-buy-btn");
function plusnum () {
	var obj = this.parentNode.querySelectorAll(".qty")[0];
			var val = parseInt(obj.value);
			val++;
			// if (val + 1 < 100) {
			// }
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
	 
	  for(i=0;i<plus.length;i++){
		//     0123 4
		// plus[i].addEventListener("click",function(){
		//     console.log(i);
		//     console.log(plus[i]);
		//     qty[i].value ++;;
		// })
		plus[i].addEventListener("click", plusnum);
	  }
	  for(i=0;i<plus.length;i++){
		   min[i].addEventListener("click",minnum);
		 
		 
	  }
  //.............顯示購物車
  document.getElementsByClassName("shopping-cart-icon")[0].onclick = function(){
  	showCart();
  };
// 右上角購物車開關
$("#mini-cart").css("display" , "none");
$(".shopping-cart-icon").click(function(){
    $("#mini-cart").show();
})
$(".cart-close").click(function(){
	$("#mini-cart").css("display","none");
})


});	

  //----------------註冊數量改變時的事件處理器
   // 數量的輸入盒
//   let qtys = document.getElementsByName("qty"); 
//   for(let i=0; i<qtys.length; i++){
// 	qtys[i].onchange = changeCart;
//   }

  //----------------註冊+ , - 的事件處理器
//   let btnMinus = document.getElementsByClassName("btnMinus"); 
//   for(let i=0; i<btnMinus.length; i++){
// 	btnMinus[i].onclick = function(e){
// 		let qtyBox = e.target.nextElementSibling;
// 		let qty = parseInt(qtyBox.value);
// 		if( qty> 0){
// 			qty--;
// 			qtyBox.value = qty;
// 			//.....
// 			changeCart(e);
// 		}
// 	};
//   }  

//   let btnPlus = document.getElementsByClassName("btnPlus");  
//   for(let i=0; i<btnPlus.length; i++){
// 	btnPlus[i].onclick = function(e){
// 		let qtyBox = e.target.previousElementSibling;
// 		let qty = parseInt(qtyBox.value);
// 		qty++;
// 		qtyBox.value = qty;
// 		changeCart(e);
// 	};
//   }    



//自己寫數量加減                    
// window.addEventListener("load",function(){
//     var plus = document.getElementsByClassName("qtyplus");
//     var min = document.getElementsByClassName("qtyminus");
//     var qty = document.getElementsByClassName("qty");
//     // var qtynum = 0;
//         // btn.addEventListener("click",function(e){
//         //     e.preventDefault();

//         // })
//         function plusnum (){
//                 // this.value +=1;錯
//                 this.parentNode.children[1].value ++;
//                 console.log(this.value);
//             }
//         function minnum(){
//             if(this.parentNode.children[1].value>0){
//                 this.parentNode.children[1].value--;
//             } ;
//             console.log(this.value);
//         }

//         for(i=0;i<plus.length;i++){

//             //     0123 4
//             // plus[i].addEventListener("click",function(){
                
//             //     console.log(i);
//             //     console.log(plus[i]);
//             //     qty[i].value ++;;
//             // })
//             plus[i].addEventListener("click",plusnum);
//         }
//         for(i=0;i<plus.length;i++){
//              min[i].addEventListener("click",minnum);
//         }
//     })


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
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(1).css('backgroundColor', '#fc7389');
				break;
			case '初戀':
				$('.general-item').css('display','none');
				$('.first-love').css('display','block');
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(2).css('backgroundColor', '#fc7389');
				break;
			case '熱戀':
				$('.general-item').css('display','none');
				$('.fall-in-love').css('display','block');
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(3).css('backgroundColor', '#fc7389');
				break;
			case '分手':
				$('.general-item').css('display','none');
				$('.break-up').css('display','block');
				$('.filter').css('backgroundColor', '#a3a3a3');
				$('.filter').eq(4).css('backgroundColor', '#fc7389');
				break;
		}
	});
});

//點擊愛心
var love = document.getElementsByClassName("latest-collection-love");
for(var i=0 ;i< love.length; i++){
   love[i].addEventListener("click",change)
}                                                  
var gray = true;
function change(){
	if(gray) {
		$(this).attr("src","img/shop/collection-red.png");
		gray = false;
		console.log(gray);
		}else{
		$(this).attr("src","img/shop/collection-gray.png");
		gray = true;
	}
	
}



