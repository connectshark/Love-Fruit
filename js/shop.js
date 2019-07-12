var storage = localStorage;
function doFirst(){
	if(storage['addItemList'] == null){
		storage['addItemList'] = '';	//storage.setItem('addItemList','');
	}

	// 幫每個Add Cart建事件聆聽功能
	var list = document.querySelectorAll('.shop-btn');		//list是陣列
	for(var i=0; i<list.length; i++){
		console.log(i);
		list[i].addEventListener('click', function(){
			// var teddyInfo = document.querySelector('#'+this.id+' input').value;
			var teddyInfo = document.querySelector(`#${this.id} input`).value;
			addItem(this.id, teddyInfo);
		});
	}
}
function addItem(itemId, itemValue){
	// alert(itemId+' : '+itemValue);
	var image = document.createElement('img');
	image.src = 'imgs/' + itemValue.split('|')[1];

	var title = document.createElement('span');
	title.innerText = itemValue.split('|')[0];

	var price = document.createElement('span');
	price.innerText = itemValue.split('|')[2];

	var newItem = document.getElementById('newItem');
	
	//先判斷此處是否已有物件，如果有要先刪除
	while(newItem.childNodes.length >= 1){
		newItem.removeChild(newItem.firstChild);
	}

	//再顯示新物件
	newItem.appendChild(image);
	newItem.appendChild(title);
	newItem.appendChild(price);

	//存入storage ?我看不懂 ?       
	if(storage[itemId]){
		alert('You have checked.');
	}else{
		storage[itemId] = itemValue;		//storage.setItem(itemId,itemValue);
		storage['addItemList'] += itemId + ', ';
	}

	//計算購買數量和小計
	var itemString = storage.getItem('addItemList');
	var items = itemString.substr(0,itemString.length-2).split(', ');
//	console.log(items);		//["A1001", "A1005", "A1006", "A1002"]
	subtotal = 0 ;
	for(var key in items){
		var itemInfo = storage.getItem(items[key]);
		var itemPrice = parseInt(itemInfo.split('|')[2]);
		subtotal += itemPrice;
	}
	document.getElementById('itemCount').innerText = items.length;
	document.getElementById('subtotal').innerText = subtotal;
}
window.addEventListener('load', doFirst);










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


// 點擊愛心 js
// window.addEventListener("load",function(){
	
// 	var love = document.getElementsByClassName("latest-collection-love");
// 	for(i=0;i<love.length;i++){
// 		love[i].addEventListener("click",chang);
// 		console.log(love[i]);
// 	}
// })
// function chang(){
// 	var gray = true;
// 	if(gray) {
// 		$(this).attr("src","img/shop/collection-red.png");
// 		gray = false;
// 		console.log(gray);
// 		}
// 		else{
// 			$(this).attr("src","img/shop/collection-gray.png");
// 			gray = true;
// 			console.log(gray);
// 		}
// }

// $(function() {
//     var status = true;
//     $("#latest-collection-love").click(function() {
//         if(status) {
//             $(this).attr.attr("src") ="img/shop/collection-red.png";
//             status = false;
//         }else{
//             $(this).attr.attr("src") = "img/shop/collection-gray.png"
//             status = true;
//         }
//     });
// })

// $(".img").click(function(){
//     if(this.src.search("../static/img/off.png")!=-1){
//         (this).src="../static/img/on.png";

//     }else{

//         (this).src="../static/img/off.png"
//     }
// })



//數量加減

window.addEventListener("load",function(){
    var plus = document.getElementsByClassName("qtyplus");
    var min = document.getElementsByClassName("qtyminus");
    var qty = document.getElementsByClassName("qty");
    // var qtynum = 0;
        // btn.addEventListener("click",function(e){
        //     e.preventDefault();

        // })
        function plusnum (){
                // this.value +=1;錯
                this.parentNode.children[1].value ++;
                console.log(this.value);
            }
        function minnum(){
            if(this.parentNode.children[1].value>0){
                this.parentNode.children[1].value--;
            } ;
            console.log(this.value);
        }

        for(i=0;i<plus.length;i++){

            //     0123 4
            // plus[i].addEventListener("click",function(){
                
            //     console.log(i);
            //     console.log(plus[i]);
            //     qty[i].value ++;;
            // })
            plus[i].addEventListener("click",plusnum);
        }
        for(i=0;i<plus.length;i++){
             min[i].addEventListener("click",minnum);
        }
    })


