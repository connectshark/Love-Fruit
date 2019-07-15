//泡泡飛
var screenWidth = window.screen.width;
if (screenWidth >=768){ //手機不執行
	for (var i = 0; i < 15; i++){ //泡泡數量
			var bubDiv = document.createElement('div');
			bubDiv.className = 'bubble'; //泡泡的class名稱 
			var bubSize = Math.random() * 50 + 20 + 'px';
			bubDiv.style.width = bubSize;
			bubDiv.style.height = bubSize;
			bubDiv.style.bottom = "100px";
			bubDiv.style.left = Math.random() * document.body.offsetWidth + 'px';
			// console.log(d.style.bottom);
			// console.log(bubDiv.style.left);
			$(bubDiv).appendTo(".bubble-box"); //把泡泡加到哪個div內
			Animate(bubDiv);
		}
		function Animate(bubSize) {
		  $(bubSize).animate({
		  //結束位置
		  bottom:'100%',
          left: '+=' + ((Math.random() * 100) - 50) + 'px'},
          Math.random() * 2000 + 3500,
          'linear', 
		  function() {
		  //start
		   bubSize.style.bottom = '0%';
		   Animate(bubSize)});
        }
}     
