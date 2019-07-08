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
// $("#latest-collection-love").click(function(){                                 //click事件
//     $(this).attr("src"," img/shop/collection-red.png");
//     if ($("#latest-collection-love").attr() == attr("src"," img/shop/collection-red.png")){
//          $("#latest-collection-love").click(function(){
//         $(this).attr("src"," img/shop/collection-gray.png");
//         })    
//     }
   
// });
//點擊愛心
var gray = true;
$("#latest-collection-love").click(function(){
    if(gray) {
        $(this).attr("src","img/shop/collection-red.png");
        gray = false;}
        else{
            $(this).attr("src","img/shop/collection-gray.png");
            gray = true;
        }
})



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


