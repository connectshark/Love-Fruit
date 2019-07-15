// 右上角購物車開關
$(".mini-cart").css("display" , "none");
$(".shopping-cart-icon").click(function(){
    $(".mini-cart").show();

})
$(".cart-close").click(function(){
    $(".mini-cart").hide();
})

