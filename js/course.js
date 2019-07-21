//scroll滑動到指定區塊




//pop-up
$('.pop-box').hide();
$('.join-btn').click(function(){
    console.log($(this).parent().index('.join-pop-btn'));
    $('.pop-box').eq($(this).parent().index('.join-pop-btn')).fadeIn('fast');
});

$('.closeBtn').click(function(){
    $('.pop-box').fadeOut('fast');
});



// //checkbox-num
// var select = document.getElementById('apply-num');
// for (var i = 1; i <= 20; i++) {
//   var opt = document.createElement("option");
//   opt.value = i;
//   opt.innerHTML = i;
//   select.appendChild(opt);
// }








//calender
// var today = new Date();
// var month = today.getMonth() + 1;
// var date;
// var space;
// var firstDay = new Date(today.getFullYear(), today.getMonth(), 1);

// if (month == 1 || month == 3 || month == 5 || month == 7 || month == 8 || month == 10 || month == 12) {
//     date = 31;
// } else if (month == 2) {
//     date = 28;
// } else {
//     date = 30;
// }

// if (firstDay.getDay() == 7) {
//     space = 0;
// } else {
//     space = firstDay.getDay();
// }

// var nowDate = document.getElementsByClassName('nowDate');
// window.addEventListener('load', function () {
//     for (var i = 1; i <= date; i++) {
//     nowDate[space - 1 + i].innerHTML = i;
//     }
//     nowDate[space + today.getDate() - 1].classList.add("now");
//     document.getElementById('mon').innerHTML = today.getFullYear() + "年" + month + "月" ;
// });
